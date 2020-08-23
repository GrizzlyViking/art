<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Title</th>
                <th>Size</th>
                <th>Price</th>
                <th><button type="button" class="btn btn-outline-success">Create</button></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="work in art">
                <td class="align-middle">{{ work.id }}</td>
                <td class="align-middle">{{ work.title }}</td>
                <td class="align-middle">{{ work.meta.size }}</td>
                <td class="align-middle"> {{ work.price.amount }}</td>
                <td class="align-middle">
                    <button class="btn btn-outline-primary" @click="edit(work)">Edit</button>
                    <button class="btn btn-outline-danger" @click="delete_art(work)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "TableListComponent",
    props: ['art'],
    methods: {
        edit(artwork) {
            window.location.href = '/admin/art/' + artwork.id + '/edit'
        },
        delete_art(work) {
            axios.delete('/admin/art/' + work.id)
                .then(response => {
                    window.location.href = '/admin/art';
                }).catch(error => {
                console.log(error.response)
            });
        }
    }
}
</script>

<style scoped>

</style>
