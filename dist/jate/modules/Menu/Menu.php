<?php
	jRequire("../Query/Query.php");
	class Menu extends Query {
		public function __construct() {
			parent::__construct();
		}
		public function init() {
			$menu = $this->queryFetch("SELECT * FROM menu WHERE flag_active = 1 ORDER BY `order`");
			$temp = [];
			foreach ($menu as $i) {
				$submenu = [];
				if($i["fk_menu"] == 0) {
					$pk_menu = $i["pk_menu"];
					array_push($temp, array("label" => $i["label"], "link" => $i["link"], "submenu" => []));
					$submenu = $this->queryFetch("SELECT * FROM menu WHERE fk_menu = $pk_menu ORDER BY `order`");
					if($submenu)
					foreach ($submenu as $j)
						array_push( $temp[count($temp)-1]["submenu"], array("label" => $j["label"], "link" => $j["link"], []) );
				}
			}
			$this->tags["menu"] = $temp;
			return $temp;
		}
		public function draw() {
			$temp = "";
			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			foreach ($this->tags["menu"] as $i) {
				$active = $this->isSubString($actual_link,array_merge(array_column($i["submenu"], 'link'), array($i["link"])))? "active" : "";
				if( is_array($i["submenu"]) && count($i["submenu"])<1)
						$temp .= "<li class='$active'><a href='$i[link]'>$i[label]</a></li>";
				else {
					$temp .= "<li class='dropdown $active'>";
					$temp .=
						'<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.
						$i["label"].
						'<span class="caret"></span>'.
						'</a>'.
						'<ul class="dropdown-menu">';
					foreach ($i["submenu"] as $j)
						$temp .= "<li><a href='$j[link]'>$j[label]</a></li>";
					$temp .= "</ul></li>";
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
			$blackList = $this->queryFetch(
				"SELECT user.*,user_section.*
				FROM user
				INNER JOIN user_x_section
				ON user.pk_user = user_x_section.fk_user
				INNER JOIN user_section
				ON user_section.pk_user_section = user_x_section.fk_user_section
				WHERE user.username = '$user'"
			);
			foreach ($this->tags["menu"] as $i) {
				$success = true;
				$k = $i["label"];
				foreach ($blackList as $j)
					if( $j["section"] == $k)
						$success = false;
				if($success)
					array_push($temp,$i);
			}
			$this->tags["menu"] = $temp;
		}
	}
?>
