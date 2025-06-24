<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home\@layout.latte */
final class Template_6060bd8f33 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home\\@layout.latte';

	public const Blocks = [
		['title' => 'blockTitle', 'head' => 'blockHead', 'topbar' => 'blockTopbar', 'content' => 'blockContent', 'scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo '</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */;
		echo '/styles/tailwind.css" rel="stylesheet" />
  <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 13 */;
		echo '/styles/base.css" rel="stylesheet" />
  <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 14 */;
		echo '/styles/theme.css" rel="stylesheet" />
  <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */;
		echo '/styles/animations.css" rel="stylesheet" />
  <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */;
		echo '/styles/ham-menu.css" rel="stylesheet" />
  <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */;
		echo '/styles/ui-elelements.css" rel="stylesheet" />


';
		$this->renderBlock('head', get_defined_vars()) /* line 20 */;
		echo '</head>

<body>
  <button id="theme-toggle" 
    class="animation-element fade-in-right fixed bottom-4 right-4 z-50 rounded-full w-12 h-12 flex items-center justify-center text-2xl transition" aria-label="Toggle theme">
    <span id="theme-icon" class="material-icons"></span>
  </button>

';
		$this->createTemplate('@navigation.latte', $this->params, 'include')->renderToContentType('html') /* line 30 */;
		echo '
  <main class="flex-1">
';
		$this->renderBlock('topbar', get_defined_vars()) /* line 33 */;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 35 */;
		echo '  </main>

';
		$this->createTemplate('@footer.latte', $this->params, 'include')->renderToContentType('html') /* line 38 */;
		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 40 */;
		echo '
</body>
</html>
';
	}


	/** {block title} on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Tomáš Kyncl | Tvorba webových stránek a grafiky';
	}


	/** {block head} on line 20 */
	public function blockHead(array $ʟ_args): void
	{
	}


	/** {block topbar} on line 33 */
	public function blockTopbar(array $ʟ_args): void
	{
	}


	/** {block content} on line 35 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block scripts} on line 40 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 41 */;
		echo '/js/theme.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 42 */;
		echo '/js/hamMenu.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 43 */;
		echo '/js/smoothScroll.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 44 */;
		echo '/js/viewPortAnimations.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 45 */;
		echo '/js/animateCounter.js"></script>
';
	}
}
