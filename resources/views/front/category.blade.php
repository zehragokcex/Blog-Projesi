@extends('front.layouts.master')
@section('title')  
  {{$category->name}}
@endsection
@section('content')
        <!-- Main Content-->

      
                <div class="col-md-8 col-xl-7"> 
              
                    @include('front.widgets.articleList')
                </div>
                
 @include('front\widgets.categoryWidget')         
      
@endsection