<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['embed1' => 'blockEmbed1', 'a' => 'blockA'],
		['a' => 'blockA1'],
		['a' => 'blockA2'],
	];


	public function main(): array
	{
		extract($this->params);
		echo "\n";
		$this->enterBlockLayer(1, get_defined_vars()) /* line 2 */;
		if (false) {
			$this->renderBlock('a', get_defined_vars()) /* line 3 */;
			echo "\n";
		}
		$this->copyBlockLayer();
		try {
			$this->renderBlock('embed1', [], 'html') /* line 2 */;
		} finally {
			$this->leaveBlockLayer();
		}
		echo '

	';
		return get_defined_vars();
	}


	/** {define embed1} on line 10 */
	public function blockEmbed1(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '		embed1-start
			';
		$this->renderBlock('a', get_defined_vars()) /* line 12 */;
		echo '
		embed1-end
';
	}


	/** {block a} on line 12 */
	public function blockA(array $ʟ_args): void
	{
		echo 'embed1-A';
	}


	/** {block a} on line 3 */
	public function blockA1(array $ʟ_args): void
	{
		extract(end($this->varStack));
		extract($ʟ_args);
		unset($ʟ_args);

		$this->enterBlockLayer(2, get_defined_vars()) /* line 4 */;
		if (false) {
			echo '					';
			$this->renderBlock('a', get_defined_vars()) /* line 5 */;
			echo "\n";
		}
		$this->copyBlockLayer();
		try {
			$this->renderBlock('embed1', [], 'html') /* line 4 */;
		} finally {
			$this->leaveBlockLayer();
		}
		echo "\n";
	}


	/** {block a} on line 5 */
	public function blockA2(array $ʟ_args): void
	{
		echo 'nested embeds A';
	}

}
