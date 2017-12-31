<template lang="html">
    <div class="container">
        <div class="row">
            
            <div class="chat-log">
                
                <chat-message></chat-message>
                <chat-message></chat-message>
                <chat-message></chat-message>
                
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
    .chat-log .chat-message:nth-child(even) {
        backgrround-color: #ccc;
    }
</style>
