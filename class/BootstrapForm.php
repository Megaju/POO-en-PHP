<?php
/**
 * Class BootstrapForm
 * Permet de créer des formulaires rapidement et simplement avec le style d'un formulaire Bootstrap.
 */
class BootstrapForm extends Form {
    /**
     * @param $html string Code html entouré
     * @return string
     */
    protected function surround($html) {
        return "<div class=\"form-group\">{$html}</div>";
    }
    /**
     * @param $name string
     * @return string
     */
    public function input($name) {
        return $this->surround(
            '<label>'.$name.'</label><input type="text" name="'.$name.'" value="'.$this->getValue($name).'" class="form-control">'
        );
    }
    /**
     * @return string
     */
    public function submit() {
        return $this->surround('<button class="btn btn-primary" type="submit">Envoyer</button>');
    }
}
