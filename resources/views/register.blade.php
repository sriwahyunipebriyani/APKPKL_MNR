<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      {{-- style css costum --}}
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    body {
      background: #f8f8ff;
    }
    .main{
      height: 100vh;
      box-sizing: border-box;
    }
    .Register-box{
      width: 480px;
      border: solid 1px;
      padding: 10px;
      border-radius: 6px;
    }
    form div{
      margin-bottom: 15px
    }

  </style>
  <body class="gambarBg">
    <div class="main d-flex flex-column justify-content-center align-items-center ">
              {{-- @if ($errors->any())
              <div class="alert alert-danger" style="width: 480px;">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif --}}

                @if (Session('status'))
                <div class="alert alert-success">
                    {{ Session('message')}}
                </div>
                @endif
        <div class="card w-50">
          
            <form action="" method="post">
              @csrf
              <div class="shadow p-1 mb-3 bg-body rounded">
                <img src="https://tiketkebunraya.id/images/logo/artboard-all.png" alt=""   height="75px" style="width:100%;float:center;">
            </div>
                <div class="card-body">
                  <div>
                    <label for="username" class="form-label">username</label>
                    <input type="text" id="username" class="form-control" >
                  </div>
                  <div>
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                  </div>
                  <div>
                    <label for="phone" class="form-label">phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                  </div>
                  <div>
                    <label for="Address" class="form-label">Addres</label>
                    <textarea  name="Address" id="Address" class="form-control" required></textarea>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-secondary form-control">Submit</button>
                  </div>
                  <div class="text-center"> do you want to login? ? <a href="login" > login </a>
                  </div>
                </div>
            </form>

          
        </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>