<?php
	$partners = $block->getPartners();
?>
<div class="partner__outer-container partner__outer-container--black">
	<div class="partner__container">
	@foreach ($partners as $partner)
		<?php
			$img = $partner['image'];
		?>
		<div class="partner partner--black">
			<div class="partner__pusher">
				<img class= src="{{$img}}" alt="{{$img}}">
			</div>
		</div>
		@endforeach
	</div>
</div>




