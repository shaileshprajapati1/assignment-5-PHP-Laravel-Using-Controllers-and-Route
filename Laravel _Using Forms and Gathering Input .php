<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP-Laravel-Using Forms and Gathering Input-Industry</title>
</head>

<body>
    <div class="container mt-1">
        <h1 class="text-center">Route In Latavel</h1>
        What is a route in Laravel?
        <ul>
            <li>
                <p>The route is a way of creating a request URL for your application.</p>
            </li>
        </ul>

        How to pass Multiple Variable in route?
        <ul>
            <li>
                <p>To create a route that accepts multiple parameters, I can simply add them within curly braces {}. That looks something like this:
            <li>// routes/web.php</li>
            <li>Route::post('/saveusers/{id}', [App\Http\Controllers\HomeController::class, 'store']);</li>
            </p>
            </li>
        </ul>
        How to pass variable which can be null in Route?
        <ul>
            <li>
                <p>We can also assign a null value to a variable by using the data type None, and we can check the value of the variable by using the identity operator (is, is not).
            <li>Route::post('/saveusers/{id?}', [App\Http\Controllers\HomeController::class, 'store']);</li>
            </p>
            </li>
        </ul>
        How to remove route caching?
        <ul>
            <li>
                <p>While building Laravel applications, sometimes, the changes in the code are not reflected. This issue usually occurs due to caching.</p>
                <ul>

                    <ul> Clear Application Cache
                        <li> For running the laravel application cache, run the following artisan command:</li>

                        <li> php artisan cache:clear </li>
                    </ul>
                    <ul>
                        Clear Route Cache
                        <li> To clear the route cache of your Laravel application, run the below artisan command:</li>
                        <li>php artisan route:clear</li>
                    </ul>


                    <ul>
                        Clear Configuration Cache
                        <li>If you want to clear the config cache of your Laravel application, run the command:</li>
                        <li>php artisan config:clear</li>
                    </ul>


                    <ul>
                        Clear Compiled Views Cache
                        <li>If you need to clear and view cache of your laravel application, simply run the artisan command given below:</li>

                        <li>php artisan view:clear</li>
                    </ul>
                </ul>
            </li>
        </ul>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>