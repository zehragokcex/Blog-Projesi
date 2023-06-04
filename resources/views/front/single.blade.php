@extends('front.layouts.master')
@section('title')  
  {{$article->title}}
@endsection
@section('bg',$article->image)
@section('content')

                        <div class="col-md-9 col-lg-8 col-xl-7">
                            {!!$article->content!!}
                            <!-- HTML komutlarını algılayıp metin haline çeviriyor-->
                           
                            
                        </div>
                        @include('front\widgets.categoryWidget')   
@endsection