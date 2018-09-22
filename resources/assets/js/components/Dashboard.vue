<template>
    <div>
            <nav class="navbar navbar-dark fixed-top bg-blue-gradient">
                <div class="container p-0">
                <a class="navbar-brand m-0 w-75 text-truncate text-white">
                    <span > دليل استضافة الزائرين</span>
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
        <div class="container pt-2">
            <router-link to="/" class="float bg-blue-gradient"><i class="fa fa-arrow-right my-float"></i></router-link>
        </div>
    </div>


</template>

<script>
    export default {
        mounted() {
            console.log('mounted');
        },

    };
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
