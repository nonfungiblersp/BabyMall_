<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">      
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="raw">
    <form action="{{route('register.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="col-6">
        <div class="ms-6 card">
            <div class="card-header">
           Register
            </div>
            <div class="card-body">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
      </div>
      
      <div class="input-group mb-3">
  <span class="input-group-text">Address</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
      
<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">@</span>
    <input type="text" class="form-control" placeholder="Password" aria-label="Email">
  </div>

  <label class="form-check-label" for="inlineRadio1">Gender:</label>  
  <div class="form-check form-check-inline">
    
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">@</span>
    <input type="text" class="form-control" placeholder="Mobileno">
  </div>
  
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">User Pic:</label>
   <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="upic" name="upic">
  </div>
  <br>
                    <button class="btn btn-info" type="submit">Add record</button>
                </div>
            </div>
        </div>
</form>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>