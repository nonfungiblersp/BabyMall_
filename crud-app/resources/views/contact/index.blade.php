@include('sidebar')
   <div class="container">
    <div class="row">
        <div class="col-9">
            <a class="btn btn-primary" href="{{
              route('contact1.create')
              }}">
                {{-- <i class="fa-solid fa-plus">Add SubCategory</i> --}}
            </a>
            {{-- <a class="btn btn-danger">
                <i class="fa-solid fa-arrow-left">Back</i>
            </a> --}}
            <div class="card">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"> Id</th>
                    <th scope="col">Name</th>
                   <th scope="col"> Email</th>
                 <th scope="col"> Subject</th>
                 <th scope="col"> Message</th>
                 </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                   <td>{{$item->email}}</td>
                    <td>{{$item->subject}}</td>
                    <td>{{$item->message}}</td>

                    {{-- <td>

                      <a href="{{route('subcategories.edit',$item->id)}}" class="btn btn-primary">Edit</a>

                      <form action="{{
                        route('subcategories.destroy', $item->id)
                      }}" class="d-inline" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>

                    </td>--}}
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