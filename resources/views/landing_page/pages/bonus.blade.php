======= Pricing Section ======= -->
<section id="bonus" class="pricing">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <p class="text-center">Paket Bonus Yang Ditawarkan</p>
      <h2 style="text-decoration: none;" class="text-center">{{$lphome->first()->title}}</h2>
    </div>
    <h3 class="text-center">{{$lphome->first()->dekskripsi}}</h3>

    <div class="row" data-aos="fade-left">

      <!-- card -->
      @foreach($bonus as $b)
      <div class="col-lg-4 col-md-6">
        <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
          <h3>{{$b->name}}</h3>
          <h4 style="text-decoration: line-through;"><sup>Rp.</sup>{{$b->price}}</h4>
          <h4><sup>Rp.</sup>{{$b->price_discount}}<span> <span>Diskon {{$b->discount}}%</span></span></h4>
          <p>{{$b->description}}</p>
          <!-- <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li class="na">Pharetra massa</li>
            <li class="na">Massa ultricies mi</li>
          </ul> -->
        </div>
      </div>
      @endforeach
      <!-- endcard -->

    </div>

  </div>

</div>
</section>
  <!-- End Pricing Section