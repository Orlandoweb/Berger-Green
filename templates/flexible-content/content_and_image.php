<?php
use Roots\Sage\Assets;
$title = get_sub_field('title', false, false);
$content = get_sub_field('content', false, false);
$cta = get_sub_field('cta', false, false);
$image = get_sub_field('image');
?>

<div class="content_and_image__row wow fadeInUp" data-wow-duration="2s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="content_and_image__row__title text-uppercase text-center mb-2 mb-5"><?= $title;?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="content_and_image__row__leftcol">
					<?= $content;?>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="content_and_image__row__rightcol">
					<figure>
						<img class="content_and_image__row__rightcol__image d-block img-fluid" src="<?= esc_url($image); ?>" />
					</figure>
				</div>
			</div>
			<div class="col-12 col-md-12 text-center mt-5 pt-2">
				<?= $cta;?>
			</div>
		</div>
	</div>
</div>