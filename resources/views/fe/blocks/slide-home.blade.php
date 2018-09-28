<div class="row">
	<div class="main-slider-area">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="slider-area">
				<div id="wrapper">
					<div class="slider-wrapper">
						<div id="mainSlider" class="nivoSlider">
							@foreach($slides as $item)
								<img src="{!! asset($item->image)  !!}" alt="main slider" title="#htmlcaption{!! $item->id !!}"/>
							@endforeach()
						</div>
						@foreach($slides as $item)
						<div id="htmlcaption{!! $item->id !!}" class="nivo-html-caption slider-caption">
							<div class="slider-progress"></div>
							<div class="slider-cap-text slider-text1">
								<div class="d-table-cell">
									<h2 class="animated bounceInDown">{!! $item->textlink !!}</h2>
									<p class="animated bounceInUp">{!! $item->title !!}</p>
									<a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s" href="{!! $item->link !!}">Read More <i class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						@endforeach()

					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="slider-right zoom-img m-top">
				<a href="#"><img class="img-responsive" src="img/product/cms11.jpg" alt="sidebar left" /></a>
			</div>
		</div>
	</div>
</div>
