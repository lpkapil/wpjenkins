<?php

include 'bootstrap.php';

/**
 * Description of testMath
 *
 * @author kapil
 */
class testMath extends PHPUnit_Framework_TestCase {

    /**
     * @var object
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        parent::setUp();
        $this->object = new Math;
    }

    /**
     * @covers Math::mathAdd
     * @dataProvider mathAddDataProvider
     * @return void
     * Addition Method
     */
    public function testMathAdd($number1, $number2, $expected) {
        $this->assertEquals(
                $expected, $this->object->mathAdd($number1, $number2), "Adding " . $number1 . " and " . $number2 . " did not return " . $expected
        );
    }

    /**
     * mathAdd Data Provider
     * 
     * @since   1.0
     */
    public function mathAddDataProvider() {
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
     * @covers Math::mathSubstration
     * @dataProvider mathSubstrationDataProvider
     * @return void
     * Substraction Method
     */
    public function testMathSubstration($number1, $number2, $expected) {
        $this->assertEquals(
                $expected, $this->object->mathSubstration($number1, $number2), "Subsctracting " . $number1 . " and " . $number2 . " did not return " . $expected
        );
    }

    /**
     * mathSubstration Data Provider
     * 
     * @since   1.0
     */
    public function mathSubstrationDataProvider() {
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

    /**
     * @covers Math::mathMultiply
     * @dataProvider mathMultiplyDataProvider
     * @return void
     * Multiplication Method
     */
    public function testMathMultiply($number1, $number2, $expected) {
        $this->assertEquals(
                $expected, $this->object->mathMultiply($number1, $number2), "Multiplying " . $number1 . " and " . $number2 . " did not return " . $expected
        );
    }

    /**
     * mathMultiply Data Provider
     * 
     * @since   1.0
     */
    public function mathMultiplyDataProvider() {
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
     * @covers Math::mathDivision
     * @dataProvider mathDivisionDataProvider
     * @return void
     * Divison Method
     */
    public function testMathDivision($number1, $number2, $expected) {
        $this->assertEquals(
                $expected, $this->object->mathDivision($number1, $number2), "Divide " . $number1 . " and " . $number2 . " did not return " . $expected
        );
    }

    /**
     * mathDivision Data Provider
     * 
     * @since   1.0
     */
    public function mathDivisionDataProvider() {
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
