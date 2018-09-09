<template>

        <div class="container-fluid p-0">
        <div class="row">
                <div class="col-12">
                        <router-link to="/">Go back</router-link>
                        <div class="jumbotron bg-white text-center shadow mb-3">
                                <h4 class="mb-4">f</h4>
                                <p>f</p>
                                <hr class="my-4">

                                <div class="form-inline">
                                        <div class="form-group col-12 col-sm-12 mb-sm-3 mb-3 d-none" id="form-error-message">
                                                <div class="alert w-100 m-0 alert-danger" role="alert">
                                                        <ul class="p-0 m-0" style="list-style: none;">
                                                                <li id="empty">a</li>
                                                                <li id="unacceptable">a</li>
                                                        </ul>
                                                </div>
                                        </div>

                                        <div class="form-group col-12 col-sm-6 mb-sm-3 mb-3">
                                                <input type="number" class="form-control w-100" id="source" >
                                        </div>

                                        <div class="form-group col-12 col-sm-6 mb-sm-3 mb-3">
                                                <input type="number" class="form-control w-100" id="destination">
                                        </div>

                                        <div class="form-group col-12 col-sm-12 mb-sm-0 mb-0 justify-content-center text-center">
                                                <button class="btn btn-info" data-action="calculate-distance">
                                                        g
                                                </button>
                                        </div>
                                </div>

                                <div class="card mt-4 d-none" id="calculate-distance-result">
                                        <ul class="list-group pr-0">
                                                <li class="list-group-item">
                                                        <span>d</span>
                                                        <span> : </span>
                                                        <span class="data-estimated-distance"></span>
                                                </li>
                                                <li class="list-group-item">
                                                        <span>gg</span>
                                                        <span> : </span>
                                                        <span class="data-estimated-time"></span>
                                                </li>
                                                <li class="list-group-item">
                                                        <span>a</span>
                                                        <span> : </span>
                                                        <span class="data-number-of-column"></span>
                                                <li class="list-group-item">
                                                        <span>b</span>
                                                        <span> : </span>
                                                        <span class="data-direction"></span>
                                                </li>
                                                <li class="list-group-item">
                                                        <span>c</span>
                                                        <span> : </span>
                                                        <span id="list-public-points"></span>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
</div>

</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
