<section class="company-facality">
	<div class="container">
		<div class="row">
			<div class="company-facality-row">
				<!-- SINGLE-FACALITY START -->
				@foreach($services as $item)
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="{!! $item->icon !!}"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">{!! $item->name !!}</h3>
							<span>{!! $item->title !!}</span>
						</div>
					</div>
				</div>
				@endforeach()
				<!-- SINGLE-FACALITY END -->
			</div>
		</div>
	</div>
</section>
