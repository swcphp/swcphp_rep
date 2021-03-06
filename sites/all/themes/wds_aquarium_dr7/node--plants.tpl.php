<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div class="art-post">
		<div class="art-post-cc"></div>
		<div class="art-post-body">
			<div class="art-post-inner">
				<h2 class="art-postheader"<?php print $title_attributes; ?>><img
					src="<?php echo get_full_path_to_theme(); ?>/images/postheadericon.png" width="32" height="32"
					alt=""/><?php print render($title_prefix); ?>
					<?php echo art_node_title_output($title, $node_url, $page); ?>
					<?php print render($title_suffix); ?>
				</h2>
				<?php
				if (isset($content['field_plant_name_en'])) {
					$field_plant_name_en = $content['field_plant_name_en']['#items']['0']['safe_value'];
					if ($field_plant_name_en != '') echo '<h3>' . $field_plant_name_en . '</h3>';
				}
				?>
				<?php if ($display_submitted): ?>
				<div class="art-postheadericons art-metadata-icons">
					<?php echo art_submitted_worker($date, $name); ?>

				</div>
				<?php endif; ?>
				<div class="art-postcontent">
					<?php
					/*
echo'<pre>';
//print_r(array_keys($content));
//print_r(array_keys($content['field_image']));
//$content['field_plant_name_en']['#items']['0']['safe_value']
print_r($content['field_image'][0]['#items']);
echo'</pre>';
*/
					// We hide the comments and links now so that we can render them later.
					hide($content['comments']);
					hide($content['links']);
					hide($content['field_plant_name_en']);
					hide($content['field_image']);
					hide($content['body']);
					hide($content['field_plant_w_min']);
					hide($content['field_plant_w_max']);
					hide($content['field_plant_h_min']);
					hide($content['field_plant_h_max']);
					hide($content['field_plant_t_min']);
					hide($content['field_plant_t_max']);
					hide($content['field_plant_ph_min']);
					hide($content['field_plant_ph_max']);
					hide($content['field_plant_light_min']);
					hide($content['field_plant_light_max']);
					hide($content['field_plant_hardnees_min']);
					hide($content['field_plant_hardnees_max']);

					print render($content['body']);
					/*
print "<pre>\n----";
print_r(array_keys($content));
print "\n----</pre>";
//*/
					if (render($content) != '') {
						?>
						<div class="art-block card">
							<div class="art-block-tl"></div>
							<div class="art-block-tr"></div>
							<div class="art-block-bl"></div>
							<div class="art-block-br"></div>
							<div class="art-block-tc"></div>
							<div class="art-block-bc"></div>
							<div class="art-block-cl"></div>
							<div class="art-block-cr"></div>
							<div class="art-block-cc"></div>
							<div class="art-block-body">
								<div class="art-blockheader">
									<div class="l"></div>
									<div class="r"></div>
									<h3 class="t subject">Карточка растения</h3>
								</div>
								<div class="art-blockcontent">
									<div class="art-blockcontent-tl"></div>
									<div class="art-blockcontent-tr"></div>
									<div class="art-blockcontent-bl"></div>
									<div class="art-blockcontent-br"></div>
									<div class="art-blockcontent-tc"></div>
									<div class="art-blockcontent-bc"></div>
									<div class="art-blockcontent-cl"></div>
									<div class="art-blockcontent-cr"></div>
									<div class="art-blockcontent-cc"></div>
									<div class="art-blockcontent-body">
										<div class="content">
											<?php print render($content);?>
											<div class="row">
												<div style="float:left;"><?= render($content['field_plant_w_min']); ?></div>&nbsp;-
												<div style="display: inline-block;"><?= render($content['field_plant_w_max']); ?></div>
											</div>
											<div class="row">
												<div style="float:left;"><?= render($content['field_plant_h_min']); ?></div>&nbsp;-
												<div style="display: inline-block;"><?= render($content['field_plant_h_max']); ?></div>
											</div>
											<div class="row">
												<div style="float:left;"><?= render($content['field_plant_t_min']); ?></div>&nbsp;-
												<div style="display: inline-block;"><?= render($content['field_plant_t_max']); ?></div>
											</div>
											<div class="row">
												<div style="float:left;"><?= render($content['field_plant_ph_min']); ?></div>&nbsp;-
												<div style="display: inline-block;"><?= render($content['field_plant_ph_max']); ?></div>
											</div>
											<div class="row">
												<div style="float:left;"><?= render($content['field_plant_light_min']); ?></div>&nbsp;-
												<div style="display: inline-block;"><?= render($content['field_plant_light_max']); ?></div>
											</div>
											<div class="row">
												<div style="float:left;"><?= render($content['field_plant_hardnees_min']); ?></div>&nbsp;-
												<div style="display: inline-block;"><?= render($content['field_plant_hardnees_max']); ?></div>
											</div>
											<div class="image" style="float: right;">
												<?= render($content['field_image']);?>
											</div>
										</div>
										<div class="cleared"></div>
									</div>
								</div>
								<div class="cleared"></div>
							</div>
						</div>

						<style>
							#card .field {

							}
						</style>
						<?php }?>
				</div>
				<div class="cleared"></div>
				<?php print $user_picture; ?>
				<?php if (isset($content['links']) || isset($content['comments'])):
				$output = art_links_woker_D7($content);
				if (!empty($output)):    ?>
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