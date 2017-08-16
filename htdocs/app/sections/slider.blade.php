<?php
	$slides = $block->getSlides();
?>
<div class="section section--fullwidth">
	<div class="slider @if(count($slides) > 1) js-owl-carousel owl-carousel @endif"">
		@foreach ($slides as $slide)
		<div class="slider__slide">
		<div class="slider__slide__image bg-image" style="background-image: url({{$slide['background']}})"></div>
		</div>
		@endforeach
	</div>
</div>

