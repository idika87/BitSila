<!-- ======= team Section ======= -->
<section id="team" class="team">
	<div class="container">

		<div class="section-title" data-aos="fade-up">
			<h1 style="color: black;">BERTEMU DENGAN TIM KAMIA</h1>
			<h3 style="color: black;">Tim Pengalaman Dan Berkualitas Dengan
			Pengalaman  Tahu</h3>
		</div>

		<div class="row" data-aos="fade-left">
			@foreach($ateam as $tt)
			<div class="col-lg-4 col-md-6">
				<div class="member" data-aos="zoom-in" data-aos-delay="100">
					<div class="pic"><img style="width: 300px" src="lte/dist/img/landing_page/team/{{$tt->profil}}"> class="img-fluid" alt=""></div>
					<div class="member-info">
						<h5 style="color: black;" class="text-center">{{$tt->name}}</h5>
						<h4 class="text-center">{{$tt->position}}</h4>

						<span style="color: black;">{{$tt->description_team}}</span>
					</div>
				</div>
			</div>
			@endforeach

		</div>

	</div>
  <!-- End team Section -->