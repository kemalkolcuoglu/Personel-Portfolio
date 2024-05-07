@extends('layouts.layout')
@push('styles')
@endpush
@section('body')
<section class="services" id="services">
  <h2 class="heading"> All Blogs</h2>

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
        <h4>Cybersecurity Applications</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
          laudantium neque dolorem non beatae enim maiores consequuntur
          unde. Cum officia minima ipsum atque sit itaque voluptate
          molestiae rem, quasi natus.
        </p>
      </div>
    </div>
  </div>
  <button id= "more"  type="button" class="btn btn-primary more">Primary</button>

</section>


  <!-- TODO: Dörderli gösterme ve show less eklenecek. -->
<script>
    let more = document.getElementById("more");

let serviceBoxes = document.querySelectorAll(".service-box");
document.getElementById("more").addEventListener("click", function(){
  serviceBoxes.forEach(function(box) {
        box.style.display = "block";
        more.style.display = "none";
    }); 
  
})



</script>




@endsection