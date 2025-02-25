<?php

/**
 * Test: Nette\Mail\Message - textual and HTML body.
 */

declare(strict_types=1);

use Nette\Mail\Message;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Mail.php';


$mail = new Message;

$mail->setFrom('John Doe <doe@example.com>');
$mail->addTo('Lady Jane <jane@example.com>');
$mail->setSubject('Hello Jane!');

$mail->setBody('Sample text');

$mail->setHTMLBody('<b>Žluťoučký kůň</b>');

$mailer = new TestMailer;
$mailer->send($mail);

Assert::match(<<<'EOD'
MIME-Version: 1.0
X-Mailer: Nette Framework
Date: %a%
From: John Doe <doe@example.com>
To: Lady Jane <jane@example.com>
Subject: Hello Jane!
Message-ID: <%S%@%S%>
Content-Type: multipart/alternative;
	boundary="--------%S%"

----------%S%
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 7bit

Sample text
----------%S%
Content-Type: text/html; charset=UTF-8
Content-Transfer-Encoding: 8bit

<b>Žluťoučký kůň</b>
----------%S%--
EOD
	, TestMailer::$output);
