<?php

declare(strict_types=1);

namespace App\Presentation\Home;

use Nette\Application\UI\Presenter;

final class HomePresenter extends Presenter
{
    /** @persistent */
    public string $locale = 'cs';

    public function startup(): void
    {
        parent::startup();

        $locale = $this->getParameter('locale', 'cs');
        // Přepíšeme locale jen pokud je 'en', jinak cs
        $this->locale = $locale === 'en' ? 'en' : 'cs';
        $this->template->locale = $this->locale;

        if ($this->locale === 'en') {
            // Layout v Home/en/
            $this->setLayout('Home/en/@layout');

            $view = $this->getView();
            if ($view !== 'preview') {
                // Views ve složce Home/en/
                $this->setView('en/' . $view);
            }

        } else {
            // Layout v Home/
            $this->setLayout('Home/@layout');

            $view = $this->getView();
            if ($view !== 'preview') {
                // Views ve složce Home/
                $this->setView($view);
            }
        }
    }

    public function actionDefault(): void
    {
        $this->template->bodyParams = 'id="home"';
    }

    public function renderPreview(string $id): void
    {
        if ($this->locale === 'en') {
            $this->setView('en/preview' . ucfirst($id));
        } else {
            $this->setView('preview' . ucfirst($id));
        }
        $this->template->bodyParams = 'class="no-bg"';
    }
}
