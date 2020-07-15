
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Laravel&Vue</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    </head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
            <a class="navbar-brand" href="{{asset('/')}}">Laravel7 & Vue.js</a>
            <button class="navbar-toggler" type="button " data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto" style="padding-left: 75px">

                    <li class="nav-item active">
                        <a class="nav-link" href="">Taches</a>
                    </li>

                </ul>
                <form class="form-inline mt-2 mt-md-0">

                    <button class="btn btn-light btn-outline-dark my-2 my-sm-0" type="submit">Connexion</button>
                </form>
            </div>
        </nav>
    </header>

    <main role="main" style="padding-top: 85px">
        <div class="container">

           @yield('content')
       </div>

</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
</body>
</html>
