<?php
%A%
		if (Nette\Bridges\CacheLatte\CacheMacro::createCache($this->global->cacheStorage, '%[\w]+%', $this->global->cacheStack)) /* line %d% */ try {
			echo '	';
			echo LR\Filters::escapeHtmlText(($this->filters->lower)($title)) /* line %d% */;
			echo "\n";
			Nette\Bridges\CacheLatte\CacheMacro::endCache($this->global->cacheStack) /* line %d% */;
		} catch (\Throwable $ʟ_e) {
			Nette\Bridges\CacheLatte\CacheMacro::rollback($this->global->cacheStack);
			throw $ʟ_e;
		}
%A%
