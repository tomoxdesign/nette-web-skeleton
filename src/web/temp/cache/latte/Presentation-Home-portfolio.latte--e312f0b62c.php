<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home\portfolio.latte */
final class Template_e312f0b62c extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home\\portfolio.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '
    <section id="portfolio">
    <div class="max-w-7xl mx-auto px-6 md:px-10 py-16 text-left">
        <div class="animation-element fade-in-right space-y-6">
        <h2 class="text-5xl">
            Náhled na <span class="text-highlight">projekty</span>
        </h2>
        <p>
            Podívejte se na vybrané projekty, na kterých jsem pracoval s důrazem na detail, estetiku a
            funkčnost. Každý z nich je důkazem toho, že poctivý přístup, kreativita a dobrý dialog s
            klientem vedou k výsledku, který má smysl.
            Ať už šlo o menší osobní značky nebo rozsáhlejší webové prezentace, do každého designu jsem
            vložil maximum – stejně jako to udělám pro vás.
        </p>

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-[1200px] mx-auto">
            <!-- card -->
            <div class="card-16-9 card-1" style="background-image: url(\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($basePath)) /* line 19 */;
		echo '/assets/images/clients/veselsky-gyros/veselsky-gyros-bg.jpg\');">
                <div class="overlay"></div>
                <div class="relative z-10 flex flex-col justify-between items-start h-full p-4">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */;
		echo '/assets/images/clients/veselsky-gyros/logo-dark.svg" alt="Logo" class="logo" />
                    <p class="description">
                    Vytvoření nového loga a moderní responzivní webové stránky pro lokální podnik Veselský Gyros.
                    </p>
                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:previewVeselskyGyros')) /* line 26 */;
		echo '" class="btn mt-auto">ZOBRAZIT</a>
                </div>
            </div>

            <!-- card -->
            <div class="card-16-9 card-2" style="background-image: url(\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($basePath)) /* line 31 */;
		echo '/assets/images/background/section/bg-2.jpg\');">
                <div class="overlay"></div>
                <div class="relative z-10 flex flex-col justify-between items-start h-full p-4">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 34 */;
		echo '/assets/images/placeholder/logoipsum_light.svg" alt="Logo" class="logo" />
                    <p class="description">
                    Redesign webu, přizpůsobení na mobil a přidání interaktivních funkcí.
                    </p>
                    <a href="#" class="btn mt-auto">ZOBRAZIT</a>
                </div>
            </div>
            <!-- card - moznost zmenit card-#num, je definovane 1-6 -->




        </div>
        </div>
    </div>
    </section>';
	}
}
