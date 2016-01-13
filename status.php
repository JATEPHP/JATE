<?php
	require_once("jate.php");
	// print_r(getGitLog());
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Status</title>
		<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="col-lg-12">
			<div class="row" style="margin-top:20px;">
				<div class="col-lg-12">
					<?php
					$nPerCol = 6;
					$max = 12;
					$dim = $max / $nPerCol;
					$cont = 0;
					$percent;
					foreach (getGitLog() as $i) {
						$cont++;
						if($cont % $nPerCol == 1)
							echo '<div class="row">';
						if(isset($i["tag"])) {
							$percent = explode(".",$i["tag"]);
							$percent = 100 * intval($percent[0]) + 10 * intval($percent[1]) + intval($percent[2]);
						}
					?>
						<div class="col-lg-<?=$dim?>">
							<div class="well well-sm miniblock">
								<div class="autor"><b>Autor:</b> <?=$i["author"]?><br></div>
								<div class="tag"><b>Tag:</b> <?php if(isset($i["tag"])) echo $i["tag"]?><br></div>
								<div class="date"><b>Date:</b> <?=$i["date"]?><br></div>
								<div class="message"><b>Message:</b> <?=$i["message"]?><br></div>
								<div class="progress">
									<div class="progress-bar progress-bar-striped active progress-bar-danger" role="progressbar" aria-valuenow="<?=$percent?>"
									aria-valuemin="0" aria-valuemax="100" style="width:<?=$percent?>%">
										<?=$percent?>%
									</div>
								</div>
							</div>
						</div>
					<?php
					if($cont % $nPerCol == 0)
						echo '</div>';
					} ?>
				</div>
			</div>
		</div>
		<script src="bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<style media="screen">
			body {
				font-family: 'Quicksand', sans-serif;
				background-color: #222;
				color: white;
			}
			.well {
				background-color: rgba(80,80,80,0.3);
				border-color: transparent;
			}
			.autor {
				color: rgb(237,100,100);
			}
			.tag {
				color: rgb(100,204,237);

			}
			.date {
				color: rgb(100,237,113);

			}
			.message {
				color: rgb(237,215,100);
			}
			.miniblock {
				overflow-x: hidden;
			}
			.progress {
				margin-top: 10px;
				margin-bottom: 10px;
				background-color: #333;
			}
		</style>
	</body>
</html>
