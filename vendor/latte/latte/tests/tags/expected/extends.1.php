<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$foo = 1 /* line %d% */;
		echo 'This should be erased
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		$this->parentName = "parent";

	}

}
