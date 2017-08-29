<?php
    $bgimg = $block->getBackground();
    $firstline =  $block->getFirstline();
    $secondline =  $block->getSecondline();
    $thirdline =  $block->getThirdline();
    $forthline =  $block->getForthline();
?>
<div class="section">
	<div class="welcome">
		<div class="welcome__img bg-image" style="background: url({{$bgimg}})"></div>
		<div class="welcome__text h1-welcome section__content">
			<div class="welcome__text__first">{{$firstline}}</div>
			<div class="welcome__text__second">{{$secondline}}</div>
{{-- 			<div class="welcome__text__third">{{$thirdline}}</div>
			<div class="welcome__text__forth">{{$forthline}}</div> --}}
		</div>
	</div>
</div>

