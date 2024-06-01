@include('sidebar')
    <div class="container">
        <div class="raw">

            <form action="{{route('banners.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
          
            <div class="col-6">
          <div class="card">
            <div class="card-header">
                Update banner
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Banner title:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title"name="btitle" value="{{$banner->banner_title}}">
                    <span class="text-danger">@error('btitle')
                        {{$message}} 
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Banner Pic:</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="pic" name="pic">
                    <span class="text-danger">@error('pic')
                        {{$message}}
                    @enderror</span>
                </div>
                <div class="form-check form-switch">
                    @if ($banner->active)
                    <input class="form-check-input" name="active" type="checkbox" role="switch" checked> 
                    @else
                    <input class="form-check-input" name="active" type="checkbox" role="switch"> 
                    @endif
                    <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                    <br>    
                    <button class="btn btn-info" type="submit">Update</button>
                </div>
            </form>

          </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('footer')