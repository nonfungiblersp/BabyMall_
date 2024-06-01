@include('sidebar')
   <div class="container">
    <div class="row">
        <div class="col-9">
            <a class="btn btn-primary" href="{{
              route('categories.create')
              }}">
                <i class="fa-solid fa-plus">Add Category</i>
            </a>  
            <a class="btn btn-danger">
                <i class="fa-solid fa-arrow-left">Back</i>
            </a>
            <div class="card">
            <table class="table">
                <thead>
                  <tr>
                  
                    <th scope="col">ID</th>
                    <th scope="col">Category Title</th>
                    <th scope="col">Category Pic</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->ctitle}}</td>
                    <td><img src="category/{{$item->cpic}}" height="100px" width="100px" alt=""></td>
                    
                  

                    <td>

                      <a href="{{route('categories.edit',$item->id)}}" class="btn btn-primary">Edit</a>

                      <form action="{{
                        route('categories.destroy', $item->id)
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
        {{$data->links()}}

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