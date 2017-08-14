<?php
	$partners = $block->getPartners();
	$title = $block->getTitle();
?>
<div class="section-partner">
	<div class="section__content">
		<div class="partner section--margin">
			<div class="partner__title h1">{{$title}}
			</div>
			@foreach ($partners as $partner)
				<?php
					$img = $partner['image'];
				?>
				<div class="partner__inner">
					<img class="partner__logos" src="{{$img}}" alt="{{$img}}">
				</div>
			@endforeach
		</div>
	</div>
</div>
