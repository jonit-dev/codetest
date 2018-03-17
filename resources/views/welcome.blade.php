<!doctype html>
<html lang="en" ng-app="codetestApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codetest</title>



    {{--CUSTOM CSS--}}
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    {{--BOOSTRAP--}}
    <link rel="stylesheet" href="{{asset('build\bootstrap\dist\css\bootstrap.css')}}">

    {{--ANGULAR--}}
    <link rel="stylesheet" href="{{asset('css/angular.css')}}">



</head>
<body ng-cloak>




<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="container" ng-controller="landingController" >
    <h1 class="mt-5">Hello @{{ name }}</h1>
    <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
    <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
</main>


{{-- *** SCRIPTS *** --}}



{{--BOOTSTRAP--}}
<script src="{{asset('build\jquery\dist\jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('build\bootstrap\dist\js\bootstrap.min.js')}}"></script>

{{--ANGULAR--}}
<script src="{{asset('build\angular\angular.min.js')}}"></script>
<script src="{{asset('js\angular\app.js')}}"></script>
<script src="{{asset('js\angular\controllers\landingController.js')}}"></script>





<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>








</body>
</html>

</body>
</html>