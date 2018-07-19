<?php
namespace Symfony\Component\Routing\Loader\Configurator;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controller\BlogController;

$routes = new RouteCollection();
$routes->add('blog_liste', new Route('/blog', array(
    '_controller' => [BlogController::class, 'liste']
)));
$routes->add('blog_show', new Route('/blog/{slug}', array(
    '_controller' => [BlogController::class, 'show']
)));

//return $routes;

return function (RoutingConfigurator $routes) {
    $routes->add('about_us', ['fr' => '/a-propos', 'en' => '/about-us'])
        ->controller('App\Controller\BlogController::about');
};
