@extends('front.layouts.master')
@section('title')  
  Anasayfa
@endsection
@section('content')
        <!-- Main Content-->

      
                <div class="col-md-8 col-xl-7"> 
                    <!-- Post preview-->
                    @include('front.widgets.articleList')
               
                <!--
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                -->
                  
              </div>
           
@include('front\widgets.categoryWidget')              
      
@endsection