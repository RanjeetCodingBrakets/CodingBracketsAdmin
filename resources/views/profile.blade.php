<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-name" content="mono" />
    <title>Codingbrakets Admin Panel</title>
    <!-- GOOGLE FONTS -->
    @include('include.headLink')
</head>

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false,
        });
        NProgress.start();
    </script>
    <div id="toaster"></div>
    <div class="wrapper">
        @include('include.sidebar')
        <div class="page-wrapper">
            <!-- Header -->
            @include('include.header') @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-xl-3">
                        <!-- Settings -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h2>Settings</h2>
                            </div>

                            <div class="card-body pt-0">
                                <ul class="nav nav-settings">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="user-account-settings.html"> <i class="mdi mdi-settings-outline mr-1"></i> Account </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <!-- Account Settings -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h2 class="mb-5">Account Settings</h2>
                            </div>
                            <div class="card-body">
                                <form action="/update" method="post">
                                    @csrf
                                    <input type="hidden" class="form-control" id="firstName" name="id" value="{{$admin->id}}" />
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="firstName">Name</label>
                                                <input type="text" class="form-control" id="firstName" name="name" value="{{$admin->name}}" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{$admin->email}}" disabled />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="Password">password</label>
                                        <input type="password" class="form-control" id="" name="password" required/>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="cpassword">Confirm password</label>
                                        <input type="password" class="form-control" id="cpassword" name="cpassword" required/>
                                    </div>
                                    <div class="d-flex justify-content-end mt-6">
                                        <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            @include('include.footer')
        </div>
    </div>
    <!-- Card Offcanvas -->
    <div class="card card-offcanvas" id="contact-off">
        <div class="card-header">
            <h2>Contacts</h2>
            <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
        </div>
        <div class="card-body">
            <div class="mb-4">
                <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts..." />
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-01.jpg" alt="User Image" />
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Selena Wagner</span>
                        <span class="discribe">Designer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-02.jpg" alt="User Image" />
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Walter Reuter</span>
                        <span>Developer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-03.jpg" alt="User Image" />
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Larissa Gebhardt</span>
                        <span>Cyber Punk</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-04.jpg" alt="User Image" />
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Albrecht Straub</span>
                        <span>Photographer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-05.jpg" alt="User Image" />
                        <span class="active bg-danger"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Leopold Ebert</span>
                        <span>Fashion Designer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-06.jpg" alt="User Image" />
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Selena Wagner</span>
                        <span>Photographer</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('include.footerLinks')
</body>

</html>