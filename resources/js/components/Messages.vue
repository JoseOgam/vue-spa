<template>
    <div class="container-fluid">
        <div class="row" v-if="$gate.isAdminOrAuthor()">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Messages</div>

                    <div class="card-body table-responsive pt-0">
                        <table class="table table-hover">
                            <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Messages</th>
                            </thead>
                            <tbody>

                            <tr v-for="contact in contact.data" :key="contact.id">
                                <td>{{contact.id}}</td>
                                <td>{{contact.name}}</td>
                                <td>{{contact.email}}</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm"
                                            @click="launchModal(contact.id)">
                                        View Message
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="!$gate.isAdminOrAuthor()">
            <not-found></not-found>
        </div>
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="align-content-sm-center">{{this.actualContact.message}}</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <a :href="'mailto:' + actualContact.email" target="_top">
                            <button type="button" class="btn btn-primary">Reply</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Messages",
        data() {

            return {
                contact: {},
                actualContact: '',
            }
        },
        methods: {
            launchModal(contactId) {
                axios.get('api/messages/' + contactId).then(({data}) => ([this.actualContact = data]));
                $('#messageModal').modal('show');
            },
            loadContact() {
                if (this.$gate.isAdminOrAuthor()) {
                    axios.get("api/messages").then(({data}) => (this.contact = data));
                }
            },
        },
        created() {
            this.loadContact();
        }

    }
</script>

<style scoped>

</style>
