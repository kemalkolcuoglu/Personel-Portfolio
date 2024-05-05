@extends('layouts.layout')
@push('styles')
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
  <h2 class="heading">Blog</h2>

  <div class="service-container">
    <div class="service-box">
      <div class="service-info">
        <h4>Why Open Source Technologies Matter?</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sunt quis illo ducimus! Labore suscipit nihil, quam sequi dolorum quod possimus. Illum fugiat dicta facere quasi pariatur magnam iure eligendi.
          Quas, facilis! Quos, vero. Cum suscipit dicta reiciendis aut est! Ducimus reprehenderit qui sequi laudantium ratione sint! Sapiente temporibus libero, modi pariatur accusantium blanditiis provident rerum ut quod quibusdam? Dolores.
          Voluptates itaque aperiam dolorem possimus libero laboriosam fugiat iure commodi architecto eius! Omnis accusantium sed magnam, delectus necessitatibus eveniet vel, facere temporibus illo magni veniam eligendi culpa dolorem ratione! Commodi?
          Totam illum maiores architecto molestias velit assumenda corporis ipsa quas quis illo nam, consequatur dolorum sequi fugit eligendi, numquam id nulla perferendis provident accusamus iure doloremque. Necessitatibus cupiditate sed harum?
          Voluptates, explicabo consequatur. Vitae laboriosam sit unde? Ipsum tempore aperiam incidunt ipsam magni, tenetur porro officiis eum vitae explicabo pariatur, quaerat ullam qui perferendis error quo nesciunt quod voluptatum tempora!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
          laudantium neque dolorem non beatae enim maiores consequuntur
          unde. Cum officia minima ipsum atque sit itaque voluptate
          molestiae rem, quasi natus.
        </p>
      </div>
    </div>

    <div class="service-box">
      <div class="service-info">
        <h4>Cybersecurity Applications</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
          laudantium neque dolorem non beatae enim maiores consequuntur
          unde. Cum officia minima ipsum atque sit itaque voluptate
          molestiae rem, quasi natus.
        </p>
      </div>
    </div>

    <div class="service-box">
      <div class="service-info">
        <h4>Building Dynamic Web Applications with ASP.NET MVC</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
          laudantium neque dolorem non beatae enim maiores consequuntur
          unde. Cum officia minima ipsum atque sit itaque voluptate
          molestiae rem, quasi natus.
        </p>
      </div>
    </div>

    <div class="service-box">
      <div class="service-info">
        <h4>Automated Cataract Diagnosis using Deep Learning</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
          laudantium neque dolorem non beatae enim maiores consequuntur
          unde. Cum officia minima ipsum atque sit itaque voluptate
          molestiae rem, quasi natus.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="contact" id="contact">
  <h2 class="heading">Contact <span>Me</span></h2>

  <form action="">
    <div class="input-group">
      <div class="input-box">
        <input type="text" placeholder="Full Name" />
        <input type="email" placeholder="e-mail" />

        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="Phone Number" />
        <input type="text" placeholder="Subject" />
      </div>
    </div>
    <div class="input-group2">
      <textarea
        name=""
        id=""
        cols="30"
        rows="10 place"
        placeholder="Your Message"
      ></textarea>
      <input type="submit" value="Send Message" class="btn" />
    </div>
  </form>
</section>
@endsection
