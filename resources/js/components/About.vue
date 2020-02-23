<template>
    <div>
        <!-- page title -->
        <section class="page-title-alt bg-primary position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-white font-tertiary">About Me</h1>
                    </div>
                </div>
            </div>
            <!-- background shapes -->
            <img src="images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
            <img src="images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
            <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
            <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
            <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
            <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6">
        </section>
        <!-- /page title -->

        <!-- about -->
        <section class="section pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>My name is Joseph Otieno. I am a Software Engineer. I design and develop systems that
                            are simple, highly scalable and run in the cloud</p>
                        <p>I am a self-starter( started from the bottom now am here), insatiable learner, obsessive
                            builder and well-mannered.</p>

                    </div>
                    <div class="col-md-4 text-center drag-lg-top">
                        <div class="shadow-down mb-4">
                            <img src="images/about/author.jpg" alt="author"
                                 class="img-fluid w-100 rounded-lg border-thick border-white">
                        </div>
                        <img src="images/about/signature.png" alt="signature" class="img-fluid">
                        <h4>Joseph Otieno</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about -->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
