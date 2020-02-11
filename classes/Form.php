<?php

class Form
{
    private $method = "post";
    private $url;
    private $uploadFile = false;
    private $iniFile;

    public function __construct(string $action, string $file)
    {
        $this->url = $action;
        $this->iniFile = parse_ini_file("./conf/$file.ini", true);
    }



    public function wesh() // Provisoire
    {
        var_dump($this->iniFile);
    }

    public function beginHtml($titre): string
    {
        $html = '<!DOCTYPE html>';
        $html .= '<head>';
        $html .= '<meta charset="utf-8" />';
        $html .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $html .= '<title>' . $titre . '</title>';
        $html .= '<link rel="stylesheet" href="./assets/css/style.css" />';
        $html .= '</head>';
        $html .= '<body>';

        return $html;
    }

    public function endHtml(): string
    {
        $html = '</body>';
        $html .= '</html>';
        return $html;
    }

    public function displayForm(): string
    {
        $html = '<form ';
        $html .= 'method="' . $this->method . '" ';
        $html .= 'action="' . $this->url . '"';
        if ($this->uploadFile) {
            $html .= ' enctype="multipart/form-data"';
        }
        $html .= '>';

        foreach ($this->iniFile as $key => $value) {
            $typeBalise = explode(":", $key);

            if ($typeBalise[0] === "input") {
                if (isset($this->iniFile[$key]['labelContent'])) {
                    $html .= '<div>';
                    $html .= '<label for="' .
                        $typeBalise[1] . '">' .
                        ucfirst($typeBalise[1]) . " " .
                        '</label>';
                }

                if ($this->iniFile[$key]['type'] === 'submit' || $this->iniFile[$key]['type'] === 'reset') {
                    $html .= '<input type="' . $this->iniFile[$key]['type'] . '" ' .
                            'value="' . $this->iniFile[$key]['value'] . '" />';
                }

                else {


                    $html .= '<input type="' .
                        $this->iniFile[$key]['type'] . '" ' .
                        'id="' . $typeBalise[1] . '" ' .
                        'name="' . $typeBalise[1] . '" ' .
                        'placeholder="Veuillez saisir votre ' . $typeBalise[1] . '"' .
                        ' />';

                    $html .= '</div>';
                }
            }
        }

        $html .= "</form>";
        return $html;
    }
}
