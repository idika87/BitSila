<!-- ======= Prodak Section ======= -->
<section id="tamplate" class="tamplate">
	<div class="container">
		<div class="col-md-12 col-lg-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-7" data-aos="fade-left">
			<h2 class="text-center">{{$lphome->first()->title}}</h2>
			<h4 class="text-center">{{$lphome->first()->dekskripsi}}</h4>
		</div>
		<h3 class="text-center">Contoh Tamplate</h3>

		<div class="row" data-aos="fade-left">
			@foreach($atamplate as $tt)
			<div class="col-lg-3 col-md-6">
				<div class="member" data-aos="zoom-in" data-aos-delay="100">
					<a href="#" class="pic"><img src="lte/dist/img/landing_page/tamplate/{{$tt->thumbnail}}" class="img-fluid" alt=""></a>
					<div class="member-info">
						<h4>{{$tt->name_tamplate}}</h4>
						<span class="text-left">{{$tt->description_tamplate}}</span>
					</div>
				</div>
			</div>
			@endforeach

		</div>

	</div>
</section>
<!-- End Prodak Section -->