<?php
include '../Entity/Middleware.php';

$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

//All middleware are chained. The client can build various configurations of
//chains depending on its needs.
$middleware = new ThrottlingMiddleware(2);
$middleware
            ->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware());

//The server gets a chain from the client code.
$server->setMiddleware($middleware);

do {
    echo "Enter your email:\n";
    $email = readline();
    echo "Enter your password:\n";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!($success));
?>