<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container my-4">
        <div class="row text-center ">
            <h1>Galéria</h1>
            <p class="lead fw-bold">
                This is a lead paragraph. It stands out from regular paragraphs.
            </p>
        </div>
        <div class="row g-3">
            @yield('gallery')
        </div>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
