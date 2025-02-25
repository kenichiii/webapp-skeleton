<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['outer' => 'blockOuter'],
	];


	public function main(): array
	{
%A%
		echo '<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('outer'));
		echo '">';
		$this->renderBlock('outer', [], null, 'snippet') /* line %d% */;
		echo '</div>';
%A%
	}


	public function prepare(): void
	{
%A%
	}


	/** {snippet outer} on line %d% */
	public function blockOuter(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("outer", 'static');
		try {
			$iterations = 0;
			foreach (array(1,2,3) as $id) /* line %d% */ {
				echo '		<div id="';
				echo htmlspecialchars($this->global->snippetDriver->getHtmlId($ʟ_nm = "inner-$id"));
				echo '">';
				$this->global->snippetDriver->enter($ʟ_nm, 'dynamic') /* line %d% */;
				try {
					echo '
				#';
					echo LR\Filters::escapeHtmlText($id) /* line %d% */;
					echo "\n";
				} finally {
					$this->global->snippetDriver->leave();
				}
				echo '</div>
';
				$iterations++;
			}
		} finally {
			$this->global->snippetDriver->leave();
		}

	}

}
