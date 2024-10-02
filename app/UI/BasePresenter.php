<?php

declare(strict_types=1);

namespace App\UI;

use Nittro;


class BasePresenter extends Nittro\Bridges\NittroUI\Presenter
{
	protected function startup()
	{
		parent::startup();

		$this->setDefaultSnippets(['content']);
	}
}