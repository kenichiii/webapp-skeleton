<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'local' => ['static' => 'blockStatic'],
	];


	public function main(): array
	{
		extract($this->params);
		$var = 10 /* line %d% */;
		echo "\n";
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('static', get_defined_vars()) /* line %d% */;
		echo '


';
		$iterations = 0;
		foreach ($iterator = $ʟ_it = new LR\CachingIterator(['dynamic', 'static'], $ʟ_it ?? null) as $name) /* line %d% */ {
			$this->addBlock($ʟ_nm = $name, 'html', [[$this, 'blockName']], 'local');
			$this->renderBlock($ʟ_nm, get_defined_vars());
			echo "\n";
			$iterations++;
		}
		$iterator = $ʟ_it = $ʟ_it->getParent();
		echo "\n";
		$this->renderBlock('dynamic', ['var' => 20] + [], 'html') /* line %d% */;
		echo "\n";
		$this->renderBlock('static', ['var' => 30] + get_defined_vars(), 'html') /* line %d% */;
		echo "\n";
		$this->renderBlock(($name . ''), ['var' => 40] + [], 'html') /* line %d% */;
		echo "\n";
		$this->addBlock($ʟ_nm = "word$name", 'html', [[$this, 'blockWord_name']], 'local');
		$this->renderBlock($ʟ_nm, get_defined_vars());
		echo '

';
		$this->addBlock($ʟ_nm = "strip$name", 'html', [[$this, 'blockStrip_name']], 'local');
		$this->renderBlock($ʟ_nm, get_defined_vars(), function ($s, $type) {
			$ʟ_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('striptags', $ʟ_fi, $s));
		});
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['name' => '8'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}

	}


	/** {block local $name} on line %d% */
	public function blockName(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);
		echo '		Dynamic block #';
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		echo "\n";
	}


	/** {block local "word$name"} on line %d% */
	public function blockWord_name(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);
		if (false) /* line %d% */ {
			echo '<div></div>';
		}

	}


	/** {block local "strip$name"} on line %d% */
	public function blockStrip_name(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<span>hello</span>';
	}


	/** {block local static} on line %d% */
	public function blockStatic(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	Static block #';
		echo LR\Filters::escapeHtmlText($var) /* line %d% */;
		echo "\n";
	}

}
