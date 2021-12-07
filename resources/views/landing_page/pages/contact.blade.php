<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
	<div class="container">

		<div class="section-title" data-aos="fade-up">
			<p>Kirim pesan atau hubungi admin bila adayang di pertanyakan</p>
		</div>

		<div class="row">

			<div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
				<div class="info">

					<div class="email">
						<a href="mailto:akudimanasiapakamu@gail.com?subject=Testing out mailto!&body=This is only a test!"><i class="icofont-envelope"></i></a>
						<h4>Email:</h4>
						<p>anhdikaparmana123@gmain.com</p>
					</div>

					<div class="phone">
						<a href="https://wa.me/081236988792"><i class="icofont-phone"></i></a>
						<h4>Call:</h4>
						<p>081236988792</p>
					</div>

				</div>

			</div>

			<div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

				<form action="landing_page/contact" method="post" role="form">
					<div class="form-row">
						@csrf
						<div class="col-md-6 form-group">
							<label for="name">Nama</label>
							<input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validate"></div>
						</div>
						<div class="col-md-6 form-group">
							<label for="name">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validate"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="name">Subject</label>
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
						<div class="validate"></div>
					</div>
					<div class="form-group">
						<label for="name">Message</label>
						<textarea class="form-control" name="messange" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
						<div class="validate"></div>
					</div>
					<div class="text-center"><button type="submit">Send Message</button></div>
				</form>

			</div>

		</div>

	</div>
  </section><!-- End Contact Section -->