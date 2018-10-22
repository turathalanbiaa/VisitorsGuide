<template>
    <div>
            <nav class="navbar navbar-dark fixed-top bg-blue-gradient">
                <div class="container p-0">
                <a class="navbar-brand m-0 w-75 text-truncate text-white">
                    <span >{{trans("words.reception_title")}} </span>
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
                                    <h5 class="modal-title"> {{trans("words.reception_select_type")}}</h5>

                                </div>
                                <div class="modal-body">
                                    <div class="list-group">
                                        <a v-on:click="changeFilter(1)"
                                           class="list-group-item  list-group-item-action">
                                            <span>{{trans("words.reception_persons_type_men")}}</span>
                                        </a>
                                        <a v-on:click="changeFilter(2)"
                                           class="list-group-item  list-group-item-action">
                                            <span>{{trans("words.reception_persons_type_women")}}</span>
                                        </a>
                                        <a v-on:click="changeFilter(3)"
                                           class="list-group-item  list-group-item-action">
                                            <span>{{trans("words.reception_persons_type_family")}}</span>
                                        </a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" v-on:click="showModal = false">{{trans("words.cancel")}}</button>
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
                <div  v-for="item in list" v-bind:key="item.id" class="col-12 col-sm-6" v-if="item.is_active===1">
                    <div class="card shadow p-0 mb-5">
                        <div class="card-body">
                            <div class="card-header bg-white text-center">
                                <h6 class="card-title">
                                    <span> {{trans("words.reception_home_owner")}}</span>
                                    {{item.home_owner}}
                                </h6>
                            </div>
                            <div class="card-text">
                                <ul class="list-group list-group-flush p-0">
                                    <li class="list-group-item">
                                        <span> {{trans("words.reception_persons_number")}}</span>
                                        {{item.persons_number}}
                                       </li>
                                    <li class="list-group-item">
                                        <span> {{trans("words.reception_persons_type")}}</span>
                                        {{getType(item.persons_type)}}
                                        </li>
                                    <li class="list-group-item">
                                        <span> {{trans("words.reception_address")}}</span>
                                        {{item.address}}
                                        </li>
                                </ul>
                            </div>
                            <div class="card-footer bg-white text-center ">  <a class="card-link" :href="'tel:'+item.phone">{{trans("words.reception_call_home_owner")}}</a></div>

                        </div>
                    </div>
                </div>
                <infinite-loading ref="infiniteLoading" spinner="waveDots" v-on:distance="1"
                                  v-on:infinite="infiniteHandler" class="col-md-12">
                     <span slot="no-more">
                            {{trans("words.there_is_no_data")}}
                     </span>
                </infinite-loading>
            </div>
            <div class="col-md-12">
                <router-link :to="{name:'reception-dashboard'}" class="float bg-blue-gradient">
                    <i class="fa fa-cog my-float"></i>
                </router-link>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        data() {
            return {
                search: null,
                type: null,
                list: [],
                page: 1,
                showModal: false,
            };
        },
        mounted() {
            console.log('mounted');
        },
        watch: {
            search() {
                this.page = 1;
                this.type = null;
                this.list = [];
                this.reloading();
            }
        },

        methods: {
            infiniteHandler($state) {
                axios.get('api/reception', {params: {type: this.type, search: this.search, page: this.page,}})
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
            changeFilter(arg) {
                this.page = 1;
                this.list = [];
                this.type = arg;
                this.reloading();
                this.showModal = false;
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
