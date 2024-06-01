@include('sidebar')
   <div class="container">
    <div class="raw">
        <div class="col-9">
            <a class="btn btn-primary" href="{{
              route('banners.create')
              }}">
                <i class="fa-solid fa-plus">Add Banner</i>
            </a>
            <a class="btn btn-danger">
                <i class="fa-solid fa-arrow-left">Back</i>
            </a>
            <div class="card">
            <table class="table">
                <thead>
                  <tr>
                  
                    <th scope="col">Banner title</th>
                    <th scope="col">Banner Pic</th>
                    <th scope="col">Active</th>
                    <th scope="col">Handle</th>

                  </tr>
                </thead>
                <tbody>
                <td><img src="ap.jpeg" height="100px" width="100px" alt=""></td>
                    
                      
                @foreach ($data as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->banner_title}}</td>
                    <!-- <td><img src="banner/{{$item->banner_pic}}" height="100px" width="100px" alt=""></td> -->
                    <td>{{$item->active}}</td>
                  

                    <td>

                      <a href="{{route('banners.edit',$item->id)}}" class="btn btn-primary">Edit</a>

                      <form action="{{
                        route('banners.destroy', $item->id)
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