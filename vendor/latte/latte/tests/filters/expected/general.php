<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{

	public function main(): array
	{
%A%
		echo '<ul>
	<li>';
		echo LR\Filters::escapeHtmlText(($this->filters->h2)(($this->filters->h1)($hello))) /* line %d% */;
		echo '</li>
	<li>';
		echo ($this->filters->h2)(($this->filters->h1)($hello)) /* line %d% */;
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(($this->filters->h1)(($this->filters->h2)($hello))) /* line %d% */;
		echo '</li>
</ul>

<ul>
	<li>';
		echo LR\Filters::escapeHtmlText(($this->filters->types)((int)$hello*0, 0, 0.0, "0")) /* line %d% */;
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(($this->filters->types)((int)$hello*1, 1, "1")) /* line %d% */;
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(($this->filters->types)($hello, true, null, false)) /* line %d% */;
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(($this->filters->types)($hello, TRUE, NULL, FALSE)) /* line %d% */;
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(($this->filters->types)($hello, '', "", "$hello")) /* line %d% */;
		echo '</li>
</ul>



';
		ob_start(function () {}) /* line %d% */;
		try {
			echo '  <a   href="#"
> test</a

>
A   A

<script>
// comment
alert();
</script>
';
		} finally {
			$ʟ_fi = new LR\FilterInfo('html');
			echo LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('strip', $ʟ_fi, ob_get_clean()));
		}
		echo '



<p>
Nested blocks: ';
		ob_start(function () {}) /* line %d% */;
		try {
			echo ' Outer   ';
			ob_start(function () {}) /* line %d% */;
			try {
				echo ' Inner Block ';
			} finally {
				$ʟ_fi = new LR\FilterInfo('html');
				echo LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('upper', $ʟ_fi, $this->filters->filterContent('striphtml', $ʟ_fi, ob_get_clean())));
			}
			echo '  Block ';
		} finally {
			$ʟ_fi = new LR\FilterInfo('html');
			echo LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('truncate', $ʟ_fi, $this->filters->filterContent('striphtml', $ʟ_fi, ob_get_clean()), 20));
		}
		echo '
</p>

Breaklines: ';
		echo LR\Filters::escapeHtmlText(($this->filters->breakLines)("hello\nbar")) /* line %d% */;
		echo "\n";
%A%
	}

}
