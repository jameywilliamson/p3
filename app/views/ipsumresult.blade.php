@extends('_master')

@section('title')
    Ipsum P3 page
@stop


@section('body')


<h2>Your paragraphs:</h2>

<h2 class="error">{{ $error }}</h2>
<p>
    <?php
    $generator = new LoremGenerator();
    $paragraphs = $generator->getParagraphs($pcount);
    echo implode('<p>', $paragraphs);
    ?>

</p>
@stop