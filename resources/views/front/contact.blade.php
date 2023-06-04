@extends('front.layouts.master')
@section('title','İletişim')
@section('bg','https://www.coastaldiscos.co.uk/wp-content/uploads/2016/04/contact-us-iconPNG4.png')
@section('content')

<div class="col-md-8 ">
    @if (session('success'))        
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all as $errors)
              <li>{{$error}}</li>               
            @endforeach
        </ul>
    </div>
    @endif
  <p>Bizimle iletişime geçebilirsiniz.</p>
  <div class="my-5">
 
      <form method="post" action="{{route('contact.post')}}">
        @csrf
          <div class="control-group ">
            <div class="form-group control">
                <label>Ad Soyad</label>
                <input class="form-control" value="{{old('name')}}" name="name" type="text" placeholder="name" required>
                
            </div>
          </div>
         
          <div class="control-group">
            <div class="form-group control">
              <label>Email Adresi</label>
              <input class="form-control" value="{{old('email')}}" name="email" type="email" placeholder="email" required>
             
            </div>
          </div>
          <div class="control-group">
            <div class="form-group control"> 
              <label>Konu</label>      
              <input class="form-control" value="{{old('topic')}}" name="topic"  placeholder="topic" required>
            
            </div>
          </div>
          <div class="control-group">
            <div class="form-group control">
              <label>Mesajınız</label>
              <textarea class="form-control" value="{{old('message')}}" name="message" placeholder="message" style="height: 12rem" ></textarea>
              
            </div>
          </div>
          <br />
         
          <!-- Submit Button-->
          <button class="btn btn-primary" id="submitButton" type="submit">Gönder</button>
      </form>
  </div>
@endsection

   