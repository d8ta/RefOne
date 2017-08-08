<?php
    $bgimg = $block->getBackground();
    $firstline =  $block->getFirstline();
    $secondline =  $block->getSecondline();
    $thirdline =  $block->getThirdline();
    $forthline =  $block->getForthline();
?>

		<div class="welcome-slider">
			<img class="welcome-slider__img" src="{{$bgimg}}" alt="Startseiten Bild">
			<div class="welcome-slider__headline">
				<div class="welcome-slider__headline headline--first">{{$firstline}}</div>
				<div class="welcome-slider__headline headline--second">{{$secondline}}</div>
				<div class="welcome-slider__headline headline--third">{{$thirdline}}</div>
				<div class="welcome-slider__headline headline--forth">{{$forthline}}</div>
			</div>
		</div>

