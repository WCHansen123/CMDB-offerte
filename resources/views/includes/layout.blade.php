<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMDB-Offerte | Home</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{URL::asset('../css/nav.css')}}">
    <!-- <link rel="stylesheet" href="{{URL::asset('../css/style.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{URL::asset('../css/footer.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{URL::asset('../scss/style.scss')}}" type="text/plain"> -->
</head>

<body>
    @yield('navigation')

    @yield('content')

    @yield('footer')
</body>

</html>