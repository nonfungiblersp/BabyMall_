@include('sidebar')
    <div class="container">
        <div class="raw">

            <form action="{{route('product1.update',$id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
          
            <div class="col-6">
          <div class="card">
            <div class="card-header">
                Update Product: 
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Name:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$product->name}}" placeholder="name" name="name">
                    <span class="text-danger">@error('name')
                        {{$message}}
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Description:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="desc" name="desc" value="{{$product->desc}}">
                    <span class="text-danger">@error('desc')
                        {{$message}}
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Price:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="price" name="price" value="{{$product->price}}">
                    <span class="text-danger">@error('price')
                        {{$message}}
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Shade:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="shade" name="shade" value="{{$product->shade}}">
                    <span class="text-danger">@error('shade')
                        {{$message}}
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Discount:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="dis" name="dis" value="{{$product->dis}}">
                    <span class="text-danger">@error('dis')
                        {{$message}}
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Pic1:</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="pic1" name="pic1">
                    <span class="text-danger">@error('pic1')
                        {{$message}}
                    @enderror</span>
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Pic2:</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="pic2" name="pic2">
                    <span class="text-danger">@error('pic2')
                        {{$message}}
                    @enderror</span>
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Pic3:</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="pic3" name="pic3">
                    <span class="text-danger">@error('pic3')
                        {{$message}}
                    @enderror</span>
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Expirydate:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="exdate" name="exdate" value="{{$product->exdate}}">
                    <span class="text-danger">@error('exdate')
                        {{$message}}
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Manufacture:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="menufac" name="menufac" value="{{$product->menufac}}">
                    <span class="text-danger">@error('menufac')
                        {{$message}}
                    @enderror</span>
                </div>

                Sub category: <select class="form-select bootstrap-select" aria-label="Default select example" name="sid">
                    @foreach ($data as $item) 
                    @if ($item->id==$product->sid)
                    <option value="{{$item->id}}">{{$item->stitle}}</option>
              
                    @else
                    <option value="{{$item->id}}">{{$item->stitle}}</option>
                  @endif
                    @endforeach
                  </select>
               <br>
                    <button class="btn btn-info" type="submit">Add record</button>
                </form>

                </div>
          </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('footer')