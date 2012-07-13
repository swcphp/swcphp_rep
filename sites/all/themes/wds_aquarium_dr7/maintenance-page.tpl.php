<?php
	$vars = get_defined_vars();
	$view = get_artx_drupal_view();
	$view->print_head($vars);

	if (isset($page))
		foreach (array_keys($page) as $name)
				$$name = & $page[$name];
	
	$art_sidebar_left = isset($sidebar_left) && !empty($sidebar_left) ? $sidebar_left : NULL;
	$art_sidebar_right = isset($sidebar_right) && !empty($sidebar_right) ? $sidebar_right : NULL;
	if (!isset($vnavigation_left)) $vnavigation_left = NULL;
	if (!isset($vnavigation_right)) $vnavigation_right = NULL;
	$tabs = (isset($tabs) && !(empty($tabs))) ? '<ul class="arttabs_primary">'.render($tabs).'</ul>' : NULL;
	$tabs2 = (isset($tabs2) && !(empty($tabs2))) ?'<ul class="arttabs_secondary">'.render($tabs2).'</ul>' : NULL;
?>

<div id="art-page-background-middle-texture">
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image">
<div id="art-main">
<div class="art-sheet">
    <div class="art-sheet-tl"></div>
    <div class="art-sheet-tr"></div>
    <div class="art-sheet-bl"></div>
    <div class="art-sheet-br"></div>
    <div class="art-sheet-tc"></div>
    <div class="art-sheet-bc"></div>
    <div class="art-sheet-cl"></div>
    <div class="art-sheet-cr"></div>
    <div class="art-sheet-cc"></div>
    <div class="art-sheet-body">
<?php if (!empty($navigation) || !empty($extra1) || !empty($extra2)): ?>
<div class="art-nav">
    <div class="art-nav-l"></div>
    <div class="art-nav-r"></div>
    <?php if (!empty($extra1)) : ?>
    <div class="art-menu-extra1"><?php echo render($extra1); ?></div>
    <?php endif; ?>
    <?php if (!empty($navigation)) : ?>
    <?php echo render($navigation); ?>
    <?php endif; ?>
    <?php if (!empty($extra2)) : ?>
    <div class="art-menu-extra2"><?php echo render($extra2); ?></div>
    <?php endif; ?>
</div>
<?php endif;?>
<div class="art-header">
        <div class="art-header-png"></div>
<script type="text/javascript" src="<?php echo get_full_path_to_theme(); ?>/swfobject.js"></script>
<div id="art-flash-area">
<div id="art-flash-container">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="972" height="270" id="art-flash-object">
    <param name="movie" value="<?php echo get_full_path_to_theme(); ?>/images/flash.swf" />
    <param name="quality" value="high" />
	<param name="scale" value="exactfit" />
	<param name="wmode" value="transparent" />
	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.0&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
    <param name="swfliveconnect" value="true" />
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="<?php echo get_full_path_to_theme(); ?>/images/flash.swf" width="972" height="270">
        <param name="quality" value="high" />
	    <param name="scale" value="exactfit" />
	    <param name="wmode" value="transparent" />
	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.0&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
        <param name="swfliveconnect" value="true" />
    <!--<![endif]-->
      	<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
    <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
</object>
</div>
</div>
<div class="art-headerobject"></div>
<div class="art-logo">
</div>

