<html>
<head>
    <title>Chatroom</title>
</head>

<link rel="stylesheet" href="css/app.css">

<body>

<div id="app">
    <h1>Chatroom</h1>
    
    <chat-log :messages="messages"></chat-log>
    
    <chat-composer v-on:messagesent="addMessage"></chat-composer>
</div>

<script src="js/app.js" charset="utf-8"></script>
</body>
</html>