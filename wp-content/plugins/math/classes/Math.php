<?php

/**
 * Main Math Class
 * 
 * PHP version 5.6
 * 
 * @category Class
 * @package  Math
 * @author   Kapil Yadav <lpkapil@gmail.com>
 * @license  open source
 * @version  GIT: https://github.com/lpkapil/wpjenkins
 * @link     https://github.com/lpkapil/wpjenkins
 */

namespace Math;

/**
 * Math Class Doc Comment
 *
 * @category Class
 * @package  Math
 * @author   Kapil Yadav <lpkapil@gmail.com>
 * @license  open source
 * @version  Release: prod_1.01
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
    private $_version;
    private $_prefix;

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
     * @param integer $num1 parameter 1 
     * @param integer $num2 parameter 2
     * 
     * @Method mathAdd
     * @return INT32
     * @since   1.0
     */
    public function mathAdd($num1 = 0, $num2 = 0)
    {
        return $num1 + $num2;
    }

    /**
     * Get Substraction 
     * 
     * @param integer $num1 parameter 1 
     * @param integer $num2 parameter 2
     * 
     * @Method mathSubstration
     * @return INT32
     * @since   1.0
     */
    public function mathSubstration($num1 = 0, $num2 = 0)
    {
        return $num1 - $num2;
    }

    /**
     * Get Multiplication
     * 
     * @param integer $num1 parameter 1 
     * @param integer $num2 parameter 2
     * 
     * @Method mathMultiply
     * @return INT32
     * @since   1.0
     */
    public function mathMultiply($num1 = 0, $num2 = 0)
    {
        return $num1 * $num2;
    }

    /**
     * Get Devision
     * 
     * @param integer $num1 parameter 1 
     * @param integer $num2 parameter 2
     * 
     * @Method mathDivision
     * @return INT32
     * @since   1.0
     */
    public function mathDivision($num1 = 0, $num2 = 0)
    {

        //Devide by zero
        if ($num2 == 0) {
            return false;
        }

        return $num1 / $num2;
    }
}
