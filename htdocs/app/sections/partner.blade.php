<?php
	$partners = $block->getPartners();
?>
<div class="partner__outer-container">
	<div class="partner__container">
	<div class="h1">Technologiepartner</div>
		@foreach ($partners as $partner)
		<?php
			$img = $partner['image'];
		?>
		<div class="partner partner__border">
			<div class="partner__pusher">
				<p> 
					<img src="{{$img}}" alt="{{$img}} image"/>
				</p>
			</div>
		</div>
		@endforeach
	</div>
</div>



