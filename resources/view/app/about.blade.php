@extends('app.layouts.app')
@section('head-tag')
<title>درباره ما</title>
@endsection
@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">خانه</a></span> <span>درباره ما</span></p>
            <h1 class="mb-3 bread">درباره ما</h1>
         </div>
      </div>
   </div>
</div>
<section class="ftco-section ftc-no-pb">
   <div class="container">
      <div class="row no-gutters">
         <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
            <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <span class="icon-play"></span>
            </a>
         </div>
         <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section heading-section-wo-line mb-5 pl-md-5">
               <div class="pl-md-5 ml-md-5">
                  <span class="subheading">خلاصه وبسایت</span>
                  <h2 class="mb-4">وبسایت تاپ لرن</h2>
               </div>
            </div>
            <div class="pl-md-5 ml-md-5 mb-5">
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ab deleniti quia libero accusantium dolor, iure maxime inventore id nemo, tempora maiores adipisci minima rem, veniam labore. Eos, magni ea.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates modi obcaecati nihil? Adipisci, ut magni quae atque vel maiores placeat? Quos sit ipsa vero illum delectus eum atque commodi laboriosam!
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cupiditate ad debitis excepturi facere nostrum. Placeat unde earum impedit quam doloribus molestias, minus cum praesentium voluptatum laudantium, natus, incidunt distinctio.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection