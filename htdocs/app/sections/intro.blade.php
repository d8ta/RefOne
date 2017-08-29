<?php
	$headline = $block->getHeadline();
	$subline = $block->getSubline();
	$text = $block->getText();
    $logos = $block->getLogos();
    $mobilelogos = $block->getMobilelogos();
    $btnurl = $block->getBtnurl();
    $btntext = $block->getBtntext();
    $dark = $block->getDark();
?>
<div class="section--intro @if($dark) section--dark @endif">
	<div class="section__content">	
		<div class="intro">
			<h2 class="intro__headline h1 @if($dark) intro__headline h1-dark @endif">{{$headline}} <span class="intro__subline h2-dark">{{$subline}}</span></h2>
			<div class="intro__text text-base @if($dark) intro__text text-base-dark @endif">{!!$text!!}</div>
			<img src="{{$logos}}" alt="{{$logos}} Bild" class="intro__logos @if($dark) hidden @endif">
			<img src="{{$mobilelogos}}" alt="{{$mobilelogos}} Bild" class="intro__mobilelogos @if($dark) hidden @endif">
			<div class="intro__button"></div>
			<div class="@if($dark) hidden @endif">
				<a href="{{$btnurl}}" class="btn">{{$btntext}}</a>
			</div>
		</div>
	</div>
</div>


