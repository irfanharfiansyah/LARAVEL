@extends('layouts.Master')

@section('title', 'Food')
    
@section('content')
    

<!-- Page Content -->
<section class="cake">
  <div class="container">
    <div class="text2">
      <p>FOOD</p>
      <p>Temukan menu favoritmu di <span>CookingKuy <i class="fas fa-utensils"></i></span></p>
    </div>
  </div>


  <div class="container">
@foreach ($food as $fo)  
            <div class="card">
              <a href="#"><img class="card-img" src="{{asset('storage/'.$fo->featured_image)}}" alt=""></a>
              <div class="card-body ">
                <h4 class="card-title">
                 {{ $fo->title }}
                </h4>
                <p class="card-text">{{ Str::limit($fo->content, 100, '...') }}</p>
              </div>
              <a href="{{ './articleFood/'.$fo->id }}"><button class="ml-3 mb-3" style="outline: none";>Resep <i class="fas fa-arrow-right"></i></button></a>
              <div class="card-footer" style="background-color: #e0b65b;">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
   

@endforeach
{{-- <a href="/manageFood" class="manage"><button style="outline: none">MANAGE <i class="fa-1x fas fa-cogs"></i></button></a> --}}
        <!-- Pagination -->
        <ul class="pagination justify-content-center">
          <li class="page-ite" >
            <a class="page-link" href="#" style="background-color: black"><i class="fas fa-angle-double-left" style="color: rgb(235, 132, 15)"></i></a>
          </li>
          <li class="page-ite ml-3">
            <a class="page-link" href="#" style="background-color: black"><i class="fas fa-angle-double-right" style="color: rgb(235, 132, 15)"></i></a>
          </li>
        </ul>
  
    </div>
</section>
@include('layouts.Footer')
@endsection