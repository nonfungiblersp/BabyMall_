@include('userside.header')

<div class="container">


    <div class="row">
        @foreach ($data as $item)
            
        <div class="col-4">
        <div class="card popular-card zoom-in d-block overflow-hidden">
            <div class="card-body">
              <a href="/shop/{{$item->id}}" class="thumb-naile">
                <img
                  class="d-block mx-auto"
                  src="{{asset('subcategory')}}/{{$item->spic}}"
                  alt="img" height="350px" width="300px"
              /></a>
              <h3 class="popular-title">
                <a href="/shop/{{$item->id}}"> {{$item->stitle}} <span></span></a>
              </h3>
            </div>
          </div>
        </div>
        @endforeach

    </div>
</div>


@include('userside.footer')
