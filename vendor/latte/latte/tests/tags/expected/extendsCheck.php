<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
%A%
	public function main(): array
	{
		extract($this->params);
		echo '

';
		ob_start(function () {}) /* line %d% */;
		try {
			echo '    ';
			$this->renderBlock('bar', get_defined_vars()) /* line %d% */;
			echo "\n";
		} finally {
			$ʟ_tmp = ob_get_length() ? new LR\Html(ob_get_clean()) : ob_get_clean();
		}
		$ʟ_fi = new LR\FilterInfo('html');
		$foo = $ʟ_tmp;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line %d% */;
		return get_defined_vars();
	}
%A%
}
