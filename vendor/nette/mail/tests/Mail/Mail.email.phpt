<?php

/**
 * Test: Nette\Mail\Message valid email addresses.
 */

declare(strict_types=1);

use Nette\Mail\Message;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Mail.php';


$mail = new Message;

$mail->setFrom('Žluťoučký kůň <kun1@example.com>');

$mail->addReplyTo('Žluťoučký kůň <kun2@example.com>');
$mail->addReplyTo('doe2@example.com', 'John Doe');

$mail->addTo('Žluťoučký "kůň" <kun3@example.com>');
$mail->addTo('doe3@example.com', "John 'jd' Doe");

$mail->addCc('The\Mail <nette@example.com>');
$mail->addCc('doe4@example.com', 'John Doe');
$mail->addCc('The.Mail <nette2@example.com>');

$mail->addBcc('Žluťoučký kůň <kun5@example.com>');
$mail->addBcc('doe5@example.com');

$mail->setReturnPath('doe@example.com');

$mailer = new TestMailer;
$mailer->send($mail);

Assert::match(<<<'EOD'
MIME-Version: 1.0
X-Mailer: Nette Framework
Date: %a%
From: =?UTF-8?B?xb1sdcWlb3XEjWvDvSBrxa/FiA==?= <kun1@example.com>
Reply-To: =?UTF-8?B?xb1sdcWlb3XEjWvDvSBrxa/FiA==?= <kun2@example.com>,
	John Doe <doe2@example.com>
To: =?UTF-8?B?xb1sdcWlb3XEjWvDvSAia8WvxYgi?= <kun3@example.com>,
	John 'jd' Doe <doe3@example.com>
Cc: TheMail <nette@example.com>,John Doe <doe4@example.com>,"The.Mail"
	 <nette2@example.com>
Bcc: =?UTF-8?B?xb1sdcWlb3XEjWvDvSBrxa/FiA==?= <kun5@example.com>,
	doe5@example.com
Return-Path: doe@example.com
Message-ID: <%a%@%a%>
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 7bit
EOD
	, TestMailer::$output);
