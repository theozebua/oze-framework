<?php

declare(strict_types=1);

use OzeFramework\Container\Container;

/*
|------------------------------------------------------------
| Register Bindings With The Container
|------------------------------------------------------------
*/

$container = new Container();

// $container->bind(Something::class, fn (Container $c) => $c->get(Something::class));

/*
|------------------------------------------------------------
| Return The Container Instance
|------------------------------------------------------------
*/

return $container;
