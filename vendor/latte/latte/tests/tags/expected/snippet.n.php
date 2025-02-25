<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['outer' => 'blockOuter', 'inner' => 'blockInner', 'gallery' => 'blockGallery'],
	];


	public function main(): array
	{
%A%
		echo '	<div class="test"';
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('outer')) . '"';
		echo '>
';
		$this->renderBlock('outer', [], null, 'snippet');
		echo '	</div>

	<div class="test"';
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('inner')) . '"';
		echo '>
';
		$this->renderBlock('inner', [], null, 'snippet');
		echo '	</div>

	<div class="';
		echo LR\Filters::escapeHtmlAttr('class') /* line %d% */;
		echo '"';
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('gallery')) . '"';
		echo '>';
		$this->renderBlock('gallery', [], null, 'snippet');
		echo '</div>
';
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
			echo '	<p>Outer</p>
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
			echo '	<p>Inner</p>
';
		} finally {
			$this->global->snippetDriver->leave();
		}

	}


	/** {snippet gallery} on line %d% */
	public function blockGallery(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("gallery", 'static');
		try {
		} finally {
			$this->global->snippetDriver->leave();
		}

	}

}
