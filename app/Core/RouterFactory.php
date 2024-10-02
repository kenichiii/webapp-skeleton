<?php

declare(strict_types=1);

namespace App\Core;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;

		// None logged user
		$router
			->withModule('Sign')
			->addRoute('sign[/<presenter>[/<action>[/<id>]]]', 'SignIn:SignIn:default');

		// Logged user - Dashboard
		$router
			->withModule('Main')
			->addRoute('<presenter>/<action>[/<id>]', 'Dashboard:Dashboard:default');

		return $router;
	}
}
