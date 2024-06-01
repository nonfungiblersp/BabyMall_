@include('sidebar')
   <div class="container">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary" href="/product1/create">
                <i class="fa-solid fa-plus">Add Product</i>
            </a>
            <a class="btn btn-danger">
                <i class="fa-solid fa-arrow-left">Back</i>
            </a>
            <div class="card">
              
            <table class="table">
              
                <thead>
                  <tr>
                    
                    <th scope="col">Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Description</th>
                 <th scope="col">Product Price</th>
                    <th scope="col">Product Shade</th>
                    <th scope="col">Product Discount</th>
                    <th scope="col">Product Pic1</th>
                    <th scope="col">Product Pic2</th>
                    <th scope="col">Product Pic3</th>
                    <th scope="col">Product Expirydate</th>
                    <th scope="col">Product Manufacture</th>
                   
                   



                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{$item->sid}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->desc}}</td>
                     <td>{{$item->price}}</td>
                    <td>{{$item->shade}}</td>
                    <td>{{$item->dis}}</td>
                    <td><img src="product/{{$item->pic1}}" height="100px" width="100px" alt=""></td>
                    <td><img src="product/{{$item->pic2}}" height="100px" width="100px" alt=""></td>
                    <td><img src="product/{{$item->pic3}}" height="100px" width="100px" alt=""></td>
                    <td>{{$item->exdate}}</td>
                    <td>{{$item->menufac}}</td>
                   
                    
                  

                    <td>

                      <a href="/product1/{{$item->id}}/edit" class="btn btn-primary">Edit</a>

                      <form action="/product1/{{$item->id}}" class="d-inline" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>

                    </td>
                  </tr>
                  
                  @endforeach
                 
                </tbody>
              </table>
       </div>
        @if ($msg=Session::get('success'))
        <div class="alert alert-info" role="alert">
          {{$msg}}
        </div>
        @endif

        </div>
    </div> 
</div>
@include('footer')