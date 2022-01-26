<template>
    <div>
        <h3 class="text-center">Create location</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addLocation">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="location.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="location.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
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
    methods: {
        addLocation() {
            this.axios
                .post('https://travelpage.lndo.site/locations', this.location)
                .then(response => (
                    this.$router.push({ name: 'home' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}
</script>
