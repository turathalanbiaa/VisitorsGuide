<template>
    <div>
        <nav class="navbar fixed-top navbar-dark bg-vg-dark">
            <div class="container p-0">
                <a class="navbar-brand m-0 w-75 text-truncate text-white">
                    <span >{{trans("words.reception_title")}}</span>
                </a>
                <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">
                    <router-link to="/" class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2">
                        <i class="fa fa-arrow-left text-white align-middle" style="width: 14px;"></i>
                    </router-link>
                </div>
            </div>
        </nav>
        <div class="container pt-2">
            <div class="row" v-if="form.user_id>0">
                <div class="col-md-12">
                    <b-btn class="mb-2" size="sm" variant="outline-primary"  v-b-modal.modalAdd >{{trans("words.add")}}</b-btn></div>

                <!-- Add Modal Component -->
                <b-modal id="modalAdd" ref="modalAdd" :label='trans("words.add")' @shown="resetForm()"  hide-footer>

                    <b-form @submit="saveForm">
                        <b-form-group :label='trans("words.reception_home_owner_name")' label-for="home_owner">
                            <b-form-input id="home_owner"
                                          size="sm"
                                          type="text"
                                          v-model="form.home_owner"
                                          required>
                            </b-form-input>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_persons_number")' label-for="persons_number">
                            <b-form-input id="persons_number"
                                          size="sm"
                                          type="number"
                                          v-model="form.persons_number"
                                          required>
                            </b-form-input>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_persons_type")' label-for="persons_type">
                            <b-form-select id="persons_type"
                                           size="sm"
                                           :options="persons_type_option"
                                           required
                                           v-model="form.persons_type">
                            </b-form-select>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_address")' label-for="address">
                            <b-form-input id="address"
                                          size="sm"
                                          type="text"
                                          v-model="form.address"
                                          required>
                            </b-form-input>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_phone")' label-for="phone">
                            <b-form-input id="phone"
                                          size="sm"
                                          type="text"
                                          v-model="form.phone"
                                          required
                            >
                            </b-form-input>
                        </b-form-group>



                        <b-form-group :label='trans("words.reception_state")' label-for="is_active">
                            <b-form-select id="is_active"
                                           size="sm"
                                           :options="is_active_option"
                                           required
                                           v-model="form.is_active">
                            </b-form-select>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_date")' label-for="date">
                            <b-form-input id="date"
                                          size="sm"
                                          type="date"
                                          v-model="form.date"
                                          required>
                            </b-form-input>
                        </b-form-group>
                        <b-form-group>
                            <b-button size="sm" @click="geolocate()" variant="outline-info">تحديد الموقع</b-button>
                        </b-form-group>
                        <b-form-group label='خط العرض' label-for="lat">
                            <b-form-input id="lat"
                                          size="sm"
                                          type="text"
                                          v-model="form.lat"
                                          readonly
                                          required >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group label='خط الطول' label-for="lng">
                            <b-form-input id="lng"
                                          size="sm"
                                          type="text"
                                          v-model="form.lng"
                                          readonly
                                          required>
                            </b-form-input>

                        </b-form-group>

                        <b-button size="sm" type="submit" variant="outline-primary">{{trans("words.save")}}</b-button>
                        <b-button size="sm" @click="resetForm()" variant="outline-danger">مسح الحقول</b-button>
                    </b-form>

                </b-modal>

                <!-- Update Modal Component -->
                <b-modal id="modalUpdate" ref="modalUpdate" :label='trans("words.update")' hide-footer>

                    <b-form @submit="updateForm">
                        <b-form-group :label='trans("words.reception_home_owner_name")' label-for="home_owner">
                            <b-form-input id="home_owner"
                                          size="sm"
                                          type="text"
                                          v-model="form.home_owner"
                                          required
                            >
                            </b-form-input>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_persons_number")' label-for="persons_number">
                            <b-form-input id="persons_number"
                                          size="sm"
                                          type="number"
                                          v-model="form.persons_number"
                                          required
                            >
                            </b-form-input>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_persons_type")' label-for="persons_type">
                            <b-form-select id="persons_type"
                                           size="sm"
                                           :options="persons_type_option"
                                           required
                                           v-model="form.persons_type">
                            </b-form-select>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_address")' label-for="address">
                            <b-form-input id="address"
                                          size="sm"
                                          type="text"
                                          v-model="form.address"
                                          required
                            >
                            </b-form-input>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_phone")' label-for="phone">
                            <b-form-input id="phone"
                                          size="sm"
                                          type="text"
                                          v-model="form.phone"
                                          required
                            >
                            </b-form-input>
                        </b-form-group>



                        <b-form-group :label='trans("words.reception_state")' label-for="is_active">
                            <b-form-select id="is_active"
                                           size="sm"
                                           :options="is_active_option"
                                           required
                                           v-model="form.is_active">
                            </b-form-select>
                        </b-form-group>

                        <b-form-group :label='trans("words.reception_date")' label-for="date">
                            <b-form-input id="date"
                                          size="sm"
                                          type="date"
                                          v-model="form.date"
                                          required>
                            </b-form-input>
                        </b-form-group>
                        <b-form-group>
                            <b-button size="sm" @click="geolocate()" variant="outline-info">تحديد الموقع</b-button>
                        </b-form-group>
                        <b-form-group label='خط العرض' label-for="lat">
                            <b-form-input id="lat"
                                          size="sm"
                                          type="text"
                                          v-model="form.lat"
                                          readonly
                                          required >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group label='خط الطول' label-for="lng">
                            <b-form-input id="lng"
                                          size="sm"
                                          type="text"
                                          v-model="form.lng"
                                          readonly
                                          required>
                            </b-form-input>
                        </b-form-group>
                        <b-button size="sm" type="submit" variant="outline-primary">{{trans("words.save")}}</b-button>
                    </b-form>

                </b-modal>

                <b-modal ref="modelDelete"  hide-header hide-footer>
                    <p class="my-4">{{trans("words.are_you_sure")}}</p>
                    <b-button @click="destroy()" size="sm"  variant="outline-success">
                        {{trans("words.yes")}}
                    </b-button>
                    <b-button @click="$refs.modelDelete.hide()" size="sm" variant="outline-danger">
                        {{trans("words.cancel")}}
                    </b-button>
                </b-modal>

                <div v-for="(item,index) in list" v-bind:key="item.id" class="col-12 col-sm-6">
                    <div class="card shadow p-0 mb-5">

                        <div class="card-body">
                            <div class="card-header bg-white text-center">
                                <h6 class="card-title">
                                    <span>{{trans("words.reception_home_owner")}}</span>
                                    {{item.home_owner}}
                                </h6>
                            </div>
                            <div class="card-text">
                                <ul class="list-group list-group-flush p-0">
                                    <li class="list-group-item">
                                        <span>{{trans("words.reception_persons_number")}}</span>
                                        {{item.persons_number}}
                                    </li>
                                    <li class="list-group-item">
                                        <span>{{trans("words.reception_persons_type")}}</span>
                                        {{getType(item.persons_type)}}
                                    </li>
                                    <li class="list-group-item">  <span>{{trans("words.reception_address")}}</span>
                                        {{item.address}}
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer bg-white">
                                <b-btn @click="iniUpdate(index)"  size="sm" variant="outline-success"  v-b-modal.modalUpdate>{{trans("words.update")}}</b-btn>
                                <b-btn @click="iniDelete(item.id)"  size="sm" variant="outline-danger">{{trans("words.delete")}}</b-btn>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

             <div v-else class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{trans("words.reception_thanks")}}</h4>
                <p> {{trans("words.reception_thanks_details")}}</p>
                <hr>
                <a href="/register" class="mb-0">{{trans("words.sign_up")}}</a>
            </div>
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
                    alert("Not found");
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
                    lat:null,
                    lng:null,

                },
                persons_type_option: [
                    { text: this.trans("words.reception_select"), value: null },
                    { text: this.trans("words.reception_persons_type_men"), value: 1 },
                    { text: this.trans("words.reception_persons_type_women"), value: 2 },
                    { text: this.trans("words.reception_persons_type_family"), value: 3 },
                ],
                is_active_option: [
                    { text: this.trans("words.reception_select"), value: null },
                    { text: this.trans("words.reception_is_active_active"), value: 1 },
                    { text: this.trans("words.reception_is_active_inactive"), value: 0 },
                ],

            }
        },
        methods: {
            iniData(){
                axios.get('api/dashboard',{params:{user_id:this.form.user_id}})
                    .then(({data})=>{
                        this.list=data.data;

                    })
                    .catch((resp)=> {
                        alert("Not found");
                    });
            },
            getType(arg) {
                switch (arg) {
                    case 1:
                        return  this.trans("words.reception_persons_type_men");
                        break;
                    case 2:
                        return this.trans("words.reception_persons_type_women");
                        break;
                    case 3:
                        return this.trans("words.reception_persons_type_family");
                        break;
                }
            },
            saveForm (evt) {
                evt.preventDefault();
                this.$refs.modalAdd.hide();
                axios.post('api/reception',this.form)
                    .then(({data})=> {
                        console.log(data);
                        this.text=this.trans("words.reception_add_success");
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
                        this.text=this.trans("words.reception_update_success");
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
                        this.text=this.trans("words.reception_delete_success");
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
                this.form.lat = this.list[index].lat;
                this.form.lng = this.list[index].lat;
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
                this.form.lat = null;
                this.form.lng = null;
                this.show = false;
                this.$nextTick(() => { this.show = true });
            },
            snackBar (method) {
                let config = {
                    text: this.text,
                    button: 'اغلاق',

                };
                this.$snack[method](config)
            },
            geolocate() {
                navigator.geolocation.getCurrentPosition(position => {

                        this.form.lat=position.coords.latitude;
                        this.form.lng=position.coords.longitude;

                    }
                )}
        }
    }
</script>


