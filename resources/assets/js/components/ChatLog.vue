<template lang="html">
    <div class="container">
        <div class="row">
            
            <div class="chat-log">
                
                <chat-message v-for="msg in messages" :message="msg" :key="msg.message"></chat-message>
                
            </div>
            
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: [
                    {
                        message: "Hey!",
                        user: "Elvis"
                    },
                    {
                        message: "Hello!",
                        user: "Michael"
                    }
                ]                    
            }
        }
    }
</script>

<style lang="css">
    .chat-log .chat-message:nth-child(even) {
        backgrround-color: #ccc;
    }
</style>
