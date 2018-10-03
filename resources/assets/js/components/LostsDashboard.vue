<template>
    <div>

        <nav class="navbar navbar-dark fixed-top bg-teal-gradient">
            <div class="container p-0">
                <a class="navbar-brand m-0 w-75 text-truncate text-white">
                    <span>{{trans("words.lost_index_page")}}</span>
                </a>
                <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">
                    <a href="/" class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2">
                        <i class="fa fa-home text-white align-middle"></i>
                    </a>
                </div>
            </div>
        </nav>

        <div class="container pt-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">{{trans("words.find_center_thanks")}}</h4>
                        <p>{{trans("words.find_center_info")}}</p>
                        <hr>
                        <a href="/road-guide" class="mb-0">{{trans("words.find_center_link")}}</a>
                    </div>
                </div>
            </div>
            </div>
        <div class="col-md-12">
            <router-link to="/" class="float bg-teal-gradient"><i class="fa fa-arrow-right my-float"></i></router-link>
        </div>
        </div>
</template>

<script>
    export default {

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