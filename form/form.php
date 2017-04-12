<?php

class Form {

    private $data = [];
    public $surround = 'p';

    // constructeur
    public function __construct($data = array()) {
        $this->data = $data;
    }

    // fonction pour entrourer nos balise input d'une autre balise, 'p' pour notre exemple.
    private function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    // récupérer la valeur de l'index souhaité
    private function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    // fonction pour créer nos input
    // getValue() nous sert à récupérer la valeur de l'index afin d'afficher cette valeur en préremplissant le champ, et rien, si rien n'a été précisé dans la vue.
    public function input($name) {
        return $this->surround(
            '<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">'
        );
    }

    // fonction pour créer notre boutton submit
    public function submit() {
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}
