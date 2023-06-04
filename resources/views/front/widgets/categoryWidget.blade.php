@isset($categories)
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
        <div class="list-group">
            @foreach ($categories as $category)
               
                <a href="{{route('category',$category->slug)}}" class="list-group-item"> {{$category->name}} 
                <span class="float-right badge bg-danger ">{{$category->articleCount()}}</span></a>
               
            @endforeach
        </div>
    </div>
         
</div>
@endisset