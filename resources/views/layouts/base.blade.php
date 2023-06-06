<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    @stack('css')
    <style>
        .container {
            max-width: 720px;
        }

        .required::after {
            content: '*';
            color: red;
            margin-left: 3px;
        }
    </style>

    <title>@yield('page.title', config('app.name'))</title>
</head>

<body>

    <div class="d-flex flex-column justify-content-between min-vh-100">

        @include('includes.alert')
        @include('includes.header')

        <main class="flex-grow-1">
            @yield('content')
        </main>

        @include('includes.footer')

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    @stack('js')

</body>

</html>
