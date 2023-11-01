<?php

namespace App\Renderers\Layouts\Columns;

use App\Models\MiscModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * Column for the datagrid2 rendering
 */
abstract class Column
{
    /** @var Model|MiscModel */
    protected $model;

    /** @var array */
    protected $config;

    /**
     */
    public function __construct(Model $model, array $config)
    {
        $this->model = $model;
        $this->config = $config;
    }

    /**
     */
    public function __toString(): string
    {
        return '';
    }

    /**
     */
    public function css(): string|null
    {
        $default = null;
        if (Arr::get($this->config, 'render') === Standard::IMAGE) {
            $default = 'avatar w-14';
        }
        if (empty($this->config['class'])) {
            return $default;
        }

        return (string) $this->config['class'];
    }
}
