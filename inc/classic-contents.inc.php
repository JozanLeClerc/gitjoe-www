<!-- ----------------------------------------------------------------------- -->
<!--                                                                         -->
<!-- File     : classic-contents.inc.php                         /_________/ -->
<!-- Authors  : Joe                                                    |     -->
<!-- Date     : 06/2020                                                |     -->
<!-- Info     : Functions for contents on every page                   |     -->
<!--                                                           /       |     -->
<!--                                                           \       /     -->
<!--                                                            \_____/      -->
<!--                                                                         -->
<!-- ----------------------------------------------------------------------- -->

<?php
function
jo_head($title) {
	global $prefix;
?>
	<html>
		<head>
			<title>GitJoe's - Joe's git - <?php echo "$title"; ?></title>
			<link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>css/site.css">
			<meta charset="UTF-8">
		</head>
		<body>
			<div class="fullpage">
				<header>
					<h1><a href="<?php echo $prefix; ?>index.php">Joe's dev blog - <?php echo "$title"; ?></a></h1>
				</header>
<?php
}

function
jo_bloat_head($title) {
	global $prefix;
?>
	<html>
		<head>
			<title> GitJoe's - Joe's git - <?php echo "$title"; ?></title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>css/site.css">
			<meta charset="UTF-8">
		</head>
		<body>
			<div class="fullpage">
				<header>
					<h1><a href="<?php echo $prefix; ?>index.php">Joe's dev blog - <?php echo "$title"; ?></a></h1>
				</header>
<?php
}

function
jo_sidebar() {
	global $prefix;
?>

	<div class="sidebar">
		<ul>
			<li><a href="<?php echo $prefix; ?>jozan/">jozan</a></li>
			<li><a href="<?php echo $prefix; ?>salad/">salad</a></li>
			<hr>
			<li><a href="https://jozanleclerc.xyz/" target="_blank">JozanLeClerc.xyz</a></li>
		</ul>
	</div>
<?php
}

function
jo_footer() {
	global $prefix;
?>
	<footer>
		<p>
			Copyright &copy; 2020, Joe -
			see <a href="<?php echo $prefix; ?>license.php">LICENSE</a> -
			we do not use cookies
		</p>
	</footer>
			</div>
		</body>
	</html>
<?php
}
?>
