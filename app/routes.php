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

//route for number of users generated
Route::get('/user/{usercount?}', function()
{

    //grabs the value from /user view
    $ucount = Input::get('ucount');
    $address = Input::get('address');

    $faker = Faker\Factory::create();
    for ($i=0; $i < $ucount; $i++)
    {
        echo $faker->name, "\n<br>";

        if ($address)
        {
           echo $faker->address . '<br><br />';
        }
    }


    return View::make('user');
});










