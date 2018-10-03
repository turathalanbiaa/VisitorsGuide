<template>
    <div>
            <nav class="navbar navbar-dark fixed-top bg-blue-gradient">
                <div class="container p-0">
                <a class="navbar-brand m-0 w-75 text-truncate text-white">
                    <span > دليل استضافة الزائرين</span>
                </a>
                <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">
                    <a href="/" class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2">
                        <i class="fa fa-home text-white align-middle"></i>
                    </a>
                </div>
                </div>
            </nav>
        <div class="container pt-2">
            <div class="row" v-if="form.user_id != null">
            <div class="col-md-12">
                <b-btn class="mb-2" size="sm" variant="outline-primary"  v-b-modal.modalAdd >أضافة</b-btn></div>

                <!-- Add Modal Component -->
                <b-modal id="modalAdd" ref="modalAdd" title="أضافة" @shown="resetForm()"  hide-footer>

                    <b-form @submit="saveForm">
                        <b-form-group label=":أسم صاحب المنزل" label-for="home_owner">
                            <b-form-input id="home_owner"
                                          size="sm"
                                          type="text"
                                          v-model="form.home_owner"
                                          required
                                          placeholder="Enter name">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label=":العدد" label-for="persons_number">
                            <b-form-input id="persons_number"
                                          size="sm"
                                          type="number"
                                          v-model="form.persons_number"
                                          required
                                          placeholder="Enter name">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="النوع:" label-for="persons_type">
                            <b-form-select id="persons_type"
                                           size="sm"
                                           :options="persons_type_option"
                                           required
                                           v-model="form.persons_type">
                            </b-form-select>
                        </b-form-group>

                        <b-form-group label=":العنوان" label-for="address">
                            <b-form-input id="address"
                                          size="sm"
                                          type="text"
                                          v-model="form.address"
                                          required
                                          placeholder="Enter address">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="التليفون :" label-for="phone">
                            <b-form-input id="phone"
                                          size="sm"
                                          type="text"
                                          v-model="form.phone"
                                          required
                                          placeholder="Enter phone">
                            </b-form-input>
                        </b-form-group>



                        <b-form-group label="الحالة:" label-for="is_active">
                            <b-form-select id="is_active"
                                           size="sm"
                                           :options="is_active_option"
                                           required
                                           v-model="form.is_active">
                            </b-form-select>
                        </b-form-group>

                        <b-form-group label="التاريخ:" label-for="date">
                            <b-form-input id="date"
                                           size="sm"
                                           type="date"
                                           v-model="form.date"
                                           required>
                            </b-form-input>
                        </b-form-group>

                        <b-button size="sm" type="submit" variant="outline-primary">حفظ</b-button>
                        <b-button size="sm" @click="resetForm()" variant="outline-danger">جديد</b-button>
                    </b-form>

                </b-modal>

            <!-- Update Modal Component -->
            <b-modal id="modalUpdate" ref="modalUpdate" title="تعديل" hide-footer>

                <b-form @submit="updateForm">
                    <b-form-group label=":أسم صاحب المنزل" label-for="home_owner">
                        <b-form-input id="home_owner"
                                      size="sm"
                                      type="text"
                                      v-model="form.home_owner"
                                      required
                                      placeholder="Enter name">
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label=":العدد" label-for="persons_number">
                        <b-form-input id="persons_number"
                                      size="sm"
                                      type="number"
                                      v-model="form.persons_number"
                                      required
                                      placeholder="Enter name">
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="النوع:" label-for="persons_type">
                        <b-form-select id="persons_type"
                                       size="sm"
                                       :options="persons_type_option"
                                       required
                                       v-model="form.persons_type">
                        </b-form-select>
                    </b-form-group>

                    <b-form-group label=":العنوان" label-for="address">
                        <b-form-input id="address"
                                      size="sm"
                                      type="text"
                                      v-model="form.address"
                                      required
                                      placeholder="Enter address">
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="التليفون :" label-for="phone">
                        <b-form-input id="phone"
                                      size="sm"
                                      type="text"
                                      v-model="form.phone"
                                      required
                                      placeholder="Enter phone">
                        </b-form-input>
                    </b-form-group>



                    <b-form-group label="الحالة:" label-for="is_active">
                        <b-form-select id="is_active"
                                       size="sm"
                                       :options="is_active_option"
                                       required
                                       v-model="form.is_active">
                        </b-form-select>
                    </b-form-group>

                    <b-form-group label="التاريخ:" label-for="date">
                        <b-form-input id="date"
                                      size="sm"
                                      type="date"
                                      v-model="form.date"
                                      required>
                        </b-form-input>
                    </b-form-group>

                    <b-button size="sm" type="submit" variant="outline-primary">حفظ</b-button>
                </b-form>

            </b-modal>

                <b-modal ref="modelDelete"  hide-header hide-footer>
                    <p class="my-4">هل انت متأكد؟</p>
                    <b-button @click="destroy()" size="sm"  variant="outline-success">
                        نعم
                    </b-button>
                    <b-button @click="$refs.modelDelete.hide()" size="sm" variant="outline-danger">
                        الغاء
                    </b-button>
                </b-modal>

            <div v-for="(item,index) in list" v-bind:key="item.id" class="col-12 col-sm-6">
                <div class="card shadow p-0 mb-5">

                    <div class="card-body">
                        <div class="card-header bg-white text-center">
                            <h6 class="card-title">
                                <span>صاحب المنزل:</span>
                                {{item.home_owner}}
                            </h6>
                        </div>
                        <div class="card-text">
                            <ul class="list-group list-group-flush p-0">
                                <li class="list-group-item">
                                    <span>عدد الافراد :</span>
                                    {{item.persons_number}}
                                </li>
                                <li class="list-group-item">  <span>الاشخاض :</span>
                                    {{getType(item.persons_type)}}
                                </li>
                                <li class="list-group-item">  <span>العنوان : </span>
                                    {{item.address}}
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white">
                            <b-btn @click="iniUpdate(index)"  size="sm" variant="outline-success"  v-b-modal.modalUpdate>تعديل</b-btn>
                            <b-btn @click="iniDelete(item.id)"  size="sm" variant="outline-danger">حذف</b-btn>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            <div v-else> <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">شكرا ايها الزائر الكريم لاستخدامك خدماتنا</h4>
                <p>للوصل الى لائحة الاعدادات المتعلقة باستضافة الزائرين يرجى تسجيل الدخول او التسجيل ان لم يكن لديك حساب</p>
                <hr>
                <a href="/road-guide" class="mb-0">التسجيل</a>
            </div></div>
        </div>

        <div class="col-md-12">
            <router-link to="/" class="float bg-blue-gradient"><i class="fa fa-arrow-right my-float"></i></router-link>
        </div>
        </div>


