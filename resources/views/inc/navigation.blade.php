<?php
//    $result = queryMysql("SELECT * FROM category");
?>

<div class="navigation">
    <div class="row ">
        <div class="container">
            <div class="col-xs-6"> 
                <div class="nav nav-tabs ">
                    <div class="nav-item">
                        @guest
                        @else
                            <a class="nav-link" href="/edit">Create ad</a>
                        @endguest
                    </div>
                </div>
            </div>
            <div class=" col-xs-1">

            </div>
            <div class=" col-xs-3"> 
            </div>
            <div class=" col-xs-2">
                <div class="nav nav-tabs">
                    <div class="nav-item dropdown " style="vertical-align: right;">
                        
                    @guest
                        <div class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Вход</div>
                    @else
                        <div class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>{{ Auth::user()->name }}</div>
                    @endguest
                    
                        <div class='dropdown-menu dropdown-menu-right'>
                            @guest
                                <form class='form-signin' method='post' action="{{ route('login') }}">
                                    @csrf

                                    <div class='dropdown-item'>
                                        <input id="email" type='email' name='email' maxlength='30' size='20' class='form-control{{ $errors->has('email') ? ' is-invalid' : '' }}' placeholder='Email address' required autofocus>
                                    </div>

                                    <div class='dropdown-item'>
                                        <input id="password" type='password' name='password' class='form-control{{ $errors->has('password') ? ' is-invalid' : '' }}' size='40' placeholder='Password' required>
                                    </div>

                                    <div class='dropdown-item'>
                                        <button class='btn btn-md btn-secondary btn-block p-x-3' type='submit'> Вход </button>
                                    </div>
                                </form>
                            @else
                                <div class='dropdown-item'>  
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @endguest  
                        </div> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php
/*
    echo "SESSION ";
    print_r($_SESSION);
    echo "<br>COOKIES ";
    print_r($_COOKIE);
    echo "<br>";
    echo $usermail;
    echo "<br>";
    print_r($_FILES);
    echo "<br>";
    echo "REQUEST ";
    print_r($_REQUEST['_POST']);
*/
?>

