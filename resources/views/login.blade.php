<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Arsip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style >
        body {
            
        }
        .main{
            height: 100vh;
            box-sizing: border-box;
        }
        .login-boxx{
            width: 480px;
            border: solid 1px;
            padding: 10px;
            border-radius: 6px;
        }
        
        form div {
            margin-bottom: 15px
        }
        .sigin{
            margin: center;
        }
        .card w-50{
            box-shadow: 20px 20px;
        }

    </style>
</head>

<body class="gambarBg">
    <div class="main d-flex flex-column justify-content-center align-items-center">
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card w-50" id="pouple" >
                    <form action="" method="post" >
                        @csrf
                        <div class="shadow p-2 mb-3 bg-body rounded">
                            <img src="https://tiketkebunraya.id/images/logo/artboard-all.png" alt="" width="630px" style="width:100%;float:center;">
                        </div>
                    <div class="card-body">
                    <div>
                        <label for="username" class="form-label">username</label>
                        <input type="text" name="username" id="username" class="form-control" required> 
                    </div>
                    <div>
                        <label for="password" class="form-label" >password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-secondary form-control">Submit</button>
                    </div>
                    <div class="text-center"> dont have accaount ? <a href="register" > Sign in</a>
                    </div>
                    </div>
                    </form>
                </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>