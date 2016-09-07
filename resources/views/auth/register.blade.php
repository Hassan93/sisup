@extends('layout.main')

@section('title', '| Register')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
           {!! Form::open(array('data-parsley-validate'=>''))!!}
             {{Form::label('name', 'Name:')}}
             {{Form::text('name', null, array('class'=>'form-control', 'required'=>''))}}
             {{Form::label('email', 'Email:', array('class'=>'form-spacing-top'))}}
             {{Form::email('email', null, array('class'=>'form-control', 'required'=>''))}}
             {{Form::label('password', 'Password:', array('class'=>'form-spacing-top'))}}
             {{Form::password('password', array('class'=>'form-control', 'required'=>''))}}
             {{Form::label('password_confirm', 'Confirm Password:', array('class'=>'form-spacing-top'))}}
             {{Form::password('password_confirm', array('class'=>'form-control', 'required'=>''))}}
             {{Form::submit('Login', array('class'=>'btn btn-primary btn-block btn-lg form-spacing-top'))}}
           {!! Form::close()!!}
        </div>

    </div>

@endsection
