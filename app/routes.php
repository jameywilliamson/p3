<?php



Route::get('/', function()
{

    return View::make('p3');

});

Route::get('ipsum/{paraCount?}', function()
{
   $pcount = Input::get('pcount');

    $generator = new LoremGenerator();
    $paragraphs = $generator->getParagraphs($pcount);
    echo '<h2>Your text:<br></h2>';
    echo implode('<p>', $paragraphs);

    return View::make('ipsum');


});


//route for user generator
Route::get('/user/', function()
{

    return View::make('user');
});


//route for number of users generated
Route::get('/user/{usercount}', function()
{

    return View::make('user');
});


//Route::get('/ipsum/', function()
//{




  //  return View::make('ipsum');








