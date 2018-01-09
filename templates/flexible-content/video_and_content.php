<?php
use Roots\Sage\Assets;
$title = get_sub_field('title', false, false);
$content = get_sub_field('content', false, false);
$add_videos = get_sub_field('add_videos');
$videos_url = array();
if( isset($add_videos) ) {
	foreach( $add_videos as $add_video ) {
		$videos_url[] = $add_video['video_url'];
	}
}
?>

<div class="video_and_content__row wow fadeInUp" data-wow-duration="2s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="video_and_content__row__title text-uppercase text-center mb-2 mb-5 pb-3"><?= $title;?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-7">
				<div class="video_and_content__row__leftcol ">
					<iframe class="video-display mb-2" width="100%" height="315" src="<?= $videos_url[0]?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-12 col-md-5">
				<div class="video_and_content__row__rightcol text-center">
					<?= $content;?>
				</div>
			</div>
		</div>
	</div>
	<?php
	if( isset($videos_url) ) {
		?>
			<div class="video_and_content__row__vidoes flexslider flexslider--transparent pt-4 mt-5">
				<ul class="slides">
				<?php
					foreach( $videos_url as $video ) {
					echo '<li>
							<div class="video_and_content__row__vidoes__col">
								<iframe class="mb-2" width="100%" src="'.$video.'" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							</div>
						</li>';
					}
				?>
				</ul>
			</div>
			<?php
	}
	?>
</div>