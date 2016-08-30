<?php
	// use Twig as Twig;
	jRequire("../Module/Module.php");
	class Twig extends Module {
		public function __construct() {
			parent::__construct();
		}
		public function drawFile( $_file, $_parameters = [] ) {
			$loader	= new Twig_Loader_Filesystem('bundles/views');
			$twig		= new Twig_Environment( $loader, [
				'cache' => 'bundles/views',
			]);
			$template = $twig->loadTemplate($_text);
			$page = $template->render($_parameters);
			return $page;
		}
		public function drawText( $_text, $_parameters = [] ) {
			$loader = new Twig_Loader_Array([
				'index' => $_text
			]);
			$twig = new Twig_Environment($loader);
			$page = $twig->render('index', $_parameters);
			return $page;
		}
	}
?>
