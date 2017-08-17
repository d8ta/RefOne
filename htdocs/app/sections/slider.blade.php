<?php
	$slides = $block->getSlides();
?>
<div class="section section--fullwidth section--dark">
	<div class="slider @if(count($slides) > 1) js-owl-carousel owl-carousel @endif"">
		@foreach ($slides as $slide)
		<?php 
			$headline = $slide['headline'];
			$text = $slide['text'];
		?>
		<div class="slider__slide">
			<div class="slider__slide__image bg-image" style="background-image: url({{$slide['background']}})">
			</div>
			<div class="slider__slide__headline h1">{{$headline}}</div>
			<div class="slider__slide__text text-base">{{$text}}</div>
		</div>
		@endforeach
	</div>
</div>

