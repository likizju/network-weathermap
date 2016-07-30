<?php
// require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__).'/../lib/HTML_ImageMap.class.php';

/**
 * Test class for HTML_ImageMap_Area_Polygon.
 * Generated by PHPUnit on 2010-04-06 at 14:29:39.
 */
class HTML_ImageMap_Area_PolygonTest extends PHPUnit_Framework_TestCase {
    /**
     * @var HTML_ImageMap_Area_Polygon
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->objects = array();
        // triangle
        $this->objects[] = new HTML_ImageMap_Area_Polygon("testarea","testhref", array(array(100,100,200,300,50,200)));
        // square
        $this->objects[] = new HTML_ImageMap_Area_Polygon("testarea","testhref", array(array(100,100,200,100,200,200,100,200)));
        // U shaped
        $this->objects[] = new HTML_ImageMap_Area_Polygon("testarea","testhref", array(array(100,100,150,100,150,150,200,150,250,100,250,200,100,200)));

   }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
    }

    /**
     * @todo Implement testAsHTML().
     */
    public function testAsHTML() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testAsJSON().
     */
    public function testAsJSON() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testHitTest().
     */
    public function testHitTest() {

        foreach ($this->objects as $object) {

            
        }

        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }
}
