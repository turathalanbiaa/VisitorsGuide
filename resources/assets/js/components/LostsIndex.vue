<template>
    <div>
            <nav class="navbar navbar-dark fixed-top bg-teal-gradient">
                <div class="container p-0">
                <a class="navbar-brand m-0 w-75 text-truncate text-white">
                    <span>{{trans("words.lost_index_page")}}  </span>
                </a>
                <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">
                    <a v-on:click="showModal = true" class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2">
                        <i class="fa fa-bars text-white align-middle" style="width: 14px;"></i>
                    </a>
                    <a href="/" class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2">
                        <i class="fa fa-home text-white align-middle"></i>
                    </a>
                </div>
                </div>
            </nav>
        <div v-if="showModal">
            <transition name="modal">
                <div class="modal-mask">
                    <div class="modal-wrapper">

                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{trans("words.lost_index_select_category")}}</h5>

                                </div>
                                <div class="modal-body">
                                    <div class="list-group">
                                        <a v-on:click="changeFilter(1)"
                                           class="list-group-item  list-group-item-action">
                                            <span>{{trans("words.lost_index_persons")}}</span>
                                        </a>
                                        <a v-on:click="changeFilter(2)"
                                           class="list-group-item  list-group-item-action">
                                            <span>{{trans("words.lost_index_money")}}</span>
                                        </a>
                                        <a v-on:click="changeFilter(3)"
                                           class="list-group-item  list-group-item-action">
                                            <span>{{trans("words.lost_index_gold")}}</span>
                                        </a>
                                        <a v-on:click="changeFilter(4)"
                                           class="list-group-item  list-group-item-action">
                                            <span>{{trans("words.lost_index_bags")}}</span>
                                        </a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" v-on:click="showModal = false">{{trans("words.lost_index_cancel")}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </transition>
        </div>

        <div class="container pt-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group aa-input-container">
                        <input v-model.lazy="search" class="form-control form-control-lg" type="text"
                               autocomplete="off">
                        <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                            <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z"/>
                        </svg>
                    </div>
                </div>
                <div v-for="item in list" v-bind:key="item.id" class="col-12 col-sm-6">
                    <div class="card shadow mb-5">
                        <img width="400"
                             :src="item.file_name ? imgPreUrl + item.file_name : imgPreUrl + 'empty-photo.jpg'"
                             height="350" class="card-img-top fill"
                             alt="Card image cap"/>
                        <div class="card-body">
                            <div class="card-text">
                                <ul class="list-group list-group-flush p-0">
                                    <li class="list-group-item">
                                        <span>الصنف: </span>
                                        {{getCategory(item.category)}}
                                    </li>
                                    <li class="list-group-item">
                                        <span>{{trans("words.lost_index_description")}} </span>
                                        {{item.description}}
                                    </li>
                                    <li class="list-group-item">
                                        <span>{{trans("words.lost_index_date")}} </span>
                                        {{item.datetime | moment("DD-MM-YYYY h:mm a")}}
                                    </li>
                                    <li class="list-group-item">
                                        <span>{{trans("words.lost_index_place")}} </span>
                                        {{item.center.name}}
                                    </li>
                                    <li class="list-group-item">
                                        <span>{{trans("words.lost_index_t_number")}} </span>
                                        {{item.center.t_number}}
                                    </li>
                                    <li class="list-group-item">
                                        <span>{{trans("words.lost_index_phone")}} </span>
                                        {{item.center.phone}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <infinite-loading ref="infiniteLoading" spinner="waveDots" v-on:distance="1"
                                  v-on:infinite="infiniteHandler" class="col-md-12">
                     <span slot="no-more">
                             لايوجد بيانات ...
                     </span>
                </infinite-loading>

                <div class="col-md-12">
                    <router-link :to="{name:'losts-dashboard'}" class="float bg-teal-gradient">
                        <i class="fa fa-bullhorn my-float"></i>
                    </router-link>
                </div>
            </div>

        </div>
    </div>


</template>

<script>
    export default {
        data() {
            return {
                search: null,
                category: null,
                list: [],
                page: 1,
                imgPreUrl: 'storage/img/lost/',
                showModal: false,
            };
        },
        mounted() {
            console.log('mounted');
        },
        watch: {
            search() {
                this.page = 1;
                this.category = null;
                this.list = [];
                this.reloading();
            }
        },

        methods: {
            infiniteHandler($state) {
                axios.get('api/lost', {params: {category: this.category, search: this.search, page: this.page,}})
                    .then(({data}) => {
                        this.list = this.list.concat(data.data);
                        $state.loaded();
                        if (this.page === data.meta.last_page) {
                            $state.complete();
                        }
                        this.page = this.page + 1;
                    })
                    .catch(error => {
                    });
            },
            changeFilter(arg) {
                this.page = 1;
                this.list = [];
                this.category = arg;
                this.reloading();
                this.showModal = false;
            },
            getCategory(arg) {
                switch (arg) {
                    case 1:
                        return "أشخاص";
                        break;
                    case 2:
                        return "مبلغ من المال";
                        break;
                    case 3:
                        return "قطعه ذهبيه";
                        break;
                    case 4:
                        return "حقائب";
                        break;
                }
            },
            reloading() {
                this.$nextTick(() => {
                    this.$refs.infiniteLoading.$emit('$InfiniteLoading:reset');
                });
            },
        }
    };
</script>

<style scoped>
    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .3s ease;
    }

    .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
    }

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
