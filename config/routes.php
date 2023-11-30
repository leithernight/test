<?php

$router = new Framework\Router;

$router->add("/", ["controller" => "PostsController", "action" => "index"]);

$router->add("registerForm", ["controller" => "UserController", "action" => "getRegisterForm"]);

$router->add("register", ["controller" => "UserController", "action" => "register"]);

$router->add("post", ["controller" => "PostsController", "action" => "getSingPost"]);

$router->add("loginForm", ["controller" => "UserController", "action" => "getLoginForm"]);

$router->add("login", ["controller" => "UserController", "action" => "login"]);

$router->add("posts", ["controller" => "PostsController", "action" => "getList"]);

$router->add('{controller}/{action}');

return $router;