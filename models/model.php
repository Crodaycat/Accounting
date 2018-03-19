<?php
	
	class LinksPages	{
		
		public static function linksPagesModel ($link)	{
			if ($link == "services" || $link == "contactUs" || $link == "aboutUs" || $link == "userRegister" || $link == "logout" || $link == "usersView") {
				$module = "views/modules/".$link.".php";
			} else if ($link == "userRegisterOk") {
				$module = "views/modules/userRegister.php";
			}else if ($link == "index") {
				$module = "views/modules/home.php";
			} else {
				$module = "views/modules/home.php";
			}

			return $module;
		}

	}

?>