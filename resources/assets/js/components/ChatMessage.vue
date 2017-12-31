<template lang="html">
            
    <div class="chat-message">
        
        <p>{{ message }}</p>

        <small>{{ user }}</small>
            
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: "This is some message text",
                user: "Elvis"
            }      
        }
    }
</script>

<style type="text/css">
    .chat-message {
        padding: 1rem;
    }
    
    .chat-message > p {
        margin-bottom: .5rem;
    }
</style>