@extends('_master')

@section('title')
Lorem Ipsum Generator
@stop

@section('head')
{{ Form::open(array('url' => '/ipsum', 'method' => 'GET')) }}

{{ Form::label('pcount', 'How many paragraphs do you need?') }}
{{ Form::text('pcount'); }}



{{ Form::submit('Submit!') }}

{{ Form::close() }}
@stop

@section('body')

@stop