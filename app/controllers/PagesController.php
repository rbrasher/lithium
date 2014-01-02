<?php

namespace app\controllers;

use lithium\security\Auth;

use app\models\Users;

/**
 * This controller is used for serving static pages by name, which are located in the `/views/pages`
 * folder.
 *
 * A Lithium application's default routing provides for automatically routing and rendering
 * static pages using this controller. The default route (`/`) will render the `home` template, as
 * specified in the `view()` action.
 *
 * Additionally, any other static templates in `/views/pages` can be called by name in the URL. For
 * example, browsing to `/pages/about` will render `/views/pages/about.html.php`, if it exists.
 *
 * Templates can be nested within directories as well, which will automatically be accounted for.
 * For example, browsing to `/pages/about/company` will render
 * `/views/pages/about/company.html.php`.
 * 
 * 
 * Sports API:
 * http://xml.pinnaclesports.com/pinnacleFeed.aspx?sporttype=Football
 */
class PagesController extends \lithium\action\Controller {

	public function view() {
        $options = array();
        
//        if(Auth::check('default', $this->request)) {
//            $options['logged_in'] = true;
//        } else {
//            $options['logged_in'] = false;
//        }
        
		
		$path = func_get_args();

		if (!$path || $path === array('home')) {
			$path = array('home');
			$options['compiler'] = array('fallback' => true);
		}

		$options['template'] = join('/', $path);
        //print_r($options);die();
		return $this->render($options);
	}
}

?>