@extends('layouts.app')

@section('content')
    
<div class="container">
    <h1>Chatroom</h1>
    <div>
        <span class="badge pull-right">@{{ usersOnline.length }}</span>
    </div>
    <chat-log :messages="messages"></chat-log>
    
    <chat-composer v-on:messagesent="addMessage"></chat-composer>
</div>
    
@endsection