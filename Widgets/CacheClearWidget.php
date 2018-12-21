<?php namespace Modules\Dashboard\Widgets;

use Modules\Dashboard\Foundation\Widgets\BaseWidget;

class CacheClearWidget extends BaseWidget
{
    protected function name()
    {
        return "CacheClearWidget";
    }

    protected function options()
    {
        return [
            'width' => '2',
            'height' => '2',
            'x' => '6',
        ];
    }

    protected function view()
    {
        return "dashboard::admin.widgets.cache-clear";
    }

    protected function data()
    {
        // TODO: Implement data() method.
    }

}