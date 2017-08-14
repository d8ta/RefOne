<?php
	$boxes = $block->getBoxes();
?>
<div class="section-documentation section__dark">
	<div class="section__content">
		<div class="documentation">
			@foreach ($boxes as $box)
				<?php
					$headline = $box['headline'];
					$text = $box['text'];
					$btnurl = $box['btnurl'];
					$btntext = $box['btntext'];
				?>
				<div class="documentation__box">
					<div class="documentation__box__inner">
						<h2 class="documentation__headline headline-box-alt">{{$headline}}</h2>
						<div class="documentation__text editor-content text-box-alt">{!!$text!!}</div>
						<div class="documentation__button">
							<a class="btn btn--medium" href="{{$btnurl}}">{{$btntext}}</a>	
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>