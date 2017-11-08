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
                $expected, $this->object->mathAdd($number1, $number2)
        );
    }

    /**
     * MathAdd Data Provider
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

}
