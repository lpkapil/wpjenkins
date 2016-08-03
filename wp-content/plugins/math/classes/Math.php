<?php

/**
 * Math API
 *
 * @author kapil
 */
class Math {

    /**
     * Class constructor
     * 
     * @since   1.0
     */
    private $version, $prefix;

    public function __construct() {

        $this->version = '1.0';
        $this->prefix = 'math';

        add_action('init', array($this, 'mathAdd'));
    }

    /**
     * Get Addition 
     * 
     * @Method mathAdd
     * 
     * @return INT32
     * 
     * @since   1.0
     */
    public function mathAdd($a = 0, $b = 0) {
        return $a + $b;
    }

    /**
     * Get Substraction 
     * 
     * @Method mathSubstration
     * 
     * @return INT32
     * 
     * @since   1.0
     */
    public function mathSubstration($a = 0, $b = 0) {
        return $a - $b;
    }

    /**
     * Get Multiplication
     * 
     * @Method mathMultiply
     * 
     * @return INT32
     * 
     * @since   1.0
     */
    public function mathMultiply($a = 0, $b = 0) {
        return $a * $b;
    }

    /**
     * Get Devision
     * 
     * @Method mathDivision
     * 
     * @return INT32
     * 
     * @since   1.0
     */
    public function mathDivision($a = 0, $b = 0) {

        //Devide by zero
        if ($b == 0) {
            return false;
        }

        return $a / $b;
    }

}
