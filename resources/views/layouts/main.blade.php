<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Advertisement site</title>
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    </head>
    <body>
        <a name="top"></a>
        <div class="cite-header">
            <div class="container">
                <h3 class="cite-title none-decored"> 
                    <a  href="/">Advertisement site</a></h3>
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

    
        

        <footer class="blog-footer">
            <p>Copyright  ©. All Rights Reserved. </p>
            <p><a class='none-decored' href="#top">Back to top</a>
            </p>
        </footer>

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

        
