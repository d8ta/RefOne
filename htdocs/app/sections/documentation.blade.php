<?php
	$boxes = $block->getBoxes();
?>
<div class="section--dark section--padding">
	<div class="section__content">
		<div class="documentation">
		<div class="documentation__inner">
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
						<div class="documentation__text text-box-alt">{!!$text!!}</div>
						<div class="documentation__button">
							<a class="btn btn--medium" href="https://hobex.docs.oppwa.com/tutorials/integration-guide" target="_blank">{{$btntext}}</a>	
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	</div>
</div>













