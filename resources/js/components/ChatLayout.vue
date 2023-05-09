<script>
import ChatItem from './ChatItem.vue'
export default {
    components: {
        ChatItem
    },
    data() {
        return {
            message: '',
            list_messages: []
        }
    },
    created() {
    this.loadMessage()
    Echo.channel('laravel_database_chatroom')
        .listen('MessagePosted', (data) => {
            let message = data.message
            message.user = data.user
            this.list_messages.push(message)
        })
    },

    methods: {
        async loadMessage() {
            try {
                const response = await axios.get('/messages')
                this.list_messages = response.data
            } catch (error) {
                console.log(error)
            }
        },
        async sendMessage() {
            try {
                const response = await axios.post('/messages', {
                    message: this.message
                })
                this.list_messages.push(response.data.message)
                this.message = ''
            } catch (error) {
                console.log(error)
            }
        }
    }
} 
</script>


<template>
    <div class="message-box">
        <div class="messages-content">
        <ChatItem v-for="(message, index) in list_messages" :key="index" :message="message"></ChatItem>
        </div>      
        <input type="text" v-model="message" @keyup.enter="sendMessage" class="message-input" placeholder="Type message..."/>
        <button type="button" class="message-submit" @click="sendMessage">Send</button>
    </div> 

</template>

