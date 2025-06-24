<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\GitHub\Projects\HOME\nette-web-skeleton\src\web\app\Presentation\Home\@layout.latte */
final class Template_324f346abf extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\GitHub\\Projects\\HOME\\nette-web-skeleton\\src\\web\\app\\Presentation\\Home\\@layout.latte';

	public const Blocks = [
		['title' => 'blockTitle', 'content' => 'blockContent'],
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
		$this->renderBlock('title', get_defined_vars()) /* line 6 */;
		echo '</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes gradientBG {
      0%, 100% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
    }
    .animated-bg {
      background: linear-gradient(270deg, #4f46e5, #3b82f6, #06b6d4, #4f46e5);
      background-size: 600% 600%;
      animation: gradientBG 12s ease infinite;
    }
  </style>
</head>
<body class="min-h-screen flex flex-col justify-between bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white font-sans">

';
		$this->createTemplate('@navigation.latte', $this->params, 'include')->renderToContentType('html') /* line 26 */;
		echo '
  <main class="flex-grow px-6 max-w-7xl mx-auto">
';
		$this->renderBlock('content', get_defined_vars()) /* line 29 */;
		echo '  </main>

';
		$this->createTemplate('@footer.latte', $this->params, 'include')->renderToContentType('html') /* line 32 */;
		echo '
</body>
</html>
';
	}


	/** {block title} on line 6 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Skeleton pro tvorbu webových stránek';
	}


	/** {block content} on line 29 */
	public function blockContent(array $ʟ_args): void
	{
	}
}
