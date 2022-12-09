<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    @vite('resources/css/app.css')
    <title>Laravel Import</title>
</head>
<body>
@include('layouts.header')
<div class="container sm mx-auto px-56 mt-3">
    @yield('content')
</div>
<script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous">
</script>
<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        $(".btn-upload").removeClass('hidden');
        $(".btn-loading").addClass('hidden');
    });
</script>
@yield('scripts')
@include('layouts.footer')
</body>
</html>
