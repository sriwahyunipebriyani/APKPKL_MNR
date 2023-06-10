<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arsip| @yield('title') </title>
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
                <!-- Sidebar -->
            <ul class="navbar-nav col-2 sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #616D7E;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate me-2 ">
                        <h2><i class="bi bi-emoji-smile-fill"></i></h2> 
                    </div>
                    <div class="sidebar-brand-text ">
                        <h4>Finance & Accounting </h4> 
                    </div>
                </a>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    @if (Auth::user()->role_id == 1)
                    <a class="collapse-item" href="/dashboard"   @if(request()->route()->uri == 'dashboard') class='active' @endif >Dashboad</a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                    <a href="/dokument"  @if(request()->route()->uri == 'dokument') class='active' @endif>Dokument</a>
                    <a href="/Category"  @if(request()->route()->uri == 'Category') class='active' @endif>Categories</a>
                    {{-- <a href="/RentLogs"  @if(request()->route()->uri == 'RentLogs') class='active' @endif>Rent Log</a> --}}
                    <a href="/profile"  @if(request()->route()->uri == 'profile') class='active' @endif>profile</a>
                    <a href="/login">Logout</a>
                    @else
                    <a href="/dokument"  @if(request()->route()->uri == 'dokument') class='active' @endif>Dokument</a>
                    <a href="/profile"  @if(request()->route()->uri == 'profile') class='active' @endif>profile</a>
                    <a href="/login">Logout</a>
                    @endif

            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>History</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->
                        
            

                
                        {{-- navbar --}}
                <div class="contentC col-10  ">
                    <div class="shadow  mb-4 bg-body rounded">
                        <nav class="navbar navbar-light navbar-expand-lg">
                            <div class="container-fluid d-flex justify-content-end">
                        
                            <div class="navbar-brand d-flex p-2">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->username}} </span>
                            </div>
                            
                            </div>
                    </nav>
                    </div>
                    
                        {{-- endnavbar --}}

                    {{-- content --}}
                    <div class="contentB p-4 g-0">
                        @yield('content')
                        
                    </div>
                    {{-- endcontent --}}

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
            
            

    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

