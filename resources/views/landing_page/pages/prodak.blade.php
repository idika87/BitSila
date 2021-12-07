<!-- ======= Prodak Section ======= -->
<section id="prodak" class="team">
	<div class="container">
		<div class="col-md-12 col-lg-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-7" data-aos="fade-left">
			<h2 class="text-center">{{$lphome->first()->title}}</h2>
			<h4 class="text-center">Menyediakan Berbagai Pilihan Website Sesuai Kebutuhan Anda</h4>
			<h4 class="text-center">Hubungi Admin Bila Tertarik</h4>
		</div>

		<div class="row" data-aos="fade-left">
			@foreach($alpproduct as $pp)
			<div class="col-lg-3 col-md-6">
				<div class="member" data-aos="zoom-in" data-aos-delay="100">
					<a href="#" class="pic"><img style="width: 300px" src="lte/dist/img/landing_page/produk/{{$pp->pictures}}" class="img-fluid" alt=""></a>
					<div class="member-info">
						<h4>{{$pp->system_name}}</h4>
						<span style="color: red">{{$pp->system_price}}</span>
						<span>{{$pp->description}}</span>
					</div>
				</div>
			</div>
			@endforeach

		</div>

	</div>
</section>
<!-- End Prodak Section -->