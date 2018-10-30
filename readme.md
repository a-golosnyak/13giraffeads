Install
composer install



13giraffeads\vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php file

public function username()
{
    return 'email';
}

needs to be changed:

public function username()
{
    return 'name';
}


