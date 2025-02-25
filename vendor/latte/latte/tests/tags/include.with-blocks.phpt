<?php

/**
 * Test: {include ... with blocks}
 */

declare(strict_types=1);

use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$latte = new Latte\Engine;
$latte->setLoader(new Latte\Loaders\StringLoader([
	'main' => '
{include (true ? "inc" : "") with blocks}

{include test}
	',

	'inc' => '
{define test}
	Parent: {basename($this->getReferringTemplate()->getName())}/{$this->getReferenceType()}
{/define}
	',
]));

Assert::matchFile(
	__DIR__ . '/expected/include.with-blocks.php',
	$latte->compile('main')
);
Assert::matchFile(
	__DIR__ . '/expected/include.with-blocks.html',
	$latte->renderToString('main')
);
Assert::matchFile(
	__DIR__ . '/expected/include.with-blocks.inc.php',
	$latte->compile('inc')
);


Assert::exception(function () use ($latte) {
	$latte->setLoader(new Latte\Loaders\StringLoader);
	$latte->renderToString('{include file "inc", with blocks}');
}, ParseError::class);
