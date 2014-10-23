<!DOCTYPE html>
<html>
<head>

    <title>Project P3</title>

    <meta charset='utf-8'>
    <link rel='stylesheet' href='{{ asset('css/foobar.css') }}'>

    @yield('head')
    <br><h2>For this project, you will have 2 choices:</h2><br>

</head>
<body>


@yield('content')
<div class="container"
<p>First up is a lorem ipsum generator. Now what does a lorem ipsum generator mean?
    Well what it is a paragraph generator for webpages that you have created. It is designed to provide paragraphs
    of random words (such as latin or funny text) that doesn't make sense. This will make your customers focus on
    what the webpage looks like rather than what the text says.
</p>
<a href="http://p3.jameywilliamson/ipsum">Click here to access the ipsum generator</a>
</div>



@yield('footer')

</body>
</html>