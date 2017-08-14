<?php
	$slides = $block->getSlides();
?>
<div class="section section--fullwidth">
	<div class="slider">
		@foreach ($slides as $slide)
		<div class="slider__slide">
		<div class="js-owl-carousel owl-carousel">
			<div class="slider__slide__image bg-image" style="background-image: url({{$slide['background']}})"></div>
		</div>
		</div>
		@endforeach
	</div>
</div>

