<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tickets</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Namme</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody v-if="tickets.length > 0">
                                <tr v-for="(ticket,key) in tickets" :key="key">
                                    <td>{{ ticket.id }}</td>
                                    <td>{{ ticket.name }}</td>
                                    <td>{{ ticket.email }}</td>
                                    <td>{{ ticket.title }}</td>
                                    <td>{{ ticket.content }}</td>
                                    <td>
                                        <router-link :to='{name:"ticketEdit",params:{id:ticket.id}}' class="btn btn-success">Edit</router-link>
                                        <button type="button" @click="deleteTicket(ticket.id)" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody v-else>
                                <tr>
                                    <td colspan="4" align="center">No Tickets Found.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"tickets",
    data(){
        return {
            tickets:[]
        }
    },
    mounted(){
        this.getTickets()
    },
    methods:{
        async getTickets(){
            await axios.get('/ticket').then(response=>{
                this.tickets = response.data
            }).catch(error=>{
                console.log(error)
                this.tickets = []
            })
        },
        deleteTicket(id){
            if(confirm("Are you sure to delete this ticket ?")){
                axios.delete(`/ticket/${id}`).then(response=>{
                    this.getTickets()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>