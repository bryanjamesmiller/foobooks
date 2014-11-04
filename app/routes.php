<?php



# Homepage
Route::get('/', function() {

    return View::make('index');

});

// List all books / search
Route::get('/list/{format?}', function($format = 'html') {

        $query = Input::get('query');

        $library = new Library();

    $library->setPath(app_path().'/database/books.json');

    $books = $library->getBooks();

        if($query) {
                $books = $library->search($query);
            }

    if($format == 'json') {
        return 'JSON Version';
    }
    elseif($format == 'pdf') {
        return 'PDF Version;';
    }
    else {
        return View::make('list')
            ->with('name','Susan')
            ->with('books', $books)
                    ->with('query', $query);


    }
});

// Display the form for a new book
Route::get('/add', function() {

    $library = new Library();
    $library->setPath(app_path().'/database/books.json');

    $books = $library->getBooks();

    echo Pre::render($books);

});

// Process form for a new book
Route::post('/add', function() {


});

// Display the form to edit a book
Route::get('/edit/{title}', function() {



});

// Process form for a edit book
Route::post('/edit/', function() {


});



Route::get('/data', function() {

    // Get the file
    $books = File::get(app_path().'/database/books.json');

    // Convert to an array
    $books = json_decode($books,true);

    // Return the file
    echo Pre::render($books);


});


Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);

});

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});


Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});