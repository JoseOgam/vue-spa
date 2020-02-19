<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Portfolio Table</h3>
                    <div class="card-tools">
                        <button class="btn btn-success" @click="launchModal">add New <i
                            class="nav-icon fas fa-briefcase white"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>P.Title</th>
                            <th>P.Image</th>
                            <th>P.Url</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="work in works" :key="work.id">
                            <td>{{work.id}}</td>
                            <td>{{work.title}}</td>
                            <td>{{work.image}}</td>
                            <td>{{work.url}}</td>
                            <td>
                                <a href="#">
                                    <i class="fas fa-edit blue"></i>
                                </a>/
                                <a href="#" @click="deleteWork(work.id)">
                                    <i class="fas fa-trash red"></i>
                                </a>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Modal -->
            <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form @submit.prevent="postWork">
                                <div class="form-group">
                                    <input v-model="form.title" type="text" name="title"
                                           placeholder="Project Title"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                                    <has-error :form="form" field="title"></has-error>
                                </div>
                                <div class="form-group">

                                    <input type="text" v-model="form.image" name="image"
                                           placeholder="Image"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('image') }">
                                    <has-error :form="form" field="image"></has-error>
                                </div>
                                <div class="form-group">
                                    <input v-model="form.url" type="text" name="url"
                                           placeholder="Project Url"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('url') }">
                                    <has-error :form="form" field="url"></has-error>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Work",

        data() {
            return {
                works: {},
                form: new Form({
                    title: '',
                    image: '',
                    url: '',
                })

            }
        },
        methods: {

            launchModal() {
                $('#postModal').modal('show');
            },

            postWork() {
                this.form.post('api/work')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        this.form.reset();
                        $('#postModal').modal('hide');
                    })
                    .catch(() => {

                    });

            },
            deleteWork(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    //sending delete request to the server
                    if (result.value) {
                        this.form.delete('api/work/' + id).then(() => {

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
            loadWorks() {
                axios.get("api/work").then(({data}) => (this.works = data.data));
            }
        },

        created() {
            this.loadWorks();
            Fire.$on('AfterCreate', () => {
                this.loadWorks();
            });
            // setInterval(() => this.loadWorks(), 1000);

        }
    }
</script>

<style scoped>

</style>
