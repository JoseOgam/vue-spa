<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard Component</div>

                    <div class="card-body">
                        I'm a Dashboard component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { page } from 'vue-analytics'

    export default {
        name: "Dashboard",

        methods: {
            track () {
                page('/')
            }
        }
    }
</script>

<style scoped>

</style>
