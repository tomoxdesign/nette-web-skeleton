<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home\aboutMe.latte */
final class Template_81b0344c93 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home\\aboutMe.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '
    <section id="about">
    <div class="max-w-7xl mx-auto px-6 md:px-10 py-16 lg:grid lg:grid-cols-2 lg:gap-16 lg:px-6 items-center">
        <div class="animation-element fade-in-left space-y-6">
        <h2 class="text-5xl">Něco málo <span class="text-highlight">o mě</span></h2>
        <em class="block text-lg italic max-w-prose text-highlight">"Za každým pixelem je příběh. Ten můj začíná u zvědavosti a touhy tvořit."</em>
        <p>
            Určitě si říkáte, kdo jsem... Jsem Tomáš Kyncl, nadšenec do IT, grafik, technická podpora, tvůrce webů a další. Už na škole mě lákalo kreslení a vytváření drobné grafiky na mém starém notebooku.
        </p>
        <p>
            Jednoho dne jsem si řekl, že by bylo skvělé se v této oblasti dál vzdělávat. Jako samouk jsem se naučil tvořit webové stránky a programovat. Trvalo to spoustu hodin, dní a nocí, ale nikdy jsem nepřestal věřit v to, co dělám.
        </p>
        </div>
        <div class="animation-element fade-in-right grid grid-cols-2 gap-6 mt-10 lg:mt-0">
        <img class="w-full rounded-lg" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */;
		echo '/assets/images/background/section/portret.jpg" alt="fotka Tomáš Kyncl" />
        <img class="w-full rounded-lg mt-6 lg:mt-12" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */;
		echo '/assets/images/background/section/portret.jpg" alt="fotka Tomáš Kyncl" />
        </div>
    </div>
    </section>';
	}
}
