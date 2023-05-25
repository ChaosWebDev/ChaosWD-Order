<?php
// ! $router->get() and $router->post() need 3 variables:
// * (uri, namespace, controller@view)
// * uri comes from $_SERVER['REQUEST_URI']
// * namespace refers to the namespace of the class you want it to call. If you have `namespace order\controller` then the namespace portion should be "order\controller"
// * controller@view is the class being called and the method to send it to. ViewController has a public function setView(), so it's ViewController@setView
// ! This does not pass variables from the URI at this time

// * VIEW (GET) ROUTES * //
$router->get('/', "Order\Controller", 'ViewController@getView'); // * You can set the default view file by assigning the name (without the .php) to $_ENV['HOME_URI']. If it is not set, it will assume `index`.

// * GET ROUTES * //


// * POST ROUTES * //