</div>
<?php if (!empty($banner1)) { echo '<div id="banner1">'.render($banner1).'</div>'; } ?>
<?php echo art_placeholders_output(render($top1), render($top2), render($top3)); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
<?php if (!empty($art_sidebar_left) || !empty($vnavigation_left)) echo '<div class="'.art_get_sidebar_style($art_sidebar_left, $vnavigation_left, 'art-sidebar1').'">' . render($vnavigation_left) . render($art_sidebar_left) . "</div>"; ?>
<div class="<?php echo art_get_content_cell_style($art_sidebar_left, $vnavigation_left, $art_sidebar_right, $vnavigation_right, $content); ?>">
<?php if (!empty($banner2)) { echo '<div id="banner2">'.render($banner2).'</div>'; } ?>
<?php if ((!empty($user1)) && (!empty($user2))) : ?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top"><td class="half-width"><?php echo render($user1); ?></td>
<td><?php echo render($user2); ?></td></tr>
</table>
<?php else: ?>
<?php if (!empty($user1)) { echo '<div id="user1">'.render($user1).'</div>'; }?>
<?php if (!empty($user2)) { echo '<div id="user2">'.render($user2).'</div>'; }?>
<?php endif; ?>
<?php if (!empty($banner3)) { echo '<div id="banner3">'.render($banner3).'</div>'; } ?>
<?php if (!empty($breadcrumb)) { echo $breadcrumb; } ?>
<div class="art-post">
    <div class="art-post-cc"></div>
    <div class="art-post-body">
<div class="art-post-inner">
<div class="art-postcontent">
<?php if (!empty($title)): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
<?php if (!empty($tabs)) { echo $tabs.'<div class="cleared"></div>'; }; ?>
<?php if (!empty($tabs2)) { echo $tabs2.'<div class="cleared"></div>'; } ?>
<?php if (isset($mission) && !empty($mission)) { echo '<div id="mission">'.$mission.'</div>'; }; ?>
<?php if (!empty($help)) { echo render($help); } ?>
<?php if (!empty($messages)) { echo $messages; } ?>
<?php echo art_content_replace(render($content)); ?>

</div>
<div class="cleared"></div>

</div>

		<div class="cleared"></div>
    </div>
</div>
<?php if (!empty($banner4)) { echo '<div id="banner4">'.render($banner4).'</div>'; } ?>
<?php if (!empty($user3) && !empty($user4)) : ?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top"><td class="half-width"><?php echo render($user3); ?></td>
<td><?php echo render($user4); ?></td></tr>
</table>
<?php else: ?>
<?php if (!empty($user3)) { echo '<div id="user1">'.render($user3).'</div>'; }?>
<?php if (!empty($user4)) { echo '<div id="user2">'.render($user4).'</div>'; }?>
<?php endif; ?>
<?php if (!empty($banner5)) { echo '<div id="banner5">'.render($banner5).'</div>'; } ?>
</div>
<?php if (!empty($art_sidebar_right) || !empty($vnavigation_right)) echo '<div class="'.art_get_sidebar_style($art_sidebar_right, $vnavigation_right, 'art-sidebar2').'">' . render($vnavigation_right) . render($art_sidebar_right) . "</div>"; ?>

    </div>
</div>
<div class="cleared"></div>

<?php echo art_placeholders_output(render($bottom1), render($bottom2), render($bottom3)); ?>
<?php if (!empty($banner6)) { echo '<div id="banner6">'.render($banner6).'</div>'; } ?>
<div class="art-footer">
    <div class="art-footer-t"></div>
    <div class="art-footer-b"></div>
    <div class="art-footer-body">
        <div class="art-footer-text">
        <?php 
            if (!empty($footer_message) && (trim($footer_message) != '')) {
                echo $footer_message;
            }
            else {
                ob_start(); ?>
<div style="text-align: left;"><a href="http://www.templatki.com"><img alt="logo" src="http://www.templatki.com/images/stories/logo_mini.png" height="37" width="150" /></a></div><div style="text-align:center;">CopyRight © Name Corporation 2010 - 2011</div>

                <?php echo str_replace('%YEAR%', date('Y'), ob_get_clean());
            }
        ?>
        <?php if (!empty($copyright)) { echo $copyright; } ?>
        </div>
		<div class="cleared"></div>
    </div>
</div>
		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer">Designed by <a href="http://www.templatki.com">www.templatki.com</a>.</p>

</div>
    </div>
</div>
</div>


<?php $view->print_closure($vars); ?>