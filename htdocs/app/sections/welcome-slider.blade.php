<?php
    $bgimg = $block->getBackground();
    $firstline =  $block->getFirstline();
    $secondline =  $block->getSecondline();
    $thirdline =  $block->getThirdline();
    $forthline =  $block->getForthline();
?>
<div class="section">
	<div class="welcome-slider">
		<img class="welcome-slider__img" src="{{$bgimg}}" alt="Startseiten Bild">
		<div class="welcome-slider__text h1 section__content">
			<div class="welcome-slider__text__first">{{$firstline}}</div>
			<div class="welcome-slider__text__second">{{$secondline}}</div>
			<div class="welcome-slider__text__third">{{$thirdline}}</div>
			<div class="welcome-slider__text__forth">{{$forthline}}</div>
		</div>
	</div>
</div>

