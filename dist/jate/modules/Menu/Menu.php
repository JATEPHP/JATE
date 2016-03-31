<?php
	class Menu extends Module {
		public function __construct() {
			parent::__construct();
		}
		public function init() {
			$menu = c_query("SELECT * FROM menu WHERE flag_active = 1 ORDER BY `order`","Menu,getMenu,menu");
			$temp = [];
			foreach ($menu as $i) {
				$submenu = [];
				if($i["fk_menu"] == 0) {
					array_push($temp, array("label" => $i["label"], "link" => $i["link"], "submenu" => []));
					$submenu = c_query("SELECT * FROM menu WHERE fk_menu = ".$i["pk_menu"],"Menu,getMenu,submenu");
					if($submenu)
					foreach ($submenu as $j)
						array_push( $temp[count($temp)-1]["submenu"], array("label" => $j["label"], "link" => $j["link"], []) );
				}
			}
			$this->data["menu"] = $temp;
			return $temp;
		}
		public function draw() {
			$temp = "";
			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			foreach ($this->data["menu"] as $i) {
				if( is_array($i["submenu"]) && count($i["submenu"])<1) {
					$temp .= '<li><a href="'.$i["link"].'">'.$i["label"].'</a></li>';
				} else {
					if($this->isSubString($actual_link,array_merge(array_column($i["submenu"], 'link'), array($i["link"]))))
						$temp .= '<li class="dropdown active">';
					else
						$temp .= '<li class="dropdown">';
					$temp .=
						'<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.
						$i["label"].
						'<span class="caret"></span>'.
						'</a>'.
						'<ul class="dropdown-menu">';
					foreach ($i["submenu"] as $j)
						$temp .= '<li><a href="'.$j["link"].'">'.$j["label"].'</a></li>';
					$temp .= '</ul></li>';
				}
			}
			return $temp;
		}
		protected function isSubString( $_string, $_list) {
			$success = false;
			foreach ($_list as $i)
				if(strpos($_string,$i) !== false)
					$success = true;
			return $success;
		}
		public function loginWithUser() {
			$this->init();
			$temp = [];
			$user = "";
			if(!isset($_SESSION["username"]))
				$_SESSION["username"] ="guest";
			$user = $_SESSION["username"];
			$blackList = c_query(
				"SELECT user.*,user_section.*
				FROM user
				INNER JOIN user_x_section
				ON user.pk_user = user_x_section.fk_user
				INNER JOIN user_section
				ON user_section.pk_user_section = user_x_section.fk_user_section
				WHERE user.username = '$user'"
				, "Template,printMenu,blackList");
			foreach ($this->data["menu"] as $i) {
				$success = true;
				$k = $i["label"];
				foreach ($blackList as $j)
					if( $j["section"] == $k)
						$success = false;
				if($success)
					array_push($temp,$i);
			}
			$this->data["menu"] = $temp;
		}
	}
?>
