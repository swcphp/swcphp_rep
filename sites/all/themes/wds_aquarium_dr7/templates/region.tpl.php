<?php if ($content): ?>
  <div class="<?php print $classes; ?>">
    <?php switch ($region) {
			case "navigation":
				print art_menu_worker($content, true, 'art-menu');
				break;
			case "vnavigation_left":
			case "vnavigation_right":
$block_subject = '';
				foreach (array_keys($variables['elements']) as $name) {
					$element = &$variables['elements'][$name];
					if (is_array($element) && isset($element['#block']) && isset($element['#block']->subject)) {
						$block_subject = $element['#block']->subject;
					}
					}
				art_vmenu_output($block_subject, isset($content) ? $content : '');
				break;
			default:
				print $content;
				break;
		}?>
  </div>
<?php endif; ?>