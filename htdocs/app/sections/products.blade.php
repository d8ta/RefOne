<?php
	$title = $block->getTitle();
	$boxes = $block->getBoxes();
?>
<div class="section">
	<div class="section__content">
		<div class="products section section--margin">
			<div class="products__title h1">{{$title}}
			</div>
			@foreach ($boxes as $box)
				<?php
					$icon = $box['icon'];
					$headline = $box['headline'];
					$text = $box['text'];
					$btnurl = $box['btnurl'];
					$btntext = $box['btntext'];
				?>
				<div class="products__box">
					<div class="products__box__inner">
					    <i class="products__icon icon icon-{{$icon}}"></i>
						<h2 class="products__headline headline-box-alt">{{$headline}}</h2>
						<div class="products__text text-box">{!!$text!!}</div>
						<div class="products__button">
							<a class="btn btn--small" href="{{$btnurl}}">{{$btntext}}</a>	
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>