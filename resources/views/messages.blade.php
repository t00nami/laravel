@extends('layouts.layout')
@section('content')
    <h1>Listado de mensajes</h1>
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <div class="container">
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ $message->name }}</li>
                    <li class="list-group-item">Name: {{ $message->email }}</li>
                    <li class="list-group-item">Name: {{ $message->message }}</li>
                </ul>
            </div>
        @endforeach
    @endif
@endsection