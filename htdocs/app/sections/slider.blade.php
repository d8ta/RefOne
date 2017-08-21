<?php
	$slides = $block->getSlides();
?>
<div class="section section--dark">
	<div class="section__content">
		<div class="slider @if(count($slides) > 1) js-owl-carousel owl-carousel @endif"">
			@foreach ($slides as $slide)
			<?php 
				$headline = $slide['headline'];
				$text = $slide['text'];
			?>
			<div class="slider__slide">
				<div class="slider__slide__image bg-image" style="background-image: url({{$slide['background']}})">
				</div>
				<div class="slider__slide__headline h4">{{$headline}}</div>
				<div class="slider__slide__text text-box">{{$text}}</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

