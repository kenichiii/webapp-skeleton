<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{

	public function main(): array
	{
%A%
		echo "\n";
		$iterations = 0;
		foreach ($iterator = $ʟ_it = new LR\CachingIterator($people, $ʟ_it ?? null) as $person) /* line 2 */ {
			echo '	';
			if ($iterator->isFirst()) /* line 3 */ {
				echo '(';
			}
			echo ' ';
			echo LR\Filters::escapeHtmlText($person) /* line 3 */;
			if (!$iterator->isLast()) /* line 3 */ {
				echo ', ';
			}
			echo ' ';
			if ($iterator->isLast()) /* line 3 */ {
				echo ')';
			}
			echo "\n";
			$iterations++;
		}
		$iterator = $ʟ_it = $ʟ_it->getParent();
		echo '

';
		$iterations = 0;
		foreach ($iterator = $ʟ_it = new LR\CachingIterator($people, $ʟ_it ?? null) as $person) /* line 7 */ {
			echo '	';
			if ($iterator->isFirst()) /* line 8 */ {
				echo '(';
			} else /* line 8 */ {
				echo '[';
			}
			echo ' ';
			echo LR\Filters::escapeHtmlText($person) /* line 8 */;
			if (!$iterator->isLast()) /* line 8 */ {
				echo ', ';
			} else /* line 8 */ {
				echo ';';
			}
			echo ' ';
			if ($iterator->isLast()) /* line 8 */ {
				echo ')';
			} else /* line 8 */ {
				echo ']';
			}
			echo "\n";
			$iterations++;
		}
		$iterator = $ʟ_it = $ʟ_it->getParent();
		echo '

';
		$iterations = 0;
		foreach ($iterator = $ʟ_it = new LR\CachingIterator($people, $ʟ_it ?? null) as $person) /* line 12 */ {
			echo '	';
			if ($iterator->isFirst(2)) /* line 13 */ {
				echo '(';
			}
			echo ' ';
			echo LR\Filters::escapeHtmlText($person) /* line 13 */;
			if (!$iterator->isLast(2)) /* line 13 */ {
				echo ', ';
			}
			echo ' ';
			if ($iterator->isLast(2)) /* line 13 */ {
				echo ')';
			}
			echo "\n";
			$iterations++;
		}
		$iterator = $ʟ_it = $ʟ_it->getParent();
		echo '

';
		$iterations = 0;
		foreach ($iterator = $ʟ_it = new LR\CachingIterator($people, $ʟ_it ?? null) as $person) /* line 17 */ {
			echo '	';
			if ($iterator->isFirst(1)) /* line 18 */ {
				echo '(';
			}
			echo ' ';
			echo LR\Filters::escapeHtmlText($person) /* line 18 */;
			if (!$iterator->isLast(1)) /* line 18 */ {
				echo ', ';
			}
			echo ' ';
			if ($iterator->isLast(1)) /* line 18 */ {
				echo ')';
			}
			echo "\n";
			$iterations++;
		}
		$iterator = $ʟ_it = $ʟ_it->getParent();
		echo '

';
		$iterations = 0;
		foreach ($iterator = $ʟ_it = new LR\CachingIterator($people, $ʟ_it ?? null) as $person) /* line 22 */ {
			if ($iterator->isFirst(0)) /* line 23 */ {
				echo '	<span>(</span>';
			}
			echo ' ';
			echo LR\Filters::escapeHtmlText($person) /* line 23 */;
			if (!$iterator->isLast()) /* line 23 */ {
				echo '<span>, </span>';
			}
			echo ' ';
			if ($iterator->isLast()) /* line 23 */ {
				echo '<span>)</span>
';
			}
			$iterations++;
		}
		$iterator = $ʟ_it = $ʟ_it->getParent();
%A%
	}


	public function prepare(): void
	{
%A%
	}

}
