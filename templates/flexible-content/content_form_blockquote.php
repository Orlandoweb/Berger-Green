<?php
use Roots\Sage\Assets;

$content    = get_sub_field('content', false, false);
$form       = get_sub_field('form');
$blockquote = get_sub_field('blockquote', false, false);
?>

<div class="content_form_blockquote__row wow fadeInUp" data-wow-duration="2s">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="content_form_blockquote__row__leftcol">
					<?= $content;?>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="content_form_blockquote__row__rightcol">
					<?= $form ;?>
				</div>
			</div>
			<div class="col-12 col-md-12">
				<?= $blockquote ;?>
			</div>
		</div>
	</div>
</div>