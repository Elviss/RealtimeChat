<template lang="html">
    <div class="container">
        <div class="row">
            <div class="chat-composer">
            
                <input type="text" placeholder="Start typing your message...">
                    
                <button class="btn btn-primary">Send</button>
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            
        }
    }
</script>

<style type="text/css">
    .chat-composer {
        display: flex;
    }
    .chat-composer input {
        flex: 1 auto;
    }
    
    .chat-composer button {
        border-radius: 0;
    }
</style>
