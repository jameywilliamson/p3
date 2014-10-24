@extends('_master')

@section('title')
User Generator P3 page
@stop
@section('head')

@stop



@section('body')
Use the Submit button to generate user profiles for your forum<br><br>

{{ Form::open(array('url' => '/user', 'method' => 'GET')) }}

{{ Form::label('ucount', 'How many users do you need?') }}
{{ Form::text('ucount'); }}<br>

Do you need an address?{{ Form::checkbox('address', 'Do you need an address?')}}<br>



<br>{{ Form::submit('Submit!') }}

{{ Form::close() }}

@stop