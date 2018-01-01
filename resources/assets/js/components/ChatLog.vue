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
        props: ['messages']
    }
</script>

<style lang="css">
    .chat-log .chat-message:nth-child(even) {
        backgrround-color: #ccc;
    }
</style>
