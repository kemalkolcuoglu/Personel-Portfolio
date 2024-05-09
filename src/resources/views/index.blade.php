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
    I'm dedicated to focusing my career on web development, aiming to strengthen my fundamental principles in disciplines such as Penetration Testing, System Engineering, Operating Systems, and Network Associating. While working on every projects, I aim to develop my technical skills, emphasizing my openness to continuous learning and improvement. Additionally, I'm interested in DevOps tools, aspiring to actively contribute to emerging technology trends.
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
          Beside of core high school education, I actively participated in a cultural exchange program involving students from pilot schools in Norway, Belgium, and Turkey.Together, we conducted research on the philosophers and cultural values of each participating country. As part of this student exchange program, each participant hosted a student from another country in their own country, and we increased cultural solidarity and understanding. Alongside, I was a licenced chess player during high schol years and interested in all areas of sports and philosophy and continued to develop.
        </p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2017</div>
      <div class="timeline-content">
        <h3>University</h3>
        <p>
          Throughout my university years,  the functionality of the academic subjects
          I took, extended beyond theoretical knowledge, providing me with practical skills needed to solve real-world problems. Particularly, by participating in student communitys such as Fırat ACM (Association for Computing Machinery) and Fırat IEEE (Institute of Electrical and Electronics Engineer)  I deepened my knowledge in computer engineering and soft skills as well. Additionally, I succeed the courses I took which are proficiency in German (pre intermediate) and English (intermediate), I am confident in my ability to communicate effectively in international offers. These experiences laid a solid foundation, preparing me for my post-graduation career.
        </p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2020</div>
      <div class="timeline-content">
        <h3>Hardware Internship</h3>
        <p>
          <b>08/2020 - 09/2020</b>
          Under the coordination of Prof. Dr. Yetkin TATAR at Hardware Department of Fırat University, I completed a one-month internship in field of Cyber Security and Ethical Hacking, covering Penetration Testing, System Security Scanning, System Design and Installation. During this internship, I gained insights into the concepts of professional network penetration testing, the interpretation of analysis results, and specifically delved into the concepts of WireShark and NMap software tools.
          <strong>Technologies Used:</strong>
          <br>
          <p>GNS3, VMware, Kali Linux, Bash Scripting, Nmap, Wireshark, and Nessus</p>
        </p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2022</div>
      <div class="timeline-content">
        <h3>Software Internship</h3>
        <p>
          <b>07/2022 - 08/2022</b>
        I completed a one-month internship at IM Park Bilişim in OSTIM ODTÜ Technopark. During this internship, I was involved in creating the abstract of a dynamically structured website developed in ASP.NET architecture with MVC pattern. The company focuses on educational technologies, particularly in the areas of web, mobile, and artificial intelligence, aiming for educational efficiency.
        <strong>Technologies Used:</strong>
        <br>
        <p>C#, ASP.NET, Razor Page, ADO.NET, jQuery, Bootstrap, HTML, CSS, Entity Framework</p>
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
