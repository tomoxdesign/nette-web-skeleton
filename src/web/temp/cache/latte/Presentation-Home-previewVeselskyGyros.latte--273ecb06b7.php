<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home/previewVeselskyGyros.latte */
final class Template_273ecb06b7 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home/previewVeselskyGyros.latte';

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

		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '@layout.latte';
		return get_defined_vars();
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<section class="max-w-7xl mx-auto px-6 py-12 flex flex-col items-start gap-6">

  <!-- Nadpis sekce -->
  <h2 class="animation-element fade-in-left font-bebas uppercase tracking-wide leading-tight"><span class="text-highlight">Vytvoření</span> webu a loga</h2>

  <!-- Zákazník -->
  <div class="animation-element fade-in-right flex items-center gap-3">
    <span class="uppercase dark:text-gray-400 tracking-wide">Zákazník:</span>
    <span class="text-3xl font-semibold leading-tight">Veselský Gyros</span>
  </div>

  <!-- Logo -->
  <div class="animation-element fade-in-left flex items-center gap-4">
    <span class="uppercase text-gray-600 dark:text-gray-400 text-sm tracking-wide">Logo:</span>
    <div class="h-20  w-auto">
      <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */;
		echo '/assets/images/clients/veselsky-gyros/logo-light.svg" alt="Logo Veselský Gyros" class="h-20 w-auto object-contain" />
    </div>
    <div class="h-20  w-auto">
      <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */;
		echo '/assets/images/clients/veselsky-gyros/logo-dark.svg" alt="Logo Veselský Gyros" class="h-20 w-auto object-contain" />
    </div>
  </div>

<!-- Description text -->
<div class="mt-16 text-lg leading-relaxed">
  <p>
    Web pro <span class="text-highlight">Veselský Gyros</span> jsem navrhl a vytvořil kompletně na míru – od loga až po celkový redesign. Důraz jsem kladl na <span class="text-highlight">moderní vzhled</span>, přehlednost a <span class="text-highlight">příjemné ovládání</span> na všech typech zařízení.
  </p>
  <p class="mt-4">
    Výsledkem je <span class="text-highlight">responzivní prezentace</span>, která návštěvníkům srozumitelně představí nabídku, provoz i možnosti rozvozu. Pomocí přepínače si navíc můžete <span class="text-highlight">vyzkoušet zobrazení</span> na desktopu, tabletu i mobilu a vidět, jak se design přizpůsobuje konkrétní obrazovce.
  </p>
</div>




</section>
';
	}
}
