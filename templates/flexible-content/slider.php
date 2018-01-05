<?php
use Roots\Sage\Assets;
$image = get_sub_field('image');
$content = get_sub_field('content', false, false);
?>
<div class="slider__row wow fadeInUp" data-wow-duration="2s">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-7">
				<div class="slider__row__leftcol">
					<figure class="mb-0">
						<img class="slider__row__leftcol__image d-block img-fluid m-auto pr-md-5" src="<?= esc_url($image); ?>" />
					</figure>
				</div>
			</div>
			<div class="col-12 col-md-5">
				<div class="slider__row__rightcol text-center text-white">
					<?= $content; ?>
				</div>
			</div>
		</div>
	</div>
</div>