<template>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username">Joseph Otieno</h3>
                        <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" :src="getProfilePhoto()" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                                    data-toggle="tab">Activity</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane" id="activity">

                                <h1>Display User's Activity</h1>
                            </div>
                            <!-- /.tab-pane -->

                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" v-model="form.name" class="form-control" id="inputName"
                                                   placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" v-model="form.email" class="form-control" id="inputEmail"
                                                   placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputExperience"
                                               class="col-sm-2 col-form-label">Experience</label>
                                        <div class="col-sm-10">
                                                <textarea class="form-control" v-model="form.bio" id="inputExperience"
                                                          placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Profile Photo</label>
                                        <div class="col-sm-10">
                                            <input type="file" @change="updateProfile" name="photo"
                                                   class="form-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Passport</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills"
                                                   placeholder="Passport">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button @click.prevent="updateInfo" type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Profile",

        data() {
            return {
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

            getProfilePhoto() {

                let photo = (this.form.photo.length > 100) ? this.form.photo : "img/profile/" + this.form.photo ;

                return photo;

            },
            updateInfo() {
                this.$Progress.start();
                this.form.put('api/profile')
                    .then(() => {
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    });
            },
            updateProfile(e) {
                let file = e.target.files[0];
                //console.log(file);
                let reader = new FileReader();
                reader.onloadend = (file) => {
                    //console.log('RESULT', reader.result)
                    this.form.photo = reader.result;
                };
                reader.readAsDataURL(file);

            }
        },
        created() {
            axios.get('api/profile').then(({data}) => (this.form.fill(data)));
        }
    }
</script>

<style scoped>

</style>
