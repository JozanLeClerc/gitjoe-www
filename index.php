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
		Check out <a href="index.php#users">GitJoe users repos</a> bellow right now!
	</p>
	<h2>How to be on GitJoe?</h2>
	<p>
		If you too want your free, BSD-powered, BSD-licensed, uncensored,
		ad-free, untracked, analytics-free
		unbloated, JavaScript-free and fancy-framework-free
		git repo hosting, get in touch with me with one of these
		<a href="https://jozanleclerc.xyz/links.php" target="_blank">links</a>
		or my email directly: <b>rbousset@42lyon.fr</b>. (no porn pls)
	</p>
	<h2 class="users">GitJoe users repositories</h2>
	<p>
		<ul>
			<li><a href="jozan/">jozan</a></li>
			<li><a href="salad/">salad</a></li>
			<li><a href="salad-joe/">salad-joe</a></li>
		</ul>
	</p>
</div>
<?php jo_footer(); ?>
