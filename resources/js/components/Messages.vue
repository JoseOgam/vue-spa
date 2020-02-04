<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
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

                            <tr  v-for="contact in contact.data" :key="contact.id">
                                <td>{{contact.id}}</td>
                                <td>{{contact.name}}</td>
                                <td>{{contact.email}}</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm"  @click="launchModal">
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
                        <h4 class="align-content-sm-center">{{this.actualcontact.message}}</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <a  target="_top">
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
        data () {

            return{
                contact: {},
                actualcontact:'',
            }
        },
        methods: {
            launchModal(contactId) {
                axios.get('api/contact/' + contactId).then(({data}) => ([this.actualcontact = data]));
                $('#messageModal').modal('show');
            },
            loadContact(){
                axios.get("api/contact").then(({data}) => (this.contact = data));
            },
        },
        created() {
            this.loadContact();
        }

    }
</script>

<style scoped>

</style>
