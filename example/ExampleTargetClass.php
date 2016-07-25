<?php

class ExampleTargetClass
{
    protected $lang;

    public function current()
    {
        return $this->lang;
    }

    public function force($lang)
    {
        $this->lang = $lang;
    }
}
