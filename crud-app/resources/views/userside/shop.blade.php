@include('userside.header')
<div class="product-tab bg-white pt-80 pb-80">
  <div class="container">
    
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">
          Baby Products
          </h2>
        </div>
      </div>
      <div class="col-12">
        <ol
          class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
        >
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
          Baby Products
          </li>
        </ol>
      </div>`
    </div>
  </div>
</nav>

<div class="row m-5">
<div class="col-5">
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Filter By Price
    </button>
    <ul class="dropdown-menu dropdown-menu-dark">
      <li><a class="dropdown-item" href="/hightolow">High to Low</a></li>
      <li><a class="dropdown-item" href="/lowtohigh">Low to High</a></li>
     </ul>
  
  
     
  </div>
</div>
<div class="col-5">
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Filter By Products
    </button>
  
    <ul class="dropdown-menu dropdown-menu-dark">
      <li><a class="dropdown-item" href="/newarrivals">New Arrivals</a></li>
      <li><a class="dropdown-item" href="/shop">All products</a></li>
     </ul>
  
     
  </div>
  
</div>
</div>
<div class="row grid-view">




    @foreach ($data as $item)
  <div class="col-sm-6 col-md-4 mb-30">
    
      
<div class="card product-card">
  <div class="card-body">
    
    <div class="media flex-column flex-md-row">
      <div class="product-thumbnail position-relative">
        <span class="badge badge-danger top-right">featured</span>
        <a href="/product/details/{{$item->id}}">
          <img
            class="first-img"
            src="{{asset('product')}}/{{$item->pic1}}"
            alt="thumbnail"
            height="350px"
            width="300px"
          />
        </a>
        <!-- product links -->
        <ul class="actions d-flex justify-content-center">
          <li>
            <a class="action" href="/add/wishlist/{{$item->id}}">
              <span
                data-bs-toggle="tooltip"
                data-placement="bottom"
                title="add to wishlist"
                class="icon-heart"
              >
              </span>
            </a>
          </li>
          <li>
           
          </li>
          <li>
           
          </li>
        </ul>
        <!-- product links end-->
      </div>
      <div class="media-body ps-md-4">
        <div class="product-desc py-0 px-0">
          <h3 class="title">
        
              {{$item->name}}
          </h3>
          
          <span class="product-price"> ₹{{$item->price}}</span>
        </div>
        <ul class="product-list-des">
          {{$item->desc}}
        </ul>
       
        <div class="star-rating mb-10">
          @php
          $randomNumber = rand(1, 5);

      @endphp
      @for ($i = 0; $i < $randomNumber; $i++)
      <span class="ion-ios-star"></span>
      @endfor            
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
@endforeach

  </div>
</div>
  </div></div>
@include('userside.footer')
