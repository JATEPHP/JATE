<?php
	/***
	CREATE TABLE IF NOT EXISTS `menu` (
		`pk_menu` int(11) NOT NULL,
		`fk_menu` int(11) NOT NULL DEFAULT '0',
		`label` varchar(45) NOT NULL,
		`link` varchar(100) DEFAULT NULL,
		`flag_active` bit(1) DEFAULT b'1'
	) ENGINE=MyISAM AUTO_INCREMENT DEFAULT CHARSET=utf8;
	***/
	require_once("jate/class/Module.php");
	class Menu extends Module {
		public $name;
		public $data;
		public function __construct() {
			$this->name = get_class($this);
			$this->data = array();
		}
		public function init() {//TODO: make me more efficent
			$menu = c_query("SELECT * FROM menu WHERE flag_active = 1 ORDER BY `order`","Menu,getMenu,menu");
			$temp = array();
			foreach ($menu as $i) {
				$submenu = array();
				if($i["fk_menu"] == 0) {
					array_push($temp, array("label" => $i["label"], "link" => $i["link"], "submenu" => array()));
					$submenu = c_query("SELECT * FROM menu WHERE fk_menu = ".$i["pk_menu"],"Menu,getMenu,submenu");
					if($submenu)
					foreach ($submenu as $j) {
						array_push( $temp[count($temp)-1]["submenu"], array("label" => $j["label"], "link" => $j["link"], array()) );
					}
				}
			}
			$this->data["menu"] = $temp;
			return $temp;
		}
		public function draw() {//TODO: make me fancy
			$temp = "";
			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			foreach ($this->data["menu"] as $i) {
				if( is_array($i["submenu"]) && count($i["submenu"])<1) {
					$temp = $temp.'<li><a href="'.$i["link"].'">'.$i["label"].'</a></li>';
				} else {
					if($this->isSubString($actual_link,array_merge(array_column($i["submenu"], 'link'), array($i["link"]))))
						$temp = $temp.'<li class="dropdown active">';
					else
						$temp = $temp.'<li class="dropdown">';
					$temp =
						$temp.
	          '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.
	          $i["label"].
	          '<span class="caret"></span>'.
						'</a>'.
	          '<ul class="dropdown-menu">';
					foreach ($i["submenu"] as $j) {
						$temp = $temp.'<li><a href="'.$j["link"].'">'.$j["label"].'</a></li>';
					}
					$temp =
						$temp.
						'</ul>'.
	          '</li>';
				}
			}
			return $temp;
		}
		private function isSubString( $_string, $_list) {
			$success = false;
			foreach ($_list as $i)
				if(strpos($_string,$i) !== false)
					$success = true;
			return $success;
		}
	}
?>
