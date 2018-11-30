@extends('layouts/layout')
@section('content')
    <h1>Contacta con nosotros</h1>
    {!! Form::open(['url'=>'contact/submit']) !!}
    <div class="form-group">
        {!! Field::text('name','',['class'=>'form-control','placeholder'=>'Enter your name']) !!}
    </div>
    <div class="form-group">
        {!! Field::email('email','',['class'=>'form-control','placeholder'=>'Enter your email']) !!}

    </div>
    <div class="form-group">
        {!! Field::textarea('textarea','',['class'=>'form-control','placeholder'=>'Enter your message']) !!}
    </div>
    <div>
        {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection()
@section('sidebar')
    @parent
    <p>Esta es la barra de contacto</p>
@endsection