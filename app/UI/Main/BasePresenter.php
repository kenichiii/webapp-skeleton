<?php

declare(strict_types=1);

namespace App\UI\Main;

class BasePresenter extends \App\UI\BasePresenter
{
	public function startup()
	{
		parent::startup();

		// Check if user is logged in and redirect to sign-in page if no
		if (!$this->getUser()->isLoggedIn()) {
			$this->redirect(':Sign:SignIn:SignIn:', [
				'backlink' => $this->storeRequest()
			]);
		}
	}
}

