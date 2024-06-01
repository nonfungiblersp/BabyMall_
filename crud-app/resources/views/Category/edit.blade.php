@include('sidebar')
    <div class="container">
        <div class="raw">

            <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
          
            <div class="col-6">
          <div class="card">
            <div class="card-header">
                Update Category
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category title:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title"name="ctitle" value="{{$category->ctitle}}">
                    <span class="text-danger">@error('ctitle')
                        {{$message}} 
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category Pic:</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="pic" name="cpic">
                    <span class="text-danger">@error('cpic')
                        {{$message}}
                    @enderror</span>
                </div>
                
                    <br>    
                    <button class="btn btn-info" type="submit">Update</button>
                </div>
            </form>

          </div>
    
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('footer')