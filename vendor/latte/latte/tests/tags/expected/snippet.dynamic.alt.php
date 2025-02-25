<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['outer1' => 'blockOuter1', 'outer2' => 'blockOuter2'],
	];


	public function main(): array
	{
%A%
		echo '<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('outer1'));
		echo '">';
		$this->renderBlock('outer1', [], null, 'snippet') /* line %d% */;
		echo '</div>


<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('outer2'));
		echo '">';
		$this->renderBlock('outer2', [], null, 'snippet') /* line %d% */;
		echo '</div>';
%A%
	}


	public function prepare(): void
	{
%A%
	}


	/** {snippet outer1} on line %d% */
	public function blockOuter1(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("outer1", 'static');
		try {
			$iterations = 0;
			foreach (array(1,2,3) as $id) /* line %d% */ {
				echo '		<div';
				echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId($ʟ_nm = "inner-{$id}")) . '"';
				echo '>
';
				$this->global->snippetDriver->enter($ʟ_nm, 'dynamic') /* line %d% */;
				try {
					echo '				#';
					echo LR\Filters::escapeHtmlText($id) /* line %d% */;
					echo "\n";
				} finally {
					$this->global->snippetDriver->leave();
				}
				echo '		</div>
';
				$iterations++;
			}
		} finally {
			$this->global->snippetDriver->leave();
		}

	}


	/** {snippet outer2} on line %d% */
	public function blockOuter2(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("outer2", 'static');
		try {
			$iterations = 0;
			foreach (array(1,2,3) as $id) /* line %d% */ {
				echo '		<div';
				echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId($ʟ_nm = "inner-{$id}")) . '"';
				echo '>
';
				$this->global->snippetDriver->enter($ʟ_nm, 'dynamic') /* line %d% */;
				try {
					echo '				#';
					echo LR\Filters::escapeHtmlText($id) /* line %d% */;
					echo "\n";
				} finally {
					$this->global->snippetDriver->leave();
				}
				echo '		</div>
';
				$iterations++;
			}
		} finally {
			$this->global->snippetDriver->leave();
		}

	}

}
