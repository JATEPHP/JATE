<?php
	class GUI {
		public $brand;
		public $title;
		public $js;
		public $css;
		public $footer;
		public $menu;
		public $content;
		public $outContent;
		public $jsVariables;
		public $metaDescription;
		public $metaKeywords;
		public $metaAuthor;
		public function init() {
			if(!isset($this->brand)) 						$this->brand = "";
			if(!isset($this->title)) 						$this->title = "";
			if(!isset($this->js)) 							$this->js = "";
			if(!isset($this->css)) 							$this->css = "";
			if(!isset($this->footer))						$this->footer = "";
			if(!isset($this->menu))							$this->menu = "<li><a href='#'>Link</a></li>";
			if(!isset($this->content))					$this->content = "";
			if(!isset($this->outContent))				$this->outContent = "";
			if(!isset($this->jsVariables))			$this->jsVariables = "";
			if(!isset($this->metaDescription))	$this->metaDescription = "";
			if(!isset($this->metaKeywords))			$this->metaKeywords = "";
			if(!isset($this->metaAuthor))				$this->metaAuthor = "";
		}
		public function setPage( $_page ) {
			$this->brand						= $_page->data["brand"];
			$this->menu							= $_page->data["menu"];
			$this->title			 			= $_page->data["title"];
			$this->subtitle					= $_page->data["subtitle"];
			$this->content		 			= $_page->data["content"];
			$this->outContent		 		= $_page->data["outContent"];
			$this->pagePath					= $_page->data["pagePath"];
			$this->css							= $_page->data["css"];
			$this->js								= $_page->data["js"];
			$this->jsVariables			= $_page->data["jsVariables"];
			$this->footer						= $_page->data["footer"];
			$this->metaDescription	= $_page->data["metaDescription"];
			$this->metaKeywords			= $_page->data["metaKeywords"];
			$this->metaAuthor				= $_page->data["metaAuthor"];
		}
		public function draw() {
			$temp = "";
			jBlock();
			?>
			<!DOCTYPE html>
			<html lang="en">
				<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<title><?=$this->title?></title>
					<meta name="description" content="<?=$this->metaDescription?>">
					<meta name="keywords" content="<?=$this->metaKeywords?>">
					<meta name="author" content="<?=$this->metaAuthor?>">
					<link rel="shortcut icon" type="image/png" href="img/favicon.png">
					<?=$this->css?>
				</head>
				<body>
					<div class="col-xs-12 background">
					</div>
					<div class="col-xs-12 no-background">
						<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<div class="navbar-brand">
										<?=$this->brand[0]?>
									</div>
								</div>
								<div class="collapse navbar-collapse" id="navbar-collapse">
									<ul class="nav navbar-nav navbar-right">
										<?=$this->menu?>
									</ul>
								</div>
							</div>
						</nav>
						<div class="row my-page">
							<div class="col-lg-12">
								<div class="row box">
									<div class="col-lg-8 col-lg-offset-2" id="page">
										<?=$this->content?>
									</div>
								</div>
								<div class="row box" id="footer">
									<?=$this->footer?>
								</div>
							</div>
						</div>
					</div>
					<?=$this->js?>
					<?=$this->jsVariables?>
				</body>
			</html>
			<?php
			$temp = jBlockEnd();
			return $temp;
		}
	}
?>
