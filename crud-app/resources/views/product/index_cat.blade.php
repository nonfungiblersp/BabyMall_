@include('sidebar')
   <div class="container">
    <h1>Select Category</h1>

    <div class="row">


            @foreach ($data as $item)
        <div class="col-3">

            <a href="/product1/create/{{$item->id}}">
            <div class="card" >
                <img class="card-img-top" src="{{asset('category')}}/{{$item->cpic}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$item->ctitle}}</h5>
                </div>
              </div>
            </a>
        </div>

    
            @endforeach
           
    </div>


</div>

@include('footer')
