<?php

class Personnage {
    // attrivuts du personnage
    private $life = 100;
    private $life_max = 100;
    private $atk = 20;
    private $name;

    // constructeur
    public function __construct($name) {
        $this->name = $name;
    }

    // GETTEURS
    public function getLife() {
        return $this->life;
    }
    public function getLifeMax() {
        return $this->life_max;
    }
    public function getAtk() {
        return $this->atk;
    }
    public function getName() {
        return $this->name;
    }

    // SETTEURS
    public function setLife($life) {
        return $this->life = $life;
    }
    public function setLifeMax($life_max) {
        return $this->life_max = $life_max;
    }
    public function setAtk($atk) {
        return $this->atk = $atk;
    }
    public function setName($name) {
        return $this->name = $name;
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
                    <td>'.$this->getName().'</td>
                    <td>'.$this->getLifeMax().'</td>
                    <td>'.$this->getAtk().'</td>
                  </tr>
                </tbody>
              </table>';
    }

    // fonction pour régénérer de la vie
    public function regenerate($value) {
        // SI sa vie n'est pas au max
        // ALORS on l'augmente de 5PV
        if ($this->getLife() < $this->getLifeMax()) {
            echo '<p>Il reste '.$this->getLife() .' de vie sur '.$this->getLifeMax() .' à '.$this->getName() .'.</p>';

            setLife($this->getLife() += $value);

            echo '<p>'.$this->getName().' récupère '.$value.'PV.</p>';
            echo '<p>Il reste '.$this->getLife() .' de vie sur '.$this->getLifeMax() .' à '.$this->getName() .'.</p>';
            // SI la vie dépasse la vie max
            // ALORS on l'a rend égale à la vie max
            if ($this->getLife() > $this->getLifeMax() ) {
                setLife();
            }
        } else {
            // SINON on ne fait rien
            echo '<p>'.$this->getName() .' a déjà toute sa vie</p>';
        }
    }

    // tester si le personnage est mort
    public function death() {
        return $this->getLife() <= 0;
    }

    // empêcher de voir la vie descendre en-dessous de 0
    private function life_no_negatif() {
        if ($this->getLife() < 0) {
            // ERROR
            //getLife() = 0;
        }
    }

    // fonction d'attaque
    public function attack($target) {
        echo '<p>'.$this->getName() .' attaque '.$target->name.'</p>';

        // attaque
        $target->life -= $this->getAtk()  ;

        $target->life_no_negatif();

        // on vérifie si la cible est morte
        if ($target->death()) {
            echo '<p>'.$target->name.' est mort !</p>';
        } else {
            echo '<p>'.$target->name.' a survécu !</p>';
        }
    }

}
