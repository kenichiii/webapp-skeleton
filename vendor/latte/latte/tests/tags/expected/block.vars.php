<?php
%A%
		$var = 'a' /* line %d% */;
		echo "\n";
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		echo "\n";
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		echo '


';
		$this->renderBlock('b', get_defined_vars()) /* line %d% */;
		echo '

';
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		echo '


';
		ob_start(function () {}) /* line %d% */;
		try {
			echo '	';
			echo LR\Filters::escapeHtmlText($var) /* line %d% */;
			echo "\n";
			$var = 'blockmod' /* line %d% */;
		} finally {
			$ʟ_fi = new LR\FilterInfo('html');
			echo LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('trim', $ʟ_fi, ob_get_clean()));
		}
		echo '

';
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		echo '


	';
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		echo "\n";
		$var = 'block' /* line %d% */;
		echo '

';
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		return get_defined_vars();
	}


	/** {define a} on line %d% */
	public function blockA(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	';
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		echo "\n";
		$var = 'define' /* line %d% */;

	}


	/** {block b} on line %d% */
	public function blockB(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	';
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		echo "\n";
		$var = 'blocknamed' /* line %d% */;

	}
%A%
