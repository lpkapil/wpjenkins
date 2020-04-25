<?php

/**
 * Math Test Class
 * 
 * PHP version 5.6
 * 
 * @category Class
 * @package  MathTest
 * @author   Kapil Yadav <lpkapil@gmail.com>
 * @license  open source
 * @version  GIT: https://github.com/lpkapil/wpjenkins
 * @link     https://github.com/lpkapil/wpjenkins
 */

namespace Plugin;

/**
 * Math Test Class Doc Comment
 *
 * @category Class
 * @package  MathTest
 * @author   Kapil Yadav <lpkapil@gmail.com>
 * @license  open source
 * @version  Release: prod_1.01
 * @link     https://github.com/lpkapil/wpjenkins
 *
 */

class MathTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var object
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     * 
     * @return void
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Math\Math;
    }

    /**
     * Test matAdd Method
     * 
     * @param integer $number1  parameter 1 
     * @param integer $number2  parameter 2
     * @param integer $expected Expected output
     * 
     * @covers Math::mathAdd
     * @dataProvider mathAddDataProvider
     * @return boolean
     */
    public function testMathAdd($number1, $number2, $expected)
    {
        $this->assertEquals(
            $expected,
            $this->object->mathAdd($number1, $number2),
            "Add " . $number1 . " and " . $number2 . " did not return " . $expected
        );
    }

    /**
     * mathAdd Data Provider
     * 
     * @return array
     * @since   1.0
     */
    public function mathAddDataProvider()
    {
        return array(
            array(
                2, 3, 'expected' => 5
            ),
            array(
                7, 5, 'expected' => 12
            ),
            array(
                4, -3, 'expected' => 1
            )
        );
    }

    /**
     * Test mathSubsctration
     * 
     * @param integer $number1  parameter 1 
     * @param integer $number2  parameter 2
     * @param integer $expected Expected output
     * 
     * @covers Math::mathSubstration
     * @dataProvider mathSubstrationDataProvider
     * @return boolean
     */
    public function testMathSubstration($number1, $number2, $expected)
    {
        $this->assertEquals(
            $expected,
            $this->object->mathSubstration($number1, $number2),
            "Sub " . $number1 . " and " . $number2 . " did not return " . $expected
        );
    }

    /**
     * mathSubstration Data Provider
     * 
     * @return array
     * @since   1.0
     */
    public function mathSubstrationDataProvider()
    {
        return array(
            array(
                2, 3, 'expected' => -1
            ),
            array(
                7, 5, 'expected' => 2
            ),
            array(
                4, -3, 'expected' => 7
            )
        );
    }

    /** Test mathMultiply
     * 
     * @param integer $number1  parameter 1 
     * @param integer $number2  parameter 2
     * @param integer $expected Expected output
     * 
     * @covers Math::mathMultiply
     * @dataProvider mathMultiplyDataProvider
     * @return boolean
     */
    public function testMathMultiply($number1, $number2, $expected)
    {
        $this->assertEquals(
            $expected,
            $this->object->mathMultiply($number1, $number2),
            "Multi " . $number1 . " and " . $number2 . " did not return " . $expected
        );
    }

    /**
     * mathMultiply Data Provider
     * 
     * @return array
     * @since   1.0
     */
    public function mathMultiplyDataProvider()
    {
        return array(
            array(
                2, 3, 'expected' => 6
            ),
            array(
                7, -5, 'expected' => -35
            ),
            array(
                0, 1, 'expected' => 0
            )
        );
    }
    
    /**
     * Test mathDivision
     * 
     * @param integer $number1  parameter 1 
     * @param integer $number2  parameter 2
     * @param integer $expected Expected output
     * 
     * @covers Math::mathDivision
     * @dataProvider mathDivisionDataProvider
     * @return boolean
     */
    public function testMathDivision($number1, $number2, $expected)
    {
        $this->assertEquals(
            $expected,
            $this->object->mathDivision($number1, $number2),
            "Div " . $number1 . " and " . $number2 . " did not return " . $expected
        );
    }

    /**
     * mathDivision Data Provider
     * 
     * @return array
     * @since   1.0
     */
    public function mathDivisionDataProvider()
    {
        return array(
            array(
                4, 2, 'expected' => 2
            ),
            array(
                1, 0, 'expected' => false
            ),
            array(
                0, 1, 'expected' => 0
            )
        );
    }
}
