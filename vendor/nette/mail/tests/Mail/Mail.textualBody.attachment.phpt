<?php

/**
 * Test: Nette\Mail\Message - textual body with attachment.
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

$mail->addAttachment(__DIR__ . '/fixtures/example.zip', null, 'application/zip');

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
Content-Type: multipart/mixed;
	boundary="--------%S%"

----------%S%
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 7bit

Sample text
----------%S%
Content-Type: application/zip
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename="example.zip"

UEsDBBQAAAAIACeIMjsmkSpnQAAAAEEAAAALAAAAdmVyc2lvbi50eHTzSy0pSVVwK0rMTS3PL8pW
MNCz1DNU0ChKLcsszszPU0hJNjMwTzNQKErNSU0sTk1RAIoZGRhY6gKRoYUmLxcAUEsBAhQAFAAA
AAgAJ4gyOyaRKmdAAAAAQQAAAAsAAAAAAAAAAAAgAAAAAAAAAHZlcnNpb24udHh0UEsFBgAAAAAB
AAEAOQAAAGkAAAAAAA==
----------%S%--
EOD
	, TestMailer::$output);
