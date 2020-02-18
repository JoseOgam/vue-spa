<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users Table</h3>
                        <div class="card-tools">
                            <button class="btn btn-success">add New <i
                                class="fas fa-user-plus"></i></button>
                        </div>
                    </div>
                    <div class=" card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Date Registered</th>
                                <th>Modify</th>
                            </tr>
                            <tr v-for="user in users" :key="user.id">
                                <td>{{user.id}}</td>
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                <td>Admin</td>
                                <td>5/02/2020</td>
                                <td>
                                    <a href="#">
                                        <i class="fas fa-edit blue"></i>
                                    </a>/
                                    <a href="#">
                                        <i class="fas fa-trash red"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Users",
        data(){
            return{
                users: {},
                form: new Form({
                    id:'',
                    name: '',
                    email: '',
                    bio: '',
                    type: '',
                    password: '',
                    photo: ''
                })
            }
        },
        methods: {
          loadUsers(){
              axios.get("api/users").then(({data}) =>([this.users = data.data]));
          }
        },
        created() {
            this.loadUsers();
        }
    }
</script>

<style scoped>

</style>
