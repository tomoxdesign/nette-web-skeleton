<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home\@navigation.latte */
final class Template_637f4359fb extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home\\@navigation.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<nav class="animation-element fade-in-down sticky top-0 z-50 px-4 sm:px-6 md:px-8 py-3">
  <div id="nav-wrapper" class="bg-nav max-w-7xl mx-auto shadow-md rounded-md px-4 py-3 flex justify-between items-center flex-wrap gap-4 transition-colors duration-300">
    <div class="flex items-center gap-3">
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 5 */;
		echo '" class="flex items-center gap-3">
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */;
		echo '/assets/images/logo.svg" alt="Logo" class="h-8 w-8" />
        <div class="text-2xl tracking-wide font-bebas">Tomáš Kyncl</div>
      </a>
    </div>

    <button id="menu-toggle" class="md:hidden text-3xl" aria-label="Toggle menu" aria-expanded="false">
      <span class="material-icons" id="menu-icon">menu</span>
    </button>

    <div id="menu" class="w-full md:w-auto hidden flex-col md:flex md:flex-row md:items-center md:justify-end gap-4 md:gap-6 mt-4 md:mt-0">
      <ul class="flex flex-col md:flex-row gap-4 text-lg font-bebas items-center">
        <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 17 */;
		echo '#about" class="smooth-scroll-link">O mně</a></li>
        <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 18 */;
		echo '#services" class="smooth-scroll-link">Služby</a></li>
        <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 19 */;
		echo '#portfolio" class="smooth-scroll-link">Portfolio</a></li>
        <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 20 */;
		echo '#contact" class="smooth-scroll-link">Kontakt</a></li>
        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 21 */;
		echo '#contact" class="btn-animated-gradient px-5 py-2 rounded shadow-md text-lg whitespace-nowrap smooth-scroll-link">
            Chci konzultaci
        </a>
      </ul>
    </div>
  </div>
</nav>
';
	}
}
