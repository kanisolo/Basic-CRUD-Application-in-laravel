@extends('layout.app')

@section('content')
    <h3>Contact</h3>

    <div class="col-md-6">
        {{ Form::open(['url' => 'contact/submit']) }}
            {{Form::label('name', 'Enter Name')}}
            {{Form::text('name', '',["class"=>"form-control", "placeholder"=>"Enter Your Name"])}}
        <br>
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::email('email', '',["class"=>"form-control", "placeholder"=>"Enter Your Email"])}}
        <br>
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '',["class"=>"form-control", "placeholder"=>"Enter Message"])}}
        <br>
            {{Form::submit('Send Message',["class"=>"btn btn-block btn-primary btn-lg"])}}
        {{ Form::close() }}
    </div>

@endsection
