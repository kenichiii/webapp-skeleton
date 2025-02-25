<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const CONTENT_TYPE = 'xml';


	public function main(): array
	{
		extract($this->params);
		if (empty($this->global->coreCaptured) && in_array($this->getReferenceType(), ["extends", null], true)) {
			header('Content-Type: application/xml; charset=utf-8') /* line %d% */;
		}
		echo '<?xml version="1.0" encoding="utf-8"?>
<?xml-stylesheet type="text/css" href="';
		echo LR\Filters::escapeXml($id) /* line %d% */;
		echo '"?>

<script>';
		if (1) /* line %d% */ {
			echo '<meta />';
		}
		echo '</script>


<ul>
	<li>Escaped: ';
		echo LR\Filters::escapeXml($hello) /* line %d% */;
		echo '</li>
	<li>Non-escaped: ';
		echo $hello /* line %d% */;
		echo '</li>
	<li>Escaped expression: ';
		echo LR\Filters::escapeXml('<' . 'b' . '>hello' . '</b>') /* line %d% */;
		echo '</li>
	<li>Non-escaped expression: ';
		echo '<' . 'b' . '>hello' . '</b>' /* line %d% */;
		echo '</li>
	<li>Array access: ';
		echo LR\Filters::escapeXml($people[1]) /* line %d% */;
		echo '</li>
	<li>Html: ';
		echo LR\Filters::escapeXml($el) /* line %d% */;
		echo '</li>
</ul>

<style type="text/css">
<!--
#';
		echo LR\Filters::escapeHtmlComment($id) /* line %d% */;
		echo ' {
	background: blue;
}
-->
</style>


<script>
<!--
var html = ';
		echo LR\Filters::escapeHtmlComment($el) /* line %d% */;
		echo ';
-->
</script>


<p onclick =
\'alert(';
		echo LR\Filters::escapeXml($id) /* line %d% */;
		echo ');alert("hello");\'
 title=\'';
		echo LR\Filters::escapeXml($id) /* line %d% */;
		echo '"\'
 style =
 "color:';
		echo LR\Filters::escapeXml($id) /* line %d% */;
		echo ';\'"
 alt=\'';
		echo LR\Filters::escapeXml($el) /* line %d% */;
		echo '\'
 onfocus="alert(';
		echo LR\Filters::escapeXml($el) /* line %d% */;
		echo ')"
>click on me</p>


<!-- ';
		echo LR\Filters::escapeHtmlComment($comment) /* line %d% */;
		echo ' -->


</ul>


<ul>
';
		$iterations = 0;
		foreach ($people as $person) /* line %d% */ {
			echo '	<li>';
			echo LR\Filters::escapeXml($person) /* line %d% */;
			echo '</li>
';
			$iterations++;
		}
		echo '</ul>

';
		if (true) /* line %d% */ {
			echo '<p>
	<div><p>true</div>
</p>
';
		}
		echo '
<input/> <input />

<p val = ';
		if (true) /* line %d% */ {
			echo '"a"';
		} else /* line %d% */ {
			echo '"b"';
		}
		echo '> </p>

<p val = ';
		echo LR\Filters::escapeXmlAttrUnquoted($xss) /* line %d% */;
		echo ' val2=';
		echo LR\Filters::escapeXmlAttrUnquoted($mxss) /* line %d% */;
		echo '> </p>

<p onclick = ';
		echo LR\Filters::escapeXmlAttrUnquoted($xss) /* line %d% */;
		echo '> </p>

<p val = />';
		echo LR\Filters::escapeXml($xss) /* line %d% */;
		echo '</p>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['person' => '50'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}

	}

}
