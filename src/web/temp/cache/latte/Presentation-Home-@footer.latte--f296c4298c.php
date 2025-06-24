<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home\@footer.latte */
final class Template_f296c4298c extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home\\@footer.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<footer class="animation-element fade-in-up max-w-7xl mx-auto px-6 pt-16 bg-gradient-to-br from-[#f0f4f8] to-[#d9e2ec] dark:from-[#1f1f1f] dark:to-[#2c2c2c]">
  <section id="contact" class="max-w-7xl mx-auto">
    <h2 class="font-bebas text-4xl sm:text-5xl mb-12 text-center">KONTAKT</h2>

    <div class="flex flex-col md:flex-row gap-12 items-start">
      <!-- Formulář -->
      <form action="#" method="post" class="flex-1 flex flex-col gap-4 text-left" novalidate>
        <label for="name" class="block font-semibold">Jméno</label>
        <input type="text" id="name" name="name" required
               class="w-full rounded-lg border border-gray-300 bg-bg-secondary-color px-4 py-2 shadow-sm transition focus:outline-none focus:ring-2 focus:ring-highlight-color focus:border-highlight-color dark:bg-gray-800 dark:border-gray-600" />

        <label for="email" class="block font-semibold">Email</label>
        <input type="email" id="email" name="email" required
               class="w-full rounded-lg border border-gray-300 bg-bg-secondary-color px-4 py-2 shadow-sm transition focus:outline-none focus:ring-2 focus:ring-highlight-color focus:border-highlight-color dark:bg-gray-800 dark:border-gray-600" />

        <label for="message" class="block font-semibold">Zpráva</label>
        <textarea id="message" name="message" rows="5" required
                  class="w-full rounded-lg border border-gray-300 bg-bg-secondary-color px-4 py-2 shadow-sm transition focus:outline-none focus:ring-2 focus:ring-highlight-color focus:border-highlight-color dark:bg-gray-800 dark:border-gray-600"></textarea>

        <button type="submit"
                class="mt-6 self-start bg-[#1f8b35] font-bebas text-xl px-10 py-3 rounded-full hover:bg-[#16692a] duration-300 cursor-pointer">
          Odeslat
        </button>
      </form>

      <!-- Kontaktni udaje -->
      <div class="flex-1 flex flex-col justify-start">
        <h3 class="font-bebas text-3xl mb-6">Kontaktní údaje</h3>
        <p class="mb-4 text-lg">
          <strong>Email:</strong><br />
          <a href="mailto:tomox.design@gmail.com" class="underline ">tomox.design@gmail.com</a>
        </p>
        <p class="mb-4 text-lg">
          <strong>Telefon:</strong><br />
          <a href="tel:+420720122877" class="underline ">+420 720 122 877</a>
        </p>
        <p class="mb-4 text-lg">
          <strong>Adresa:</strong><br />
          Chaloupky 575<br />
          Veselí nad Moravou 69801
        </p>
        <p class="mb-4 text-lg">
          <strong>IČO:</strong><br />
          09141553 
        </p>
      </div>
    </div>
  </section>

  <section id="legal" class="max-w-7xl mx-auto px-6 md:px-10 py-16 border-t border-gray-300 dark:border-gray-700 pt-8 text-sm">
    <div class="flex flex-row justify-between flex-wrap gap-8 text-center md:text-left">
      <!-- Sloupec 1: Zajímavé odkazy -->
      <div class="text-left">
        <h5 class="text-base font-semibold mb-2">Zajímavé odkazy</h5>
        <ul class="list-disc pl-5 space-y-2">
          <li><a href="#" class="">Často kladené otázky</a></li>
          <li><a href="#" class="">Jak probíhá spolupráce</a></li>
          <li><a href="#" class="">Ukázky před a po</a></li>
        </ul>
      </div>

      <!-- Sloupec 2: Informace -->
      <div class="text-left">
        <h5 class="text-base font-semibold mb-2">Informace</h5>
        <ul class="list-disc pl-5 space-y-2">
          <li><a href="#about" class="smooth-scroll-link ">O mně</a></li>
          <li><a href="#services" class="smooth-scroll-link ">Služby</a></li>
          <li><a href="#portfolio" class="smooth-scroll-link ">Portfolio</a></li>
          <li><a href="#contact" class="smooth-scroll-link ">Kontakt</a></li>
        </ul>
      </div>

      <!-- Sloupec 3: Právní informace -->
      <div class="text-left">
        <h5 class="text-base font-semibold mb-2">Právní informace</h5>
        <ul class="list-disc pl-5 space-y-2">
          <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:cookies')) /* line 77 */;
		echo '" class="">Zásady používání cookies</a></li>
          <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:privacy')) /* line 78 */;
		echo '" class="">Ochrana osobních údajů (GDPR)</a></li>
          <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:terms')) /* line 79 */;
		echo '" class="">Obchodní podmínky</a></li>
        </ul>
      </div>
    </div>

    <!-- Copyright -->
    <div class="mt-10 text-center text-xs text-gray-500">
      © 2025 Tomáš Kyncl | Weby a grafika. Všechna práva vyhrazena.
    </div>
  </section>
</footer>
';
	}
}
