<?php
/**
 * DefaultController Class Doc Comment
 * PHP version 5.5
 * @category Template
 * @package  AppBundle
 * @author   Jairo M <master.zion@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     none
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * DefaultController Class Doc Comment
 * PHP version 5.5
 * @category Template
 * @package  AppBundle
 * @author   Jairo M <master.zion@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     none
 */
class DefaultController extends Controller
{
    /**
     * Return rendered page
     * @Route("/app/example", name="homepage")
     * @return string
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
