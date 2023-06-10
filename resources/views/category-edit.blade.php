<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arsip| edit category </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Lato:ital,wght@0,300;1,100&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>

    <body> 
    <div class="main d-flex flex-column justify-content-between">
            {{-- sidebar --}}
            <div class="bady-content h-100  ">
                <div class="row g-0 h-100 ">
                    <div class="sidebar col-2 collapse d-lg-block bg-secondary " id="#db-button"> 
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                            <div class="sidebar-brand-icon rotate me-2 ">
                                <h2><i class="bi bi-emoji-smile-fill"></i></h2> 
                            </div>
                            <div class="sidebar-brand-text ">
                                <h4>Finance & Accounting </h4> 
                            </div>
                        </a>
                        
                        
                    
                    <a href="dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>dashboard</a>
                    <a href="dokument"  @if(request()->route()->uri == 'dokument') class='active' @endif>dokument</a>
                    <a href="Category"  @if(request()->route()->uri == 'Category') class='active' @endif>Categories</a>
                    <a href="RentLogs"  @if(request()->route()->uri == 'RentLogs') class='active' @endif>Rent Log</a>


                    <a href="profile"  @if(request()->route()->uri == 'profile') class='active' @endif>profile</a>
                    <a href="login">Logout</a>

                    </div>
            {{-- endsidebar --}}

                
                        {{-- navbar --}}
                <div class="contentC col-10  ">
                    <div class="shadow  mb-4 bg-body rounded">
                        <nav class="navbar navbar-light navbar-expand-lg">
                            <div class="container-fluid d-flex justify-content-end">
                            <a class="navbar-brand d-flex " href="#">   <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->username}} </span></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#db-button" aria-controls="db-button" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            </div>
                    </nav>
                    </div>
                    
                        {{-- endnavbar --}}

                    {{-- content --}}
                    <div class="contentB p-4 g-0">
                        
                    <div class="p-5">
                            <div class="card w-75" id="card">
                                <div class="card-header">
                                    <h5>edit category dokument</h5>
                                </div>
                                <div class="mt-2 ">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                <div class="card-body">
                                    <form action="/category-edit/{{$category->slug}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div>
                                            <label for="name" class="form-label">name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}" placeholder="category Name">
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-success" type="submit">update</button>
                                            <button class="btn btn-secondary" type="button" onclick="window.location='/Category'">&laquo; Back</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>  
                        <div class="p-5"></div> 
                    </div>
                    {{-- endcontent --}}
                </div>
            
                        {{-- footer --}}
                        <div class="contentA p-4 d-lg-block">
                            <footer class=" sticky-footer bg-white ">
                                <div class="container mt-2">
                                    <div class="copyright text-center my-auto">
                                        <span>Copyright &copy; Your Website 2020</span>
                                    </div>
                                </div>
                            </footer>
                            </div> 
                        {{-- endfooter --}}
            

    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>




    
    



