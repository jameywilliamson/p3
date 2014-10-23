<?php



Route::get('/', function()
{

    return View::make('p3');

});


//route for ipsum page
Route::get('/ipsum/', function()
{

    echo 'Please enter how many paragrahs you would like generated<br>' ;
    return 'place holder';
});

//route for number of paragraphs
Route::get('/ipsum/{paragraphcount}', function()
{

    return 'Good to go';
});


//route for user generator
Route::get('/user/', function()
{

    return 'Please enter how many paragrahs you would like generated';
});


//route for number of users generated
Route::get('/user/{usercount}', function()
{

    return 'Good to go';
});










