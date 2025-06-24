<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home/default.latte */
final class Template_6dca85f07d extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home/default.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo ' 
';
		$this->renderBlock('content', get_defined_vars()) /* line 4 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '@layout.latte';
		return get_defined_vars();
	}


	/** {block content} on line 4 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '  <!-- Hero sekce -->
  <section class="min-h-screen flex items-center px-6 md:px-10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-12">
      <div class="animation-element fade-in-left">
        <h1 class="text-5xl md:text-6xl mb-6 leading-tight font-bebas text-red-500">
          Nechte za sebe mluvit <span class="text-highlight">GRAFIKU</span>
        </h1>
        <p>
          Každá značka má co říct světu. Rád pomohu té vaší najít vlastní hlas.
          Ať už formou čistého webu, odvážné grafiky nebo silné vizuální identity – spolu vytvoříme něco, co bude mluvit za vás.
        </p>
        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 16 */;
		echo '#contact" class="smooth-scroll-link btn-animated-gradient inline-block px-6 py-3 mt-6 rounded shadow-md text-lg">
          Chci konzultaci zdarma
        </a>
      </div>
      <div class="animation-element fade-in-right flex justify-center">
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */;
		echo '/assets/images/illustrations/elements/notebook.svg" alt="Notebook" class="w-full max-w-md floating-image" />
      </div>
    </div>
</section>

';
		$this->createTemplate('statistics.latte', $this->params, 'include')->renderToContentType('html') /* line 26 */;
		$this->createTemplate('aboutMe.latte', $this->params, 'include')->renderToContentType('html') /* line 27 */;
		$this->createTemplate('services.latte', $this->params, 'include')->renderToContentType('html') /* line 28 */;
		$this->createTemplate('portfolio.latte', $this->params, 'include')->renderToContentType('html') /* line 29 */;
	}
}
