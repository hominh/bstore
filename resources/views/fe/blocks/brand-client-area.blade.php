<section class="brand-client-area">
	<div class="container">
		<div class="row">
			<!-- BRAND-CLIENT-ROW START -->
			<div class="brand-client-row">
				<div class="center-title-area">
					<h2 class="center-title">BRAND & CLIENTS</h2>
				</div>
				<div class="col-xs-12">
					<div class="row">
						<!-- CLIENT-CAROUSEL START -->
						<div class="client-carousel">
							<!-- CLIENT-SINGLE START -->
							@foreach($brands as $item)
							<div class="item">
								<div class="single-client">
									<a href="#">
										<img src="{!! asset($item->image)  !!}" alt="{!! $item->name !!}" />
									</a>
								</div>
							</div>
							@endforeach()
							<!-- CLIENT-SINGLE END -->
						</div>
						<!-- CLIENT-CAROUSEL END -->
					</div>
				</div>
			</div>
			<!-- BRAND-CLIENT-ROW END -->
		</div>
	</div>
</section>
