<!-- ----------------------------------------------------------------------- -->
<!--                                                                         -->
<!-- File     : license.php                                      /_________/ -->
<!-- Authors  : Joe                                                    |     -->
<!-- Date     : 06/2020                                                |     -->
<!-- Info     : The LICENSE display page                               |     -->
<!--                                                           /       |     -->
<!--                                                           \       /     -->
<!--                                                            \_____/      -->
<!--                                                                         -->
<!-- ----------------------------------------------------------------------- -->

<?php
$prefix = "./";
$curr_dir = basename(getcwd());
if ($curr_dir != "jozan" && $curr_dir != "jozanleclerc.xyz") {
	$prefix = "../";
}
?>
<?php include $prefix."inc/classic-contents.inc.php"; ?>
<?php jo_head("LICENSE"); ?>
<?php jo_sidebar(); ?>
<div class="body-contents">
	<h1>BSD 3-Clause</h1>
	<p>
		This site is copyrighted under the BSD 3-Clause License.
		You can find the terms of the license bellow:
	</p>
	<pre>
<?php
$license = file_get_contents('LICENSE');
echo "$license";
?>
	</pre>
	<p>
		You can also <a href="LICENSE">download</a> the license file.
	</p>
</div>
<?php jo_footer(); ?>
