<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<div class="art-post">
    <div class="art-post-cc"></div>
    <div class="art-post-body">
<div class="art-post-inner">
<h2 class="art-postheader"<?php print $title_attributes; ?>><img src="<?php echo get_full_path_to_theme(); ?>/images/postheadericon.png" width="32" height="32" alt="" /><?php print render($title_prefix); ?>
<?php echo art_node_title_output($title, $node_url, $page); ?>
<?php print render($title_suffix); ?>
</h2>
<?php 
$field_plant_name_en=$content['field_plant_name_en']['#items']['0']['safe_value'];
if($field_plant_name_en!='')echo '<h3>'.$field_plant_name_en.'</h3>';
?>
<?php if ($display_submitted): ?>
<div class="art-postheadericons art-metadata-icons">
<?php echo art_submitted_worker($date, $name); ?>

</div>
<?php endif; ?>
<div class="art-postcontent">
<?php
echo'<pre>';
//print_r(array_keys($content));
//print_r(array_keys($content['field_image']));
//$content['field_plant_name_en']['#items']['0']['safe_value']
print_r($content['field_image'][0]['#items']);
echo'</pre>';
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
	hide($content['field_plant_name_en']);
	hide($content['field_image']);
	hide($content['body']);
	print render($content['field_image']);
	print render($content['body']);
    ?>
	<div id="card">
<?php 
print render($content);
?>

	</div>

</div>
<div class="cleared"></div>
<?php print $user_picture; ?>
<?php if (isset($content['links']) || isset($content['comments'])):
$output = art_links_woker_D7($content);
if (!empty($output)):	?>
<div class="art-postfootericons art-metadata-icons">
<?php echo $output; ?>

</div>
<?php endif; endif; ?>

</div>

		<div class="cleared"></div>
    </div>
</div>

<?php
	$vars = get_defined_vars();
	$view = get_artx_drupal_view();
	$view->print_comment_node($vars);
?>
</div>