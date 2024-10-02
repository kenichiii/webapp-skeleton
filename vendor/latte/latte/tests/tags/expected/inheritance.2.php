<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'title' => 'blockTitle', 'sidebar' => 'blockSidebar'],
	];


	public function main(): array
	{
%A%
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line %d% */;
		echo '

';
		$this->renderBlock('sidebar', get_defined_vars()) /* line %d% */;
%A%
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['person' => '8'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->parentName = "parent";

	}


	/** {block content} on line %d% */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	<h1>';
		$this->renderBlock('title', get_defined_vars()) /* line %d% */;
		echo '</h1>

	<ul>
';
		$iterations = 0;
		foreach ($people as $person) /* line %d% */ {
			echo '		<li>';
			echo LR\Filters::escapeHtmlText($person) /* line %d% */;
			echo '</li>
';
			$iterations++;
		}
		echo '	</ul>
';
	}


	/** {block title} on line %d% */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Homepage ';
	}


	/** {block sidebar} on line %d% */
	public function blockSidebar(array $ʟ_args): void
	{

	}

}
