<?php
/**
 * Created by PhpStorm.
 * User: fiifiappiah
 * Date: 7/1/16
 * Time: 8:11 PM
 */

use \Incentco\IncentcoUtil;

class ReverseStringTest extends \PHPUnit_Framework_TestCase
{
    protected $util;
    
    public function __construct() {
        $this->util = new IncentcoUtil();
    }

    public function testDefault() {
        $this->assertSame('dlrow olleh', $this->util->revere_string('hello world'));
    }

    public function testSecond(){
        $this->assertSame('hctaw yab eessennet', $this->util->revere_string('tennessee bay watch'));
    }

}
