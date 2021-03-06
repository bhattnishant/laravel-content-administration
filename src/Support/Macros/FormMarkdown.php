<?php

namespace Fjord\Support\Macros;

use Fjord\Crud\BaseForm;
use Fjord\Support\Facades\FjordApp;
use ParsedownExtra;

class FormMarkdown
{
    /**
     * Create new FormMarkdown instance.
     *
     * @return void
     */
    public function __construct()
    {
        BaseForm::macro('markdown', function (string $markup) {
            FjordApp::script(fjord()->url('js/prism.js'));

            $parsed = (new ParsedownExtra)->text($markup);

            return $this->component('fj-field-markdown')->prop('markdown', $parsed);
        });
    }
}
