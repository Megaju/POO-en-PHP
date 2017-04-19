<?php
namespace Megaju;

class MarvelHero extends Personnage {

    const UNIVERS = "Marvel";
    protected $life = 50;
    protected $life_max = 50;
    protected $atk = 25;
    public $arc = 3;

    // fonction d'attaque
    public function attack($target) {
        echo '<p>'.$this->name.' attaque '.$target->name.'</p>';
        // attaque
        $target->life -= 2 * $this->atk;
        $target->life_no_negatif();
        // on vérifie si la cible est morte
        if ($target->death()) {
            echo '<p>'.$target->name.' est mort !</p>';
        } else {
            echo '<p>'.$target->name.' a survécu !</p>';
        }
    }

}
