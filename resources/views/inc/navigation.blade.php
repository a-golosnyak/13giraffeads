<?php
//    $result = queryMysql("SELECT * FROM category");
?>

<div class="navigation">
    <div class="row ">
        <div class="container">
            <div class="pull-xs-left"> 
                <div class="nav nav-tabs ">
                    <div class="nav-item">
                        @guest
                        @else
                            <a class="nav-link" href="/edit">Create ad</a>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="pull-xs-right">
                <div class="nav nav-tabs">
                    <div class="nav-item dropdown " style="vertical-align: right;">
                        
                    @guest
                        <div class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Sign in</div>
                    @else
                        <div class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>{{ Auth::user()->name }}</div>
                    @endguest
                    
                        <div class='dropdown-menu dropdown-menu-right'>
                            @guest
                                <form class='form-signin' method='post' action="{{ route('login') }}">
                                    @csrf

                                    <div class='dropdown-item'>
                                        <input id="name" type='name' name='name' maxlength='30' size='20' class='form-control{{ $errors->has('name') ? ' is-invalid' : '' }}' placeholder='Username' required autofocus>
                                    </div>

                                    <div class='dropdown-item'>
                                        <input id="password" type='password' name='password' class='form-control{{ $errors->has('password') ? ' is-invalid' : '' }}' size='40' placeholder='Password' required>
                                    </div>

                                    <div class='dropdown-item'>
                                        <button class='btn btn-md btn-secondary btn-block p-x-3' type='submit'> Sign in </button>
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

