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
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="tag tag-success">Approved</span></td>
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

                                        <input  type="text"  v-model="form.image" name="image"
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
            }
        },

        created() {
            this.postWork();
        }
    }
</script>

<style scoped>

</style>
