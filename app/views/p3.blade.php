@extends('_master')


@section('head')
<br><h2>For this project, you will have 2 choices:</h2><br>
@stop



@section('body')
<div class="container"
<p>First up is a lorem ipsum generator. Now what does a lorem ipsum generator mean?
    Well what it is a paragraph generator for webpages that you have created. It is designed to provide paragraphs
    of random words (such as latin or funny text) that doesn't make sense. This will make your customers focus on
    what the webpage looks like rather than what the text says.
</p>
<a href="p3/app/views/ipsum">Click here to access the lorem ipsum generator</a>

<p>
    The tool at your disposal is the random user generator. This tool will create random users for you so you can
    populate fake user accounts to test your website.
</p>
<a href="p3/app/views//user">Click here to access the user generator</a>

</div>

@stop