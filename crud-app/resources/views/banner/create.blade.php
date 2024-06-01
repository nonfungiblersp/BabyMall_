@include('sidebar')
    <div class="container">
        <div class="row">

            <form action="{{route('banners.index')}}" method="post" enctype="multipart/form-data">
                @csrf
          
            <div class="col-12">
          <div class="card">
            <div class="card-header">
                Insert banner
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Banner title:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title"name="btitle">
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
                    <input class="form-check-input" name="active" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                    <br>
                    <button class="btn btn-info" type="submit">Add record</button>
                </form>
                  </div>
                </div>
          </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('footer')