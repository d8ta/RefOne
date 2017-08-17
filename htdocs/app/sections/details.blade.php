<?php
	$boxes = $block->getBox();
?>

<div class="section-details">
	<div class="section__content">
		<div class="details section--margin">
			@foreach ($boxes as $box)
				<?php
					$icon = $box['icon'];
					$headline = $box['headline'];
					$text = $box['text'];
				?>
				<div class="details__box">
					 {{-- <div class="details__box__icon"> --}}
                        <i class="icon icon-{{$icon}}"></i>
                    {{-- </div> --}}
					<h2 class="details__headline headline-box">{{$headline}}</h2>
					<div class="details__text text-box">{!!$text!!}</div>
				</div>
			@endforeach
		</div>
	</div>
</div>