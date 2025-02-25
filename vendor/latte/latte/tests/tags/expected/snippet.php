<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['' => 'block1', 'outer' => 'blockOuter', 'inner' => 'blockInner', 'title' => 'blockTitle', 'title2' => 'blockTitle2'],
	];


	public function main(): array
	{
%A%
		echo '<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId(''));
		echo '">';
		$this->renderBlock('', [], null, 'snippet') /* line %d% */;
		echo '</div>



<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('outer'));
		echo '">';
		$this->renderBlock('outer', [], null, 'snippet') /* line %d% */;
		echo '</div>



	@';
		if (true) /* line %d% */ {
			echo ' Hello World @';
		}
		echo '

	<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('title'));
		echo '">';
		$this->renderBlock('title', [], null, 'snippet') /* line %d% */;
		echo '</div>

	<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('title2'));
		echo '">';
		$this->renderBlock('title2', [], null, 'snippet') /* line %d% */;
		echo '</div>';
		return get_defined_vars();
	}


	/** {snippet } on line %d% */
	public function block1(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("", 'static');
		try {
			echo "\n";
		} finally {
			$this->global->snippetDriver->leave();
		}

	}


	/** {snippet outer} on line %d% */
	public function blockOuter(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("outer", 'static');
		try {
			echo '	Outer
		<div id="';
			echo htmlspecialchars($this->global->snippetDriver->getHtmlId('inner'));
			echo '">';
			$this->renderBlock('inner', [], null, 'snippet') /* line %d% */;
			echo '</div>
	/Outer
';
		} finally {
			$this->global->snippetDriver->leave();
		}

	}


	/** {snippet inner} on line %d% */
	public function blockInner(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("inner", 'static');
		try {
			echo 'Inner';
		} finally {
			$this->global->snippetDriver->leave();
		}

	}


	/** {snippet title} on line %d% */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("title", 'static');
		try {
			echo 'Title 1';
		} finally {
			$this->global->snippetDriver->leave();
		}

	}


	/** {snippet title2} on line %d% */
	public function blockTitle2(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("title2", 'static');
		try {
			echo 'Title 2';
		} finally {
			$this->global->snippetDriver->leave();
		}

	}

}
