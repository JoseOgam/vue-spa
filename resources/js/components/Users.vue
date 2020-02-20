<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users Table</h3>
                        <div class="card-tools">
                            <button @click="addModal" class="btn btn-success">add New <i
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
                                <td>{{user.type}}</td>
                                <td>{{user.created_at}}</td>
                                <td>
                                    <a href="#" @click="updateModal(user)">
                                        <i class="fas fa-edit blue"></i>
                                    </a>/
                                    <a href="#" @click="deleteUser(user.id)">
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
        <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 v-show="!editmode" class="modal-title" id="exampleModalLabel">Add New User</h5>
                        <h5 v-show="editmode" class="modal-title" id="">Update User's Info!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent=" editmode? updateUser() : createUser()">
                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name"
                                       placeholder="Name"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.email" type="text" name="email"
                                       placeholder="Email"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.bio" type="text" name="bio"
                                       placeholder="short bio for user (optional)"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }">
                                <has-error :form="form" field="bio"></has-error>
                            </div>
                            <div class="form-group">
                                <select name="type" v-model="form.type" id="type" class="form-control"
                                        :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option value="">Select User Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">Standard User</option>
                                    <option value="author">Author</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.password" type="password" name="password" id="password"
                                       placeholder="password"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                <has-error :form="form" field="password"></has-error>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
                                <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Users",
        data() {

            return {

                editmode: false,
                users: {},
                form: new Form({
                    id: '',
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
            //update user function
            updateUser() {
                //console.log('editing data');
                this.$Progress.start();
                this.form.put('api/users/' + this.form.id)
                    .then(() => {
                        //success
                        $('#addNew').modal('hide');
                        Fire.$emit('AfterCreate');
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    });
            },
             //launch addNew modal
            addModal() {
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },

            //launch update user modal
            updateModal(users) {
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(users);
            },
            //delete user function
            deleteUser(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    //send request to the server
                    if (result.value) {
                        this.form.delete('api/users/' + id).then(() => {

                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                            Fire.$emit('AfterCreate');

                        }).catch(() => {
                            swal("Failed", "There was something wrong", "warning");
                        });
                    }
                })
            },
            launchModal() {
                $('#addNew').modal('show');
            },

            //create user function
            createUser() {
                this.form.post('api/users')
                    .then(() => {
                        $('#addNew').modal('hide');
                        Fire.$emit('AfterCreate');
                        this.form.reset();
                    })
                    .catch(() => {
                        swal("Failed", "There was something wrong", "warning");
                    })

            },

            //laod user function
            loadUsers() {
                axios.get("api/users").then(({data}) => ([this.users = data.data]));
            }
        },

        created() {
            this.loadUsers();
            Fire.$on('AfterCreate', () => {
                this.loadUsers();
            });
        }
    }
</script>

<style scoped>

</style>