</template>

<script>
    export default {
        mounted(){
            axios.get('session')
                .then(({data})=>{
                    console.log('mounted');
                    this.form.user_id=data;
                    this.iniData();
                })
                .catch((resp)=> {
                    console.log(resp);
                    alert("Could not create");
                });

        },
        data() {
            return {
                text:null,
                show: true,
                list:[],
                id:null,
                form: {
                    id:null,
                    user_id:null,
                    home_owner:null,
                    persons_number:null,
                    persons_type:null,
                    address:null,
                    phone:null,
                    is_active:null,
                    date:null,
                },
                 persons_type_option: [
                    { text: 'اختيار رجاء', value: null },
                    { text: 'رجال', value: 1 },
                    { text: 'نساء', value: 2 },
                    { text: 'عوائل', value: 3 },
                ],
                is_active_option: [
                    { text: 'اختيار رجاء', value: null },
                    { text: 'فعال', value: 1 },
                    { text: 'غير فعال', value: 0 },
                ],

            }
        },
        methods: {
            iniData(){
                axios.get('api/dashboard',{params:{user_id:this.form.user_id}})
                    .then(({data})=>{
                        console.log('mounted');
                        this.list=data.data;

                    })
                    .catch((resp)=> {
                        console.log(resp);
                        alert("Could not create");
                    });
            },
            getType(arg) {
                switch (arg) {
                    case 1:
                        return "رجال";
                        break;
                    case 2:
                        return "نساء";
                        break;
                    case 3:
                        return "عوائل";
                        break;
                }
            },
            saveForm (evt) {
                evt.preventDefault();
                this.$refs.modalAdd.hide();
                axios.post('api/reception',this.form)
                    .then(({data})=> {
                        this.text='تمت عملية الأضافه بنجاح';
                        this.snackBar('success');
                       this.iniData();
                    })
                    .catch(function (resp) {
                        console.log(resp);

                    });
            }, updateForm () {
                this.$refs.modalUpdate.hide();
                axios.put('api/reception',this.form)
                    .then(({data})=> {
                        this.text='تمت عملية التعديل بنجاح';
                        this.snackBar('success');
                        this.iniData();
                    })
                    .catch(function (resp) {
                        console.log(resp);

                    });
            },iniDelete (id) {
                this.id=id;
                this.$refs.modelDelete.show();


            },
            destroy(){
                this.$refs.modelDelete.hide();
                axios.delete('api/reception/'+this.id)
                    .then(({data})=> {
                        this.text='تمت عملية الحذف بنجاح';
                        this.snackBar('success');
                        this.iniData();
                    })
                    .catch(function (resp) {
                        console.log(resp);
                    });
            },
            iniUpdate(index){
                    this.form.id=this.list[index].id;
                    this.form.user_id=this.list[index].user_id;
                    this.form.home_owner=this.list[index].home_owner;
                    this.form.persons_number=this.list[index].persons_number;
                    this.form.persons_type=this.list[index].persons_type;
                    this.form.address=this.list[index].address;
                    this.form.phone=this.list[index].phone;
                    this.form.is_active=this.list[index].is_active;
                    this.form.date=this.list[index].date;
            },
            resetForm () {
                /* Reset our form values */
                this.form.home_owner =null;
                this.form.persons_number = null;
                this.form.persons_type = null;
                this.form.address = null;
                this.form.phone = null;
                this.form.is_active = null;
                this.form.date = null;
                /* Trick to reset/clear native browser form validation state */
                this.show = false;
                this.$nextTick(() => { this.show = true });
            },
            snackBar (method) {
                let config = {
                    text: this.text,
                    button: 'حسنا',

                };
                this.$snack[method](config)
            },
        }
    }
</script>

<style scoped>
    .float {
        position: fixed;
        width: 50px;
        height: 50px;
        bottom: 50px;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
    }

    .my-float {
        margin-top: 19px;
    }
</style>
