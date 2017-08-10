<?php
	$headline = $block->getHeadline();
	$text = $block->getText();
    $logos = $block->getLogos();
    $btnurl = $block->getBtnurl();
    $btntext = $block->getBtntext();
    $dark = $block->getDark();
?>
<div class="section__intro @if($dark) section__darkintro @endif">
	<div class="section__content">	
		<div class="intro">
			<h2 class="intro__headline h1 @if($dark) intro__headline h1-dark @endif">{{$headline}}</h2>
			<div class="intro__text editor-content text-base @if($dark) intro__text editor-content text-base-dark @endif">{!!$text!!}</div>
			<img src="{{$logos}}" alt="{{$logos}} Bild" class="intro__logos @if($dark) hidden @endif">
			<div class="intro__button"></div>
			<a href="{{$btnurl}}" class="btn @if($dark) btn--hidden @endif">{{$btntext}}</a>
		</div>
	</div>
</div>


