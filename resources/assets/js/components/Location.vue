<template>
    <div>
    <nav class="navbar fixed-top navbar-dark bg-vg-dark">
        <div class="container p-0">
            <a class="navbar-brand m-0 w-75 text-truncate text-white">
                <span >الموقع على الخارطة</span>
            </a>
            <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">
                <router-link to="/" class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2">
                    <i class="fa fa-arrow-left text-white align-middle" style="width: 14px;"></i>
                </router-link>
            </div>
        </div>
    </nav>
    <div class="container pt-2">
        <div class="row">
            <div class="col-md-12">
    <gmap-map
            style="height: 800px;"
            :center="center"
            :zoom="15"

    >
        <gmap-marker :key="index" v-for="(marker,index) in markers"
                     :position="marker.position">
        </gmap-marker>
    </gmap-map>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                center: {
                    lat: 32.00385350,
                    lng: 44.33084790
                },
                markers: []
            };
        },
        mounted() {
            if(this.$route.params.lat!=null||this.$route.params.lng!=null){
                const marker={
                    lat:parseFloat(this.$route.params.lat),
                    lng:parseFloat(this.$route.params.lng),
                }
                this.center=marker;
                this.markers.push({position:marker})
            }
        },
    };
</script>

<style scoped>
</style>