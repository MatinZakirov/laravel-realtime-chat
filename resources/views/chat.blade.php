@extends('layouts.master')



@section('content')
<div class="row" id="app">
    <div class=" col-4 offset-4 col-sm-10 offset-sm-1">
        <li class="list-group-item active">Chat Room <span class="badge badge-pill badge-danger">@{{numberOfUsers}}</span></li>

        <ul class="list-group" v-chat-scroll>
            <div class="badge badge-pill badge-primary col-1">@{{typing}}</div>
            <message v-for="message, index in chat.message"
                     :key="message.index"
                     :color=chat.color[index]
                     :user = chat.user[index]
                     :time = chat.time[index]

            >
                @{{message}}
            </message>
        </ul>
        <input v-model="message" @keyup.enter="send" type="text" class="form-control" placeholder="Type Your Message Here...">

    </div>

</div>
@endsection