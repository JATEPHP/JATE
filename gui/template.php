<?php
	if(!isset($brand)) 				$brand = "";
	if(!isset($title)) 				$title = "";
	if(!isset($js)) 					$js = "";
	if(!isset($css)) 					$css = "";
	if(!isset($footer))				$footer = "";
	if(!isset($menu))					$menu = "<li><a href='#'>Link</a></li>";
	if(!isset($content))			$content = "";
	if(!isset($jsVariables))	$jsVariables = "";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
		<?php echo $css;?>
  </head>
  <body>
		<div class="col-xs-12 background">
			<canvas data-strokecolor="100,100,100" id="canvas"></canvas>
		</div>
		<div class="col-xs-12 no-background">
		  <div class="row my-page">
		    <div class="col-md-3 col-lg-2 col-lg-offset-1">
					<div class="row">
					  <div class="col-md-12 visible-md visible-lg" id="menu-header">

					  </div>
					</div>
					<div class="row">
						<nav id="menu" class="navbar navbar-default navbar-my">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand funky-color-text-hover" href="index.php"><?php echo $brand[0];?>
									<img id="logo" class="svg brand-svg" src="<?php echo $brand[1]; ?>" alt="logo" />
								</a>
		          </div>
		          <div class="collapse navbar-collapse" id="collapse">
		            <ul class="nav navbar-nav navbar-bottom">
									<li>
										<!--<div class="input-group">
										  <input type="text" class="form-control" placeholder="Cerca...">
										  <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
									  </div>-->
									</li>
		              <?php echo $menu; ?>
		            </ul>
		          </div>
		        </nav>
					</div>
		    </div>
				<div class="col-md-9 col-lg-8">
					<div class="row visible-md visible-lg" id="page-header">
					</div>
					<div class="row box" id="page">
						<?php echo $content; ?>
					</div>
					<div class="row box" id="footer">
						<?php echo $footer; ?>
					</div>
				</div>
		  </div>
		</div>
		<?php echo $js;?>
		<?php echo $jsVariables;?>
  </body>
</html>
