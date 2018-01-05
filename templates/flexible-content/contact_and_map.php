<?php
use Roots\Sage\Assets;
$title = get_sub_field('title');
$form  = get_sub_field('form');
$map = get_sub_field('map');
?>
<div class="getintouch__row wow fadeInUp" data-wow-duration="2s">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-3">
				<h3 class="getintouch__row__title text-uppercase text-center mb-2 mb-md-5"><?= $title;?></h3>
			</div>
			<div class="col-12 col-md-6">
				<div class="getintouch__row__leftcol">
					<?= $form;?>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="getintouch__row__rightcol">
					<figure>
						<img class="getintouch__row__rightcol__map d-block img-fluid" src="<?= esc_url($map); ?>" />
					</figure>
				</div>
			</div>
		</div>
	</div>
</div>


