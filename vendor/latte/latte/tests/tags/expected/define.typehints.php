<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['test' => 'blockTest'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		echo "\n";
		$this->renderBlock('test', [1] + [], 'html') /* line %d% */;
		return get_defined_vars();
	}


	/** {define test $var1, ?stdClass $var2, \C\B|null $var3} on line %d% */
	public function blockTest(array $ʟ_args): void
	{

	}

}
