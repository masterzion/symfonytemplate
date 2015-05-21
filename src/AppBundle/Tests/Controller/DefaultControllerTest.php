<?php
/**
 * DefaultControllerTest Class Doc Comment
 * PHP version 5.5
 * @category Template
 * @package  AppBundle
 * @author   Jairo M <master.zion@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     none
 */
namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * DefaultControllerTest Class Doc Comment
 * PHP version 5.5
 * @category Template
 * @package  AppBundle
 * @author   Jairo M <master.zion@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     none
 */
class DefaultControllerTest extends WebTestCase
{
    /**
    * DefaultControllerTest Class Doc Comment
    * PHP version 5.5
    * @category Template
    * @package  AppBundle
    * @author   Jairo M <master.zion@gmail.com>
    * @link     none
    * @return   null
    */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/app/example');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $count = $crawler->filter('html:contains("Homepage")')->count();
        $this->assertTrue($count > 0);
    }
}
