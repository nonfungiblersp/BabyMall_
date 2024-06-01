@include('sidebar')
<div class="container">
    <h1>Admin</h1>
<style>
    @import url('https://fonts.googleapis.com/css?family=Nunito:400,700');


* {
  transition: all 0.3s ease-out;
}

html,
body {
  height: 100%;
  font-family: "Nunito", sans-serif;
  font-size: 16px;
}

.container {
  width: 100%;
  height: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
h1{
    color: wheat;
}
h3 {
  color: #fff;
  font-size: 17px;
  line-height: 24px;
  font-weight: 700;
  margin-bottom: 4px;
}

p {
  font-size: 17px;
  font-weight: 400;
  line-height: 20px;
  color: #fff;

  &.small {
    font-size: 14px;
  }
}

.go-corner {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 32px;
  height: 32px;
  overflow: hidden;
  top: 0;
  right: 0;
  background-color: #CD3D73;
  border-radius: 0 4px 0 32px;
}

.go-arrow {
  margin-top: -4px;
  margin-right: -4px;
  color: white;
  font-family: courier, sans;
}

.card1 {
  display: block;
  position: relative;
  max-width: 262px;
  width: 300px;
  background: linear-gradient(to right, #8017b4, rgb(225, 152, 152));
  border-color: #8017b4;
  border: #8017b4;  
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;

  &:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -16px;
    right: -16px;
    background: #CD3D73;
    height: 32px;
    width: 32px;
    border-radius: 32px;
    transform: scale(1);
    transform-origin: 50% 50%;
    transition: transform 0.25s ease-out;
  }

  &:hover:before {
    transform: scale(21);
  }
}

.card1:hover {
  p {
    transition: all 0.3s ease-out;
    color: rgba(255, 255, 255, 0.8);
  }
  h3 {
    transition: all 0.3s ease-out;
    color: #ffffff;
  }
}

.card2 {
  display: block;
  top: 0px;
  position: relative;
  max-width: 262px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;
  border: 1px solid #f2f8f9;

  &:hover {
    transition: all 0.2s ease-out;
    box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
    top: -4px;
    border: 1px solid #cccccc;
    background-color: white;
  }

  &:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -16px;
    right: -16px;
    background: #CD3D73;
    height: 32px;
    width: 32px;
    border-radius: 32px;
    transform: scale(2);
    transform-origin: 50% 50%;
    transition: transform 0.15s ease-out;
  }

  &:hover:before {
    transform: scale(2.15);
  }
}

.card3 {
  display: block;
  top: 0px;
  position: relative;
  max-width: 262px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  overflow: hidden;
  border: 1px solid #f2f8f9;
  
  .go-corner {
    opacity: 0.7;
  }

  &:hover {
    border: 1px solid #CD3D73;
    box-shadow: 0px 0px 999px 999px rgba(255, 255, 255, 0.5);
    z-index: 500;
  }
}

.card3:hover {
  p{color: #00838d}
  .go-corner {
    transition: opactiy 0.3s linear;
    opacity: 1;
  }
}

.card4 {
  display: block;
  top: 0px;
  position: relative;
  max-width: 262px;
  background-color: #ffffff;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  overflow: hidden;
  border: 1px solid #cccccc;
  
  .go-corner {
    background-color: #00838d;
    height: 100%;
    width: 16px;
    padding-right: 9px;
    border-radius: 0;
    transform: skew(6deg);
    margin-right: -36px;
    align-items: start;
    background-image: linear-gradient(-45deg, #8F479A 1%, #DC2A74 100%);
  }
  
  .go-arrow {
    transform: skew(-6deg);
    margin-left: -2px;
    margin-top: 9px;
    opacity: 0;
  }

  &:hover {
    border: 1px solid #7b2243;
  }
  
  h3 {margin-top: 8px;}
}

.card4:hover {
  .go-corner {
    margin-right: -12px;
  }
  .go-arrow {
    opacity: 1;
  }
}



.pie-chart {
	background:
		radial-gradient(
			circle closest-side,
			white 0,
			white 40%,
			transparent 40%,
			transparent 100%,
			white 0
		),
		conic-gradient(
			#CD3D73 0,
			#CD3D73 25%,
			#266fb7 0,
			#2377cb 75%
	);
	position: relative;
	width: 500px;
	min-height: 350px;
	margin: 0;
	outline: 1px solid #ccc;
}
.pie-chart:hover {
  border: 2px solid blue;
}
.pie-chart h2 {
	position: absolute;
	margin: 1rem;
}
.pie-chart figcaption {
	position: absolute;
	bottom: 1em;
	right: 1em;
	font-size: smaller;
	text-align: right;
}
.pie-chart span:after {
	display: inline-block;
	content: "";
	width: 0.8em;
	height: 0.8em;
	margin-left: 0.4em;
	height: 0.8em;
	border-radius: 0.2em;
	background: currentColor;
}
</style>


<div class="container">
    <a class="card1" href="/sub_categories">
      <h3>TOTAL USERS</h3>
      <h1 class="">{{$user}}</h1>
      <div class="go-corner" href="/sub_categories">
        <div class="go-arrow">
          →
        </div>
      </div>
    </a>

    <a class="card1" href="/categories">
        <h3>TOTAL CATEGORIES</h3>
        <h1 class="">{{$ccount}}</h1>
        <div class="go-corner" href="/categories">
          <div class="go-arrow">
            →
          </div>
        </div>
      </a>

      <a class="card1" href="/categories">
        <h3>TOTAL ORDER</h3>
        <h1 class="">{{$ocount}}</h1>
        <div class="go-corner" href="/categories">
          <div class="go-arrow">
            →
          </div>
        </div>
      </a>

      <a class="card1" href="/categories">
        <h3>TOTAL REVENUE</h3>
        <h1>{{$order}}</h1>
        <div class="go-corner" href="/categories">
          <div class="go-arrow">
            ->
          </div>
        </div>
      </a>


      <a class="card1" href="/banners">
        <h3>TOTAL SUBCATEGORIES</h3>
        <h1 class="">{{$scount}}</h1>
        <div class="go-corner" href="/subcategories">
          <div class="go-arrow">
            →
          </div>  
        </div>
      </a>

      <a class="card1" href="/coupons">
        <h3>TOTAL PRODUCTS</h3>
        <h1 class="">{{$pcount}}</h1>
        <div class="go-corner" href="/product1">
          <div class="go-arrow">
            →
          </div>
        </div>
      </a>


    
   
  </div>
  <div class="container mt-5">
    <div class="row">
        <div class="col-7">
            <div class="card">
       

                <table class="table">
                  {{-- <thead class="thead-dark">
                    
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Medicine</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                        <th scope="col">Medicine</th>

        
                      </tr>
                    </thead> --}}
                    <tbody>
                      {{-- @foreach($data as $item)
                      <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item->category_name}}</td> --}}
                        
        
                        {{-- <td>
                          <a href="{{
                            route('categories.edit',$item->id)
                              }}" class="btn btn-warning">Pending</a>
        
                          <form action="{{ route ('categories.destroy',$item->id)
                          }}" class="d-inline" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
        
                          </form>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table> --}}
                  {{-- {{$data->links()}} --}}
            </div>
        </div>
    
<div class="col-5">
    <div class="card">
        
<figure class="pie-chart">
	<h2>TEST</h2>
	<figcaption>
		Total Revenue<span style="color:#4e79a7"> {{$order}}</span><br>
		Profit<span style="color:#f22c6e"> {{$order * 0.3}}</span>
	</figcaption>
</figure>
       
    </div>
</div>

   
  </div>
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</div>
@include('footer')