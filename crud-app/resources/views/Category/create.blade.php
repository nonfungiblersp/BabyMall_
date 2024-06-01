@include('sidebar')
    <div class="container">
        <div class="raw">

            <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                @csrf
          
            <div class="col-6">
          <div class="card">
            <div class="card-header">
                Insert Category
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category Name:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ctitle"name="ctitle">
                    <span class="text-danger">@error('ctitle')
                        {{$message}}
                    @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category Pic:</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="cpic" name="cpic">
                    <span class="text-danger">@error('cpic')
                        {{$message}}
                    @enderror</span>
                    <br>
                    <button class="btn btn-info" type="submit">Add record</button>
                    </form>
                </div> 
            </div> 
            </div>
          </div>
            
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('footer')