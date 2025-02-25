<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['title' => 'blockTitle', 'sidebar' => 'blockSidebar'],
	];


	public function main(): array
	{
		extract($this->params);
		extract(['class' => NULL, 'namespace' => NULL, 'top' => TRUE], EXTR_SKIP) /* line %d% */;
		echo '<!DOCTYPE html>
<head>
	<title>';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('title', get_defined_vars(), function ($s, $type) {
			$ʟ_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('upper', $ʟ_fi, $this->filters->filterContent('stripHtml', $ʟ_fi, $s)));
		}) /* line 4 */;
		echo '</title>
</head>

<body>
	<div id="sidebar">
';
		$this->renderBlock('sidebar', get_defined_vars()) /* line %d% */;
		echo '
	</div>

	<div id="content">
';
		$this->renderBlock('content', [], 'html') /* line %d% */;
		echo "\n";
		$this->renderBlock('content', [], function ($s, $type) {
			$ʟ_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('upper', $ʟ_fi, $this->filters->filterContent('stripHtml', $ʟ_fi, $s)));
		}) /* line 19 */;
		echo '	</div>
</body>
</html>
Parent: ';
		echo LR\Filters::escapeHtmlText(basename($this->getReferringTemplate()->getName())) /* line %d% */;
		echo '/';
		echo LR\Filters::escapeHtmlText($this->getReferenceType()) /* line %d% */;
		echo "\n";
		return get_defined_vars();
	}


	/** {block title} on line %d% */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'My website';
	}


	/** {block sidebar} on line %d% */
	public function blockSidebar(array $ʟ_args): void
	{
		echo '		<ul>
			<li><a href="/">Homepage</a></li>
		</ul>
';
	}

}
