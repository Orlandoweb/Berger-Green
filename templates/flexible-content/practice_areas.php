<?php
use Roots\Sage\Assets;
$title = get_sub_field('title', false, false);
$practice_areas = get_sub_field('add_practice_areas');
$cta = get_sub_field('cta', false, false);
?>

<div class="ourpraticearea__row wow fadeInUp" data-wow-duration="2s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="ourpraticearea__row__title text-uppercase text-center mb-2 mb-5 pb-2"><?= $title;?></h3>
			</div>
		</div>
		<div class="row">
			<?php
			if( isset($practice_areas) ) {
				foreach( $practice_areas as $practice_area ) {
					?>
					<div class="col-12 col-md-4">
						<div class="ourpraticearea__row__col mb-5 mb-md-0">
							<figure>
								<img class="ourpraticearea__row__col__image mb-2 img-fluid" src="<?= esc_url($practice_area['image']); ?>" />
							</figure>
							<h5 class="ourpraticearea__row__col__title mb-2 text-uppercase"><?= $practice_area['title'];?></h5>
							<div class="ourpraticearea__row__col__content">
								<?= $practice_area['content'];?>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
		<div class="row">
			<div class="col-12 text-center mt-5 pt-2">
				<?= $cta;?>
			</div>
		</div>
	</div>
</div>