<?php

/**
 * PHP version 5
 * Main Math Class
 *
 * @category Class
 * @package  Math
 * @author   Kapil Yadav <lpkapil@gmail.com>
 * @license  open source
 * @version  GIT: https://github.com/lpkapil/wpjenkins
 * @link     https://github.com/lpkapil/wpjenkins
 */

/**
 * Math Class Doc Comment
 *
 * @category Class
 * @package  Math
 * @author   Kapil Yadav <lpkapil@gmail.com>
 * @license  open source
 * @version  Release: prod_1.0
 * @link     https://github.com/lpkapil/wpjenkins
 *
 */
class Math
{

    /**
     * Class member variables
     * 
     * @since   1.0
     */
    private $_version, $_prefix;

    /**
     * Class constructor
     * 
     * @since 1.0
     */
    public function __construct()
    {

        $this->_version = '1.0';
        $this->_prefix = 'math';
    }

    /**
     * Get Addition 
     * 
     * @param integer $a parameter 1 
     * @param integer $b parameter 2
     * 
     * @Method mathAdd
     * @return INT32
     * @since   1.0
     */
    public function mathAdd($a = 0, $b = 0)
    {
        return $a + $b;
    }

    /**
     * Get Substraction 
     * 
     * @param integer $a parameter 1 
     * @param integer $b parameter 2
     * 
     * @Method mathSubstration
     * @return INT32
     * @since   1.0
     */
    public function mathSubstration($a = 0, $b = 0)
    {
        return $a - $b;
    }

    /**
     * Get Multiplication
     * 
     * @param integer $a parameter 1 
     * @param integer $b parameter 2
     * 
     * @Method mathMultiply
     * @return INT32
     * @since   1.0
     */
    public function mathMultiply($a = 0, $b = 0)
    {
        return $a * $b;
    }

    /**
     * Get Devision
     * 
     * @param integer $a parameter 1 
     * @param integer $b parameter 2
     * 
     * @Method mathDivision
     * @return INT32
     * @since   1.0
     */
    public function mathDivision($a = 0, $b = 0)
    {

        //Devide by zero
        if ($b == 0) {
            return false;
        }

        return $a / $b;
    }

}
