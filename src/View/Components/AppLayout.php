<?php

namespace GIS\TailwindcssTheme\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $cssFile;

    public function __construct()
    {
        $this->cssFile = config("tailwindcss-theme.appCssFile");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tt::layouts.app', $this->getVariables());
    }

    protected function getVariables(): array
    {
        return [
            "baseClasses" => config("tailwindcss-theme.baseAppCoverLayoutClasses"),
            "htmlClasses" => config("tailwindcss-theme.baseAppHtmlLayoutClasses"),
        ];
    }
}
