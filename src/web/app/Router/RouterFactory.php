<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		//$router->addRoute('<action>[/<id>]', 'Homepage:default');
        $router->addRoute('[<locale=cs cs|en>/]<action>[/<id>]', 'Home:default');
		return $router;
	}
}
