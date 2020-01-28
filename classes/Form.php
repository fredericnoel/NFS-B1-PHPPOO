<?php

class Form
{
    private $method = "post";
    private $url = "";
    private $uploadFile = false;

    public function displayForm() : string
    {
        $html = '<form ';
        $html .= 'method="' . $this->method .'" ';
        $html .= 'action="' . $this->url . '"';
        if (!$this->uploadFile) {
            $html .= ' enctype="multipart/form-data"';
        }
        $html .= '>';

        return $html;
    }
}