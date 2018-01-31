<?php
	
	class LinksPages	{
		
		public static function linksPagesModel ($link)	{
			if ($link == "services" || $link == "contactUs" || $link == "aboutUs") {
				$module = "views/modules/".$link.".php";
			} else if ($link == "index") {
				$module = "views/modules/home.php";
			} else {
				$module = "views/modules/home.php";
			}

			return $module;
		}

	}

?>