<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('dist/app.css')}}" rel="stylesheet">
</head>
<body>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endisset
@if(session('danger'))
    <div class="alert alert-danger">{{ session('danger') }}</div>
@endisset
@yield('content')
<script src="{{asset('dist/app.js')}}" type="text/javascript"></script>
</body>
</html>
