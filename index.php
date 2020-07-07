<!-- ----------------------------------------------------------------------- -->
<!--                                                                         -->
<!-- File     : index.php                                        /_________/ -->
<!-- Authors  : Joe                                                    |     -->
<!-- Date     : 06/2020                                                |     -->
<!-- Info     : The home page                                          |     -->
<!--                                                           /       |     -->
<!--                                                           \       /     -->
<!--                                                            \_____/      -->
<!--                                                                         -->
<!-- ----------------------------------------------------------------------- -->

<?php
$prefix = "./";
$curr_dir = basename(getcwd());
if ($curr_dir != "git-jozan" && $curr_dir != "gitjoe") {
	$prefix = "../";
}
?>
<?php include $prefix."inc/classic-contents.inc.php"; ?>
<?php jo_head("Home"); ?>
<?php jo_sidebar(); ?>
<div class="body-contents">
	<h2>About GitJoe</h2>
	<p>
		This website is my public front-end for me and my
		pals most sweet repositories, hosted here on this server!
		<br>
		<br>
		Check out <a href="index.php#users">GitJoe users repos</a> right now!
	</p>
	<h2>How to be on GitJoe</h2>
	<p>
		If you too want your free, BSD-powered, 
	</p>
	<h2 class="users">GitJoe users</h2>
</div>
<?php jo_footer(); ?>
