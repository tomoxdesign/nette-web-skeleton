<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home\statistics.latte */
final class Template_fc40930964 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home\\statistics.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '
    <section id="statistics" class="animation-element fade-in-up  max-w-7xl mx-auto px-6 md:px-10 py-16">

    <h2 class="font-bebas mb-12 text-center">
        MOJE <span class="text-highlight">STATISTIKA</span>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- karta 1 -->
        <div class="stat-card p-6 rounded-lg shadow-lg text-center bg-gradient">
        <div class="counter text-5xl font-bebas font-bold mb-2" data-target="46">0</div>
        <div class="text-lg font-medium">spokojených zákazníků</div>
        </div>

        <!-- karta 2 -->
        <div class="stat-card p-6 rounded-lg shadow-lg text-center bg-gradient">
        <div class="counter text-5xl font-bebas font-bold mb-2" data-target="324">0</div>
        <div class="text-lg font-medium">dokončených projektů</div>
        </div>

        <!-- karta 3 -->
        <div class=" stat-card p-6 rounded-lg shadow-lg text-center bg-gradient">
        <div class="counter text-5xl font-bebas font-bold mb-2" data-target="21456">0</div>
        <div class="text-lg font-medium">zobrazení</div>
        </div>
    </div>
    </section>';
	}
}
