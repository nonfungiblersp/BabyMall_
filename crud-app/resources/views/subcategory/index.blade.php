@include('sidebar')
   <div class="container">
    <div class="row">
        <div class="col-9">
            <a class="btn btn-primary" href="{{
              route('subcategories.create')
              }}">
                <i class="fa-solid fa-plus">Add SubCategory</i>
            </a>
            <a class="btn btn-danger">
                <i class="fa-solid fa-arrow-left">Back</i>
            </a>
            <div class="card">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SubCategory Id</th>
                    <th scope="col">SubCategory title</th>
                    {{-- <th scope="col">SubCategory Selection</th> --}}
                 <th scope="col">SubCategory Pic</th>
                     </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->stitle}}</td>
                    {{-- <td>{{$item->subselect}}</td> --}}
                    <td><img src="subcategory/{{$item->spic}}" height="100px" width="100px" alt=""></td>
                    
                  

                    <td>

                      <a href="{{route('subcategories.edit',$item->id)}}" class="btn btn-primary">Edit</a>

                      <form action="{{
                        route('subcategories.destroy', $item->id)
                      }}" class="d-inline" method="POST">
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