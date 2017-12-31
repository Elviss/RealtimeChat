<template lang="html">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>{{ message }}</p>

                <small>{{ user }}</small>
            </div>
        </div>
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
