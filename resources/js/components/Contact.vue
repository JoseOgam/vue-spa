<template>
    <div>
        <!-- page title -->
        <section class="page-title bg-primary position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-white font-tertiary">Contacts</h1>
                    </div>
                </div>
            </div>
            <!-- background shapes -->
            <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
            <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
            <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
            <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
            <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
            <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
            <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
        </section>
        <!-- /page title -->

        <!-- contact -->
        <section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="section-title">Contact Info</h2>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <div class="bg-white rounded text-center p-5 shadow-down">
                            <h4 class="mb-80">Contact Form</h4>
                            <form @submit.prevent="sendMessage" class="row">

                                <div class="col-md-6">
                                    <has-error :form="form" field="email"></has-error>
                                    <input v-model="form.name" type="text" name="name" placeholder="Full Name"
                                           class="form-control px-0 mb-4"
                                           :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="name"></has-error>
                                </div>

                                <div class="col-md-6">
                                    <input v-model="form.email" type="email" name="email" placeholder="Email Address"
                                           class="form-control px-0 mb-4"
                                           :class="{ 'is-invalid': form.errors.has('email') }">
                                    <has-error :form="form" field="email"></has-error>
                                </div>

                                <div class="col-12">
                                <textarea v-model="form.message" type="text" name="message"
                                          class="form-control px-0 mb-4"
                                          :class="{ 'is-invalid': form.errors.has('message') }"
                                          placeholder="Type Message Here" style="resize: none">
                                       <has-error :form="form" field="message"></has-error>
                                </textarea>
                                </div>

                                <div class="col-lg-6 col-10 mx-auto">
                                    <button type="submit" class="btn btn-primary w-100">send</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /contact -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                // Create a new form instance
                form: new Form({
                    name: '',
                    email: '',
                    message: ''
                })
            }
        },
        methods: {
            sendMessage() {
                this.$Progress.start();
                this.form.post('api/contact')
                    .then(() => {
                        //sweetalert2 toast
                        Toast.fire({
                            icon: 'success',
                            title: 'Thanks for contacting me'
                        });
                        this.form.reset();

                        this.$Progress.finish();

                    })
                    .catch(() => {

                    })

            }

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
