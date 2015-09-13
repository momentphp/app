# Moment framework app skeleton

The framework source code can be found here: [momentphp/framework](https://github.com/momentphp/framework).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `composer create-project momentphp/app [app_name] --stability=dev`.

# callable resolving

default: resolve callables from bundles:

$app->add('middlewares\TestMiddleware');
$app->add('TestMiddleware')

$app->get('/', SLIM . 'HomeController:home');
