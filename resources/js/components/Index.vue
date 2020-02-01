<template>
    <div>
        <!-- hero area -->
        <section class="hero-area bg-primary" id="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-white font-tertiary">Hi! I’m  Joseph, <br>Software Developer</h1>
                    </div>
                </div>
            </div>
            <div class="layer-bg w-100">
                <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
            </div>
            <div class="layer" id="l2">
                <img src="images/illustrations/dots-cyan.png" alt="bg-shape">
            </div>
            <div class="layer" id="l3">
                <img src="images/illustrations/leaf-orange.png" alt="bg-shape">
            </div>
            <div class="layer" id="l4">
                <img src="images/illustrations/dots-orange.png" alt="bg-shape">
            </div>
            <div class="layer" id="l5">
                <img src="images/illustrations/leaf-yellow.png" alt="bg-shape">
            </div>
            <div class="layer" id="l6">
                <img src="images/illustrations/leaf-cyan.png" alt="bg-shape">
            </div>
            <div class="layer" id="l7">
                <img src="images/illustrations/dots-group-orange.png" alt="bg-shape">
            </div>
            <div class="layer" id="l8">
                <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape">
            </div>
            <div class="layer" id="l9">
                <img src="images/illustrations/leaf-cyan-2.png" alt="bg-shape">
            </div>
            <!-- social icon -->
            <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
                <li class="mb-3"><a class="text-white" href="#"><i class="ti-facebook"></i></a></li>
                <li class="mb-3"><a class="text-white" href="#"><i class="ti-instagram"></i></a></li>
                <li class="mb-3"><a class="text-white" href="#"><i class="ti-dribbble"></i></a></li>
                <li class="mb-3"><a class="text-white" href="#"><i class="ti-twitter"></i></a></li>
            </ul>
            <!-- /social icon -->
        </section>
        <!-- /hero area -->

        <!-- services -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="section-title">What I Do...</h2>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card hover-shadow shadow">
                            <div class="card-body text-center px-4 py-5">
                                <i class="ti-palette icon mb-5 d-inline-block"></i>
                                <h4 class="mb-4">UI Design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card active-bg-primary hover-shadow shadow">
                            <div class="card-body text-center px-4 py-5">
                                <i class="ti-vector icon mb-5 d-inline-block"></i>
                                <h4 class="mb-4">Web Development</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card hover-shadow shadow">
                            <div class="card-body text-center px-4 py-5">
                                <i class="ti-panel icon mb-5 d-inline-block"></i>
                                <h4 class="mb-4">Web Design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /services -->

    </div>

</template>

<script>
    export default {
        mounted() {
            +
                console.log('Component mounted.')
        }
    }
</script>
