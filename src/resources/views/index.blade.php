@extends('layouts.layout')
@push('styles')
@endpush
@push('scripts')
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
</script>
@endpush
@section('body')
<section class="home" id="home">
  <div class="home-content">
    <h1>Hey, It's <span>Tuna</span></h1>
    <h3 class="text-animation">I'm interested in <br /><span></span></h3>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos at
      provident aperiam. Odit similique maiores numquam? Molestiae aperiam
      ab eum sunt fuga iure mollitia itaque provident earum? Facere, labore
      quod?
    </p>
    <div class="social-icons">
      <a
        href="https://www.linkedin.com/in/mehmet-tuna-selvi-71398b19a/"
        target="_blank"
        ><i class="bx bxl-linkedin-square"></i
      ></a>
      <a href="https://www.github.com/mehmettunaselvi" target="_blank"
        ><i class="bx bxl-github"></i
      ></a>
      <a href="https://www.tryhackme.com/p/mehmettunaselvi" target="_blank"
        ><i class="bx bx-desktop"></i
      ></a>
    </div>
    <div class="btn-group">
      <a
        href="https://www.linkedin.com/in/mehmet-tuna-selvi-71398b19a/"
        target="_blank"
        class="btn"
        >Hire</a
      >
      <a href="#contact" class="btn">Contact</a>
    </div>
  </div>
  <div class="home-img">
    <img src="/image_originial.jpeg" alt="" />
  </div>
</section>
<section class="education" id="education">
  <h2 class="heading">Experience</h2>
  <div class="timeline-items">
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2013</div>
      <div class="timeline-content">
        <h3>High School</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
          sed ratione perspiciatis quaerat ullam repellendus reiciendis
          illum nesciunt optio nemo.
        </p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2017</div>
      <div class="timeline-content">
        <h3>University</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
          sed ratione perspiciatis quaerat ullam repellendus reiciendis
          illum nesciunt optio nemo.
        </p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2020</div>
      <div class="timeline-content">
        <h3>Hardware Internship</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
          sed ratione perspiciatis quaerat ullam repellendus reiciendis
          illum nesciunt optio nemo.
        </p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2022</div>
      <div class="timeline-content">
        <h3>Software Internship</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
          sed ratione perspiciatis quaerat ullam repellendus reiciendis
          illum nesciunt optio nemo.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="services" id="services">
  <h2 class="heading">Recent Blogs</h2>

  <div class="service-container">
    @foreach($blogs as $blog)
    <div class="service-box">
      <a href="/docpage/{{\App\Models\BlogEntry::generateSlug($blog->title).'_'.$blog->id}}">
      <div class="service-info">
        <h4>{{ $blog->title }}</h4>
        @php
            $blog->parseAbstract();
        @endphp
        <p>
          {{ $blog->abstract }}
        </p>
        </a>
      </div>
    </div>
    @endforeach
  </div>
  <br>
<a href="/blog" type="button" class="btn btn-primary more">More Blog</a>

</section>

<section class="contact" id="contact">
  <h2 class="heading">Contact <span>Me</span></h2>

  <form action="{{route('contact.feedback')}}">
    <div class="input-group">
      <div class="input-box">
        <input type="text" placeholder="Full Name" name="feedbackName" required />
        <input type="email" placeholder="E-mail" name="feedbackEmail" required />
        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number" name="feedbackPhone" required  />
        <input type="text" placeholder="Subject" name="feedbackSubject" required />
      </div>
    </div>
    <div class="input-group2">
      <textarea
        name="feedbackMessage"
        cols="30"
        rows="10 place"
        placeholder="Your Message"
        required
      ></textarea>
      <button class="g-recaptcha"
        data-sitekey="6LdfENYpAAAAAPAnZpEJF_R7L_DC48v0uEfyYM9V"
        data-callback='onSubmit'
        data-action='submit'>Submit
      </button>
      <input type="submit" value="Send Message" class="btn" />
    </div>
  </form>
</section>
@endsection
