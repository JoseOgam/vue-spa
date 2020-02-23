<template>
    <div>
        <!-- hero area -->
        <section class="hero-area bg-primary" id="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-white font-tertiary">Hi! I’m Joseph, <br>Software Developer</h1>
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
                <li class="mb-3"><a href="https://www.instagram.com/joseogam/"><img class="img-circle elevation-2"
                                                                                    src="images/devs/instagram.png"
                                                                                    style="height: 30px; width: 30px"></a>
                </li>
                <li class="mb-3"><a href="https://www.facebook.com/joseph.otieno.963434"><img
                    class="img-circle elevation-2"
                    src="images/devs/facebook.png" style="height: 30px; width: 30px"></a>
                </li>
                <li class="mb-3"><a href="https://twitter.com/joseogam"><img class="img-circle elevation-2"
                                                                             src="images/devs/twitter.png"
                                                                             style="height: 30px; width: 30px"></a>
                </li>
                <li class="mb-3"><a href="https://www.linkedin.com/in/joseph-otieno-73a99b168/"><img
                    class="img-circle elevation-2"
                    src="images/devs/linkedIn.png" style="height: 30px; width: 30px"></a>
                </li>
                <li class="mb-3"><a href="https://github.com/JoseOgam"><img class="img-circle elevation-2"
                                                                            src="images/devs/git.jpg"
                                                                            style="height: 30px; width: 30px"></a>
                </li>

            </ul>
            <!-- /social icon -->
        </section>
        <!-- /hero area -->

        <!-- services -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="section-title">My Interests...</h2>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card hover-shadow shadow">
                            <div class="card-body text-center px-4 py-5">
                                <img class="img-circle elevation-2"
                                     src="images/devs/ui.png" style="height: 70px; width: 70px">
                                <h4 class="mb-4">UI / UX DESIGN</h4>
                                <p>Applications are developed for people to use. That's why I take a user-centered
                                    approach to
                                    design and develop.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card active-bg-primary hover-shadow shadow">
                            <div class="card-body text-center px-4 py-5">

                                <img class="img-circle elevation-2"
                                     src="images/devs/dev.jpg" style="height: 70px; width: 70px">
                                <h4 class="mb-4">DEVELOPMENT</h4>
                                <p>Software needs to be robust, dependable, extensible and easy to maintain. My
                                    principle
                                    is that of test-driven development.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card hover-shadow shadow">
                            <div class="card-body text-center px-4 py-5">
                                <img class="img-circle elevation-2"
                                     src="images/devs/arc.png" style="height: 70px; width: 70px">
                                <h4 class="mb-4">SOFTWARE ARCHITECTURE</h4>
                                <p>I love softwares that are simple, reliable, fun and elegant. In other words softwares
                                    with good Architecture</p>
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
