<template>
    <div>
        <h3 class="text-center">Edit location</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateLocation">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="location.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="location.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            location: {}
        }
    },
    created() {
        this.axios
            .get(`https://travelpage.lndo.site/locations/${this.$route.params.id}`)
            .then((res) => {
                this.location = res.data;
            });
    },
    methods: {
        updateLocation() {
            this.axios
                .patch(`https://travelpage.lndo.site/locations/${this.$route.params.id}`, this.location)
                .then((res) => {
                    this.$router.push({ name: 'home' });
                });
        }
    }
}
</script>
