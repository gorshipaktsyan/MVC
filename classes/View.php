<?php


class View
{
    protected $data = [];  // 'items' => []

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function render($template)
    {

        foreach ($this->data as $key => $val) {
            $$key = $val;
        }

        ob_start();
        include __DIR__ . '/../views/' . $template;
        $content = ob_get_contents();
        ob_end_clean();

        return $content;

    }


}

