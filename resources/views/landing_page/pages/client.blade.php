<!-- ======= client Section ======= -->
<section id="client" class="team">
	<div class="container">

		<div class="section-title" data-aos="fade-up">
			<p >Berkerja Sama Dengam Beberapa Prusahaan</p>
		</div>

		<div class="row" data-aos="fade-left">
			@foreach($aclient as $cc)
			<div class="col-lg-4 col-md-6">
				<div class="member" data-aos="zoom-in" data-aos-delay="100">
					<div class="pic"><img style="width: 300px" src="lte/dist/img/landing_page/client/{{$cc->profil}}" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4 class="text-center">{{$cc->client_name}}</h4>
						<span>{{$cc->client_description}}</span>
					</div>
				</div>
			</div>
			@endforeach

		</div>

	</div>
  <!-- End client Section -->