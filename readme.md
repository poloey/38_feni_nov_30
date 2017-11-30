# Class 38

### Laravel install

~~~
composer create-project laravel/laravel <foldername>
~~~

### serving laravel using artisan command
~~~
php artisan serve
~~~

### Route - routes/web.php file


~~~php
Route::get('/', function () {
      $fruits = ['apple', 'orange', 'banana'];
    return view('hello', compact('fruits'));

});
~~~

### Views
Views can be found inside resource/views folder

### to passing data to views
~~~php
$fruits = ['apple', 'orange', 'banana'];
 compact('fruits')
 with('fruits', $fruits);
 ['fruits' => $fruits]
 withFruits($fruits)
~~~

# Blade templating 
### yield for content
~~~
@yield('')
~~~

### yield
~~~
@section('yielding_word')
blah blah
@endsection
~~~





