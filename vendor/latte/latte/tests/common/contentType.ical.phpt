<?php

/**
 * Test: iCal template
 */

declare(strict_types=1);

use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$latte = new Latte\Engine;
$latte->setLoader(new Latte\Loaders\StringLoader);

$template = <<<'EOD'
{contentType text/calendar; charset=utf-8}
{var $start = '2011-06-06', $end = '2011-06-07', $info = "Hello \"hello\", \nWorld"}
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//example.org//iCal 4.0.3//CS
METHOD:PUBLISH
BEGIN:VEVENT
DTSTAMP:{$start|date:'Ymd\THis'}
DTSTART;TZID=Europe/Prague:{$start|date:'Ymd\THis'}
DTEND;TZID=Europe/Prague:{$end|date:'Ymd\THis'}
SUMMARY;LANGUAGE=cs:{$info}
DESCRIPTION:
CLASS:PUBLIC
END:VEVENT
END:VCALENDAR

EOD;

Assert::matchFile(
	__DIR__ . '/expected/contentType.ical.php',
	$latte->compile($template)
);
Assert::matchFile(
	__DIR__ . '/expected/contentType.ical.html',
	$latte->renderToString($template)
);
