<?php
/**
 * DefaultControllerWebTest Class Doc Comment
 * PHP version 5.5
 * @category Template
 * @package  AppBundle
 * @author   Jairo M <master.zion@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     none
 */
namespace AppBundle\Tests\Controller;

/**
 * DefaultControllerWebTest Class Doc Comment
 * PHP version 5.5
 * @category Template
 * @package  AppBundle
 * @author   Jairo M <master.zion@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     none
 */
class DefaultControllerWebTest extends PHPUnit_Extensions_SeleniumTestCase
{
    public static $browsers = array(
      array(
        'name'    => 'Firefox on Linux',
        'browser' => '*firefox',
        'host'    => 'localhost',
        'port'    => 4444,
        'timeout' => 30000,
      ),
      array(
        'name'    => 'Safari on MacOS X',
        'browser' => '*safari',
        'host'    => 'my.macosx.box',
        'port'    => 4444,
        'timeout' => 30000,
      ),
      array(
        'name'    => 'Safari on Windows XP',
        'browser' => '*custom C:\Program Files\Safari\Safari.exe -url',
        'host'    => 'my.windowsxp.box',
        'port'    => 4444,
        'timeout' => 30000,
      ),
      array(
        'name'    => 'Internet Explorer on Windows XP',
        'browser' => '*iexplore',
        'host'    => 'my.windowsxp.box',
        'port'    => 4444,
        'timeout' => 30000,
      )
    );

    /**
    * DefaultControllerTest Class Doc Comment
    * PHP version 5.5
    * @category Template
    * @package  AppBundle
    * @author   Jairo M <master.zion@gmail.com>
    * @link     none
    * @return   null
    */
    protected function setUp()
    {
        $this->setBrowserUrl('http://127.0.0.1:8000/');
    }

    /**
    * DefaultControllerTest Class Doc Comment
    * PHP version 5.5
    * @category Template
    * @package  AppBundle
    * @author   Jairo M <master.zion@gmail.com>
    * @link     none
    * @return   null
    */
    public function testTitle()
    {
        $this->open('http://127.0.0.1:8000/');
        $this->assertTitle('Welcome!');
    }
}
