<?php

class Personnage {
    public $vieMax = 100;
    public $vie = 80;
    public $atk = 25;

    public function regenerer() {
        if ($this->vie < $this->vieMax)
        {
            echo '<p>vie inf à vieMax.</p>';
            echo '<p>' . $this->vie . ' sur ' . $this->vieMax . '</p>';
            echo '<p>La vie est augmenté de 10 points.</p>';
            $this->vie += 10;
            if ($this->vie > $this->vieMax) {
                $this->vie = $this->vieMax;
            }
            echo '<p>' . $this->vie . ' sur ' . $this->vieMax . '</p>';
        }
        else if ($this->vie > $this->vieMax)
        {
            echo '<p>vie déjà au max.';
            $this->vie = $this->vieMax;
            echo '<p>' . $this->vie . ' sur ' . $this->vieMax . '</p>';
        }
        else
        {
            echo '<p>vie déjà au max.';
            echo '<p>' . $this->vie . ' sur ' . $this->vieMax . '</p>';
        }
    }
}
