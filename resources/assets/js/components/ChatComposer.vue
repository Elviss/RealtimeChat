<template lang="html"> 
    
    <div class="chat-composer">
    
        <input type="text" placeholder="Start typing your message..." v-model="messageText" @keyup.enter="sendMessage">
            
        <button class="btn btn-primary" @click="sendMessage">Send</button>
        
    </div>
    
</template>

<script>
    export default {
        data() {
            return {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: 'Elvis'
                });
                this.messageText = '';
            }
        }
    }
</script>

<style type="text/css">
    .chat-composer {
        display: flex;
        /*position: fixed;*/
        /*bottom: 20px;*/
    }
    .chat-composer input {
        flex: 1 auto;
        padding: 0 5px;
    }
    
    .chat-composer button {
        border-radius: 0;
    }
</style>
