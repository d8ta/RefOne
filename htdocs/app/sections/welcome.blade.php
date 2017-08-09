<?php
    $bgimg = $block->getBackground();
    $firstline =  $block->getFirstline();
    $secondline =  $block->getSecondline();
    $thirdline =  $block->getThirdline();
    $forthline =  $block->getForthline();
?>
<div class="section">
	<div class="welcome">
		<img class="welcome__img" src="{{$bgimg}}" alt="Startseiten Bild">
		<div class="welcome__text h1-welcome section__content">
			<div class="welcome__text__first">{{$firstline}}</div>
			<div class="welcome__text__second">{{$secondline}}</div>
			<div class="welcome__text__third">{{$thirdline}}</div>
			<div class="welcome__text__forth">{{$forthline}}</div>
		</div>
	</div>
</div>

