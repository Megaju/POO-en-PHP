<?php

class Personnage {
    // attrivuts du personnage
    public $life = 100;
    public $life_max = 100;
    public $atk = 20;
    public $name;

    // constructeur
    public function __construct($name) {
        $this->name = $name;
    }

    // description du personnage dans une table
    public function description() {
        echo '<table>
                <caption>Fiche technique</caption>
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Vie</th>
                    <th>Attaque</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>'.$this->name.'</td>
                    <td>'.$this->life_max.'</td>
                    <td>'.$this->atk.'</td>
                  </tr>
                </tbody>
              </table>';
    }

    // fonction pour régénérer de la vie
    public function regenerate($value) {
        // SI sa vie n'est pas au max
        // ALORS on l'augmente de 5PV
        if ($this->life < $this->life_max) {
            echo '<p>Il reste '.$this->life.' de vie sur '.$this->life_max.' à '.$this->name.'.</p>';
            $this->life += $value;
            echo '<p>'.$this->name.' récupère '.$value.'PV.</p>';
            echo '<p>Il reste '.$this->life.' de vie sur '.$this->life_max.' à '.$this->name.'.</p>';
            // SI la vie dépasse la vie max
            // ALORS on l'a rend égale à la vie max
            if ($this->life > $this->life_max) {
                $this->life = $this->life_max;
            }
        } else {
            // SINON on ne fait rien
            echo '<p>'.$this->name.' a déjà toute sa vie</p>';
        }
    }

    // tester si le personnage est mort
    public function death() {
        return $this->life <= 0;
    }

    // empêcher de voir la vie descendre en-dessous de 0
    private function life_no_negatif() {
        if ($this->life < 0) {
            $this->life = 0;
        }
    }

    // fonction d'attaque
    public function attack($target) {
        echo '<p>'.$this->name.' attaque '.$target->name.'</p>';

        // attaque
        $target->life -= $this->atk;

        $target->life_no_negatif();

        // on vérifie si la cible est morte
        if ($target->death()) {
            echo '<p>'.$target->name.' est mort !</p>';
        } else {
            echo '<p>'.$target->name.' a survécu !</p>';
        }
    }

}
