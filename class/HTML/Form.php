<?php
namespace Megaju\HTML;
/**
 * Class Form
 * Permet de créer des formulaires rapidement et simplement
 */
class Form {
    /**
     * @var array Données utilisés par le formulaire
     */
    private $data = [];

    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array Données utilisés par le formulaire
     */
    public function __construct($data = array()) {
        $this->data = $data;
    }

    /**
     * @param $html string Code html entouré
     * @return string
     */
    protected function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index string Index de la valeur à récupérer
     * @return string
     */
    protected function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name) {
        return $this->surround(
            '<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">'
        );
    }

    /**
     * @return string
     */
    public function submit() {
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}
