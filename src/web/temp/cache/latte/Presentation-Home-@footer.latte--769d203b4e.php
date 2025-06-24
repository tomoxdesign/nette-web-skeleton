<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\GitHub\Projects\HOME\nette-web-skeleton\src\web\app\Presentation\Home\@footer.latte */
final class Template_769d203b4e extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\GitHub\\Projects\\HOME\\nette-web-skeleton\\src\\web\\app\\Presentation\\Home\\@footer.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<footer class="mt-24 py-8 border-t border-gray-700 text-center text-gray-400 text-sm select-none">
  &copy; 2025 Tvorba webových stránek | Skeleton Design | Všechny práva vyhrazena
</footer>
';
	}
}
