<?php
	$headline = $block->getHeadline();
	$text = $block->getText();
    $logos = $block->getLogos();
    $btnurl = $block->getBtnurl();
    $btntext = $block->getBtntext();
?>
<div class="section__intro">
	<div class="section__content">	
		<div class="intro">
			<h2 class="intro__headline h1">{{$headline}}</h2>
			<div class="intro__text editor-content text-base">{!!$text!!}</div>
			<img src="{{$logos}}" alt="{{$logos}} Bild" class="intro__logos">
			<div class="intro__button"></div>
			<a href="{{$btnurl}}" class="btn">{{$btntext}}</a>
		</div>
	</div>
</div>

