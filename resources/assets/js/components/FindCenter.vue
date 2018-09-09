<template>
   <div>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-dark fixed-top bg-teal-gradient">
            <a class="navbar-brand m-0 w-75 text-truncate text-white">
                <span>دليل التائهين والمفقودات</span>
            </a>
            <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">
                <a href="/" class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2">
                    <i class="fa fa-home text-white align-middle"></i>
                </a>
            </div>
        </nav>
    </div>
    <div class="container pt-2">
        <div class="row">
            <div class="col">
                <router-link to="/" class="float"><i class="fa fa-arrow-right my-float"></i></router-link>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">شكراً ايها الزائر الكريم لامانتك</h4>
                    <p>يرجي التوجه الى اقرب مركز لارشاد التائهين لتسليم الغرض وسوف يتكفل المركز بأتخاذ الاجراء اللازم.</p>
                    <hr>
                    <a href="/road-guide" class="mb-0">للعثور على اقرب مركز اضغط هنا..واختر من القائمه المنسدله مراكز ارشاد التائهين.</a>
                </div>
            </div>
        </div>
    </div>
   </div>
</template>

<script>
    export default {
        name: "FindCenter"
    }
</script>

<style scoped>
    .float {
        position: fixed;
        width: 50px;
        height: 50px;
        bottom: 50px;
        background-color: #0C9;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
    }

    .my-float {
        margin-top: 19px;
    }
</style>