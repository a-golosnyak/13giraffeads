<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Advertisement site</title>
        <link rel="stylesheet" href="css/bootstrap.css "> 
        <link rel="stylesheet" href="css/main.css"> 
    </head>
    <body>

        <div class="cite-header">
            <div class="container">
                <h3 class="cite-title none-decored"> 
                    <a class='none-decored' href="/">Advertisement site</a></h3>
                <br>
            </div>
        </div>

        @include('inc.navigation')
        

        <div class='container '>
            
            <div class='row data-field' >
                @include('inc.messages')
                @yield('content')
            </div>
        </div>

        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h4 class="text-white">Collapsed content</h4>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        

        <footer class="blog-footer">
            <p>Copyright  © ... . All Rights Reserved. </p>
            <p>Запрещено копирование материалов без активной ссылки на этот сайт.</p>
            <p><a class='none-decored' href="#">Back to top</a>
            </p>
        </footer>

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

        
