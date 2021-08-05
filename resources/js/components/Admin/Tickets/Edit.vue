<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Category</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="update">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" v-model="ticket.name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" v-model="ticket.email">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" v-model="ticket.title">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Content</label>
                                    <input type="text" class="form-control" v-model="ticket.content">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"update-ticket",
    data(){
        return {
            ticket:{
                name:"",
                email:"",
                title:"",
                content:"",
                _method:"patch"
            }
        }
    },
    mounted(){
        this.showTicket()
    },
    methods:{
        async showTicket(){
            await axios.get(`/ticket/${this.$route.params.id}`).then(response=>{
                const { name, email, title, content } = response.data
                this.ticket.name = name
                this.ticket.email = email
                this.ticket.title = title
                this.ticket.content = content
            }).catch(error=>{
                console.log(error)
            })
        },
        async update(){
            await axios.post(`/ticket/${this.$route.params.id}`,this.ticket).then(response=>{
                this.$router.push({name:"ticketList"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>