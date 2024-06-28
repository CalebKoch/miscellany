<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteConfirm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $target,
        public null|string $size = null,
        public null|string $text = null,
        public null|string $css = null,
        public bool $iconOnly = false,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.delete-confirm');
    }
}
