<?php

namespace Drupal\blog_menu\Controller;

/**
* Generic to blog redirect option for main menu - simple web page!
*
*/

class BlogOptionController {

	public function blogPage() {
		//return contact form 
		return [
			"#markup" => "Redirects to blog!"
		];
	}
}

?>
