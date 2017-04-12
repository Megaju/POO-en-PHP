<?php
/**
 * Class Text
 */
class Text {

    /**
     * @var string Suffixe euro
     */
    private static $suffix = " €";

    /**
     * @var string Juste pour montrer ce qu'est une constante
     */
     const CENTS = " cents";

    /**
     * @param $int int Ajoute un 0 si chiffre inférieur à 10
     * @return string
     */
    public static function withZero($int) {
        if ($int < 10) {
            return '0' . $int . self::$suffix . self::CENTS;
        } else {
            return $int . self::$suffix . self::CENTS;
        }
    }

}
