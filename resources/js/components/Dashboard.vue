<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <datetime v-model="date"></datetime>
                <scheduler v-model="selected" />
            </div>
        </div>
    </div>
</template>

<script>
    import { page } from 'vue-analytics'

    export default {
        name: "Dashboard",
        data () {
            return {
                selected: {}
            }
        },

        methods: {
            track () {
                page('/')
            }
        }
    }
</script>

<style scoped>

</style>
