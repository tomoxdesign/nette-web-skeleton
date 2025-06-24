<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\tomox\Documents\TOMOX-DESIGN\xammp\htdocs\web\app\Presentation\Home\services.latte */
final class Template_bb39b83f8b extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\tomox\\Documents\\TOMOX-DESIGN\\xammp\\htdocs\\web\\app\\Presentation\\Home\\services.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '
<section id="services" class="services-section animation-element fade-in-up">
  <h2 class="services-title mb-12">
    MOJE <span class="text-highlight">SLUŽBY</span>
  </h2>

  <div class="services-cards">
    <!-- Karta 1 -->
    <div class="card">
      <div class="card-icon gradient-1">
        <span class="material-icons" style="font-size: 72px;">brush</span>
      </div>
      <div class="card-content">
        <h3>Grafický design</h3>
        <p>Vytvořím ti moderní a jedinečný vizuální styl, loga, letáky a další grafiku.</p>
      </div>
    </div>

    <!-- Karta 2 -->
    <div class="card">
      <div class="card-icon gradient-1">
        <span class="material-icons" style="font-size: 72px;">code</span>
      </div>
      <div class="card-content">
        <h3>Tvorba webu</h3>
        <p>Kvalitní webové stránky na míru s moderním designem a responzivním zobrazením.</p>
      </div>
    </div>

    <!-- Karta 3 -->
    <div class="card">
      <div class="card-icon gradient-1">
        <span class="material-icons" style="font-size: 72px;">construction</span>
      </div>
      <div class="card-content">
        <h3>Údržba webu</h3>
        <p>Pravidelná aktualizace a bezpečnost tvého webu, zálohy a rychlé opravy.</p>
      </div>
    </div>

    <!-- Karta 4 -->
    <div class="card">
      <div class="card-icon gradient-1">
        <span class="material-icons" style="font-size: 72px;">campaign</span>
      </div>
      <div class="card-content">
        <h3>Marketing</h3>
        <p>Pomůžu ti s propagací a strategií pro růst tvého podnikání.</p>
      </div>
    </div>

    <!-- Karta 5 -->
    <div class="card">
      <div class="card-icon gradient-1">
        <span class="material-icons" style="font-size: 72px;">handshake</span>
      </div>
      <div class="card-content">
        <h3>Konzultace</h3>
        <p>Poradím ti s designem, technologií i obchodním směřováním.</p>
      </div>
    </div>

    <!-- Karta 6 -->
    <div class="card">
      <div class="card-icon gradient-1">
        <span class="material-icons" style="font-size: 72px;">support_agent</span>
      </div>
      <div class="card-content">
        <h3>Podpora</h3>
        <p>Rychlá a spolehlivá podpora pro tvůj web nebo projekt.</p>
      </div>
    </div>
  </div>
</section>';
	}
}
