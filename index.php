<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $PAGE_TITLE = "Webcodeveloper | Welcome";
		require_once("lib/templates/head-utils.php"); ?>
	</head>

	<body class="sfooter">
		<header>
			<?php require_once("lib/templates/header.php"); ?>
		</header>

		<!-- Landing Section -->
		<section class="parallax" data-stellar-background-ratio="1.5" id="landing-section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="jumbotron col-md-8 col-md-offset-2">
							<h2>Hi I'm Meeeeeee!</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="welcome-text col-md-8 col-md-offset-2">
							<p class="lead">Welcome to a new world</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Projects Section -->
		<section class="parallax pattern" data-stellar-background-ratio="0.5" id="project-section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="enticers">
							<?php require_once("lib/templates/enticers.php"); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- About Me Section -->
		<section>

		</section>

		<!-- Contact Section -->
		<section>

		</section>
	</body>
</html>