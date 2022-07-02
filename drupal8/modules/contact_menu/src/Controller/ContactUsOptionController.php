<?php

namespace Drupal\contact_menu\Controller;

/**
* Generic about us option for main menu - simple web page!
*
*/

class ContactUsOptionController {

	public function contactUs() {
		//return contact form 
		return [
			"#markup" => "Default contact form! ....."
		];
	}
}

?>
