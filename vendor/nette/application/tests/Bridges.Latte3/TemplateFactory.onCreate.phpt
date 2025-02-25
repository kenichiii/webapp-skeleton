<?php

/**
 * Test: TemplateFactory in Bridge properly handles TemplateFactory::onCreate
 * @phpVersion 8.0
 */

declare(strict_types=1);

use Nette\Bridges\ApplicationLatte\LatteFactory;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Bridges\ApplicationLatte\TemplateFactory;
use Nette\Http;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

if (version_compare(Latte\Engine::VERSION, '3', '<')) {
	Tester\Environment::skip('Test for Latte 3');
}


test('', function () {
	$engine = new Latte\Engine;
	$latteFactory = Mockery::mock(LatteFactory::class);
	$latteFactory->shouldReceive('create')->andReturn($engine);
	$factory = new TemplateFactory($latteFactory, new Http\Request(new Http\UrlScript('http://nette.org')));
	$factory->onCreate[] = $callback = function (Template $template) {
		$template->add('foo', 'bar');
	};

	$template = $factory->createTemplate();

	Assert::type('array', $factory->onCreate);
	Assert::same($callback, $factory->onCreate[0]); // our callback
	Assert::equal('bar', $template->foo);
});
