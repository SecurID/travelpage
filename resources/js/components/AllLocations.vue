<template>
    <div>
        <h2 class="text-center">Location List</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="location in locations" :key="location.id">
                <td>{{ location.id }}</td>
                <td>{{ location.name }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: location.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteProduct(location.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            locations: []
        }
    },
    created() {
        this.axios
            .get('https://travelpage.lndo.site/locations/')
            .then(response => {
                this.locations = response.data;
            });
    },
    methods: {
        deleteProduct(id) {
            this.axios
                .delete(`https://travelpage.lndo.site/locations/${id}`)
                .then(response => {
                    let i = this.locations.map(data => data.id).indexOf(id);
                    this.locations.splice(i, 1)
                });
        }
    }
}
</script>
