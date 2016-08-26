<?php
	jRequire("../Module/Module.php");
	class WebApp extends Module {
		protected $pages;
		protected $defaultPage;
		public $currentPage;
		public $jConfig;
		public function __construct() {
			parent::__construct();
			$this->pages = [];
			$this->defaultPage	= ["Page404",[]];
			$this->currentPage	= null;
			$this->jConfig			= null;
		}
		public function addPage( $_page ) {
			$param	= [];
			$path		= $_page;
			$class	= $_page;
			if(is_array($_page)) {
				$path		= $_page[0];
				$class	= $_page[1];
				if(isset($_page[2]))
					$param = $_page[2];
			}
			$this->pages[$path] = [$class, $param];
			return $this->pages[$path];
		}
		public function addPages( $_pages ) {
			foreach ($_pages as $i)
				$this->addPage($i);
		}
		public function fetchPage(  ) {
			$router = new Router();
			$router->parameters = [ "app" => &$this->jConfig, "page" => null];
			$stack = $router->getPage();
			$parameters = [];
			$temp				= $this->defaultPage;
			foreach ($this->pages as $key => $value) {
				$variables = $this->pathSeeker(explode("/", $key), $stack);
				if(is_array($variables)) {
					$temp = $value;
					$parameters = $variables;
					break;
				}
			}
			if( isset($temp[1]) && is_array($temp[1]) )
				$temp[1] = array_merge($temp[1], $parameters);
			else
				$temp[1] = $parameters;
			$this->currentPage = new $temp[0](["app" => $this->jConfig, "page" => $temp[1]]);
			return $this->currentPage;
		}
		public function setDefaultPage( $_page ) {
			$this->defaultPage = $this->addPage($_page);
		}
		public function draw() {
			$this->currentPage->uniforma();
			$gui = new GUI();
			$gui->init($this->currentPage);
			$gui->draw($this->currentPage->data["template"]);
		}
		public function pathSeeker( $_path, $_url ) {
			$urlLength = count($_url);
			$cont = 0;
			$variables = [];
			$pathLength = count($_path);
			if($urlLength == $pathLength) {
				while($cont < $urlLength) {
					if( $_path[$cont] == $_url[$cont] )
						$cont++;
					else if( strpos($_path[$cont], "\$") !== false ) {
						$variables[str_replace('$', "", $_path[$cont])] = $_url[$cont];
						$cont++;
					} else break;
				}
				if($cont == $urlLength)
					return $variables;
			}
			return null;
		}
		public function newConfig( $_path = "config/") {
			$this->jConfig = new JConfig();
			$this->jConfig->import("${_path}connection.json","connection");
			$this->jConfig->import("${_path}misc.json");
			$this->jConfig->import("${_path}router.json");
		}
	}
?>
