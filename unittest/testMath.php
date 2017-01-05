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
     * Addition Method
     */
    public function testMathAdd() {
        //Valid test
        $this->assertEquals((int) 4, $this->object->mathAdd(2, 3));
        //Invalid test commented
//        $this->assertEquals((int) 5, $this->object->mathAdd(null, null));
    }

}
