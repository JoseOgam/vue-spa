<template>
    <div>
        <!-- page title -->
        <section class="page-title bg-primary position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-white font-tertiary">Portfolio</h1>
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

        <!-- portfolio -->
        <section class="section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
                            <h3 class="section-title">Sample Of My Work..</h3>
                        </div>
                    </div>
                </div>
                <div class="row shuffle-wrapper">
                    <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                        <div class="position-relative rounded hover-wrapper">
                            <img src="images/portfolio/item-8.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                            <div class="hover-overlay">
                                <div class="hover-content">
                                    <a class="btn btn-light btn-sm" href="project-single.html">view project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
                        <div class="position-relative rounded hover-wrapper">
                            <img src="images/portfolio/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                            <div class="hover-overlay">
                                <div class="hover-content">
                                    <a class="btn btn-light btn-sm" href="project-single.html">view project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
                        <div class="position-relative rounded hover-wrapper">
                            <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                            <div class="hover-overlay">
                                <div class="hover-content">
                                    <a class="btn btn-light btn-sm" href="project-single.html">view project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /portfolio -->

        <!-- clients -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="section-title">Tools That I Use!!!</h3>
                    </div>
                </div>
                <div class="container">
                    <div class="col-12">
                        <div class="client-logo-slider d-flex align-items-center">
                            <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
                                                                                       src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /clients -->
    </div>
</template>

<script>

    export default {
        name: "Portfolio"
    }
</script>

<style scoped>

</style>
