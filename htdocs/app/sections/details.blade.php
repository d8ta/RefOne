<?php
	$boxes = $block->getBox();
?>

<div class="section">
	<div class="section__content section--margin">
		<div class="details">
			@foreach ($boxes as $box)
				<?php
					$icon = $box['icon'];
					$headline = $box['headline'];
					$text = $box['text'];
				?>
				<div class="details__box">
					<img src="{{$icon}}" alt="{{$icon}} Icon" class="details__icon">
					<h2 class="details__headline headline-box">{{$headline}}</h2>
					<div class="details__ext editor-content text-box">{!!$text!!}</div>
				</div>
			@endforeach
		</div>
	</div>
</div>