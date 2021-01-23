
@include('user.layouts.firstnav')

<div class="container my-5">
    <div class="row">
        @foreach($searchItems as $item)
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('product_images/' . $item->image)}}" class="card-img-top" alt="...">
             <div class="card-body">
             <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text my-2">{{$item->description}}</p>
             <a  style="color: white; border:none; border-radius:3px;" href="{{url('/details' ,[$item->id , $item->category])}}" class="btn btn-primary ml-3">Show Details</a>
             </div>
           </div>
        </div>
        @endforeach
    </div>
</div>


@include('user.layouts.footer')

