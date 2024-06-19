
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
                <div class="content">
                    <div class="card card-default">
                        <div class="card-header">
                            <h2 class="font-weight-bolder">{{ $title }}</h2>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstName">Name</label>
                                        <input type="text" class="form-control" id="firstName" name="name" value="{{ $services->name ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$services->title ?? ''}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sub_title">Sub Title</label>
                                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$services->sub_title ?? ''}}" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="banner_img">Upoad Image</label>
                                        <img style="width:200px" src="{{ isset($services->banner_img) ? asset('/admin/' . $services->banner_img) : '' }}" value="{{$services->banner_img ?? ''}}" id="banner_img_preview">
                                        <input type="file" class="form-control" id="banner_img" name="banner_img" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="short_description">Short Description</label>
                                        <input type="text" class="form-control" id="short_description" name="short_description" value="{{$services->short_description ?? ''}}" />
                                    </div>
                                </div>
                            </div>
                            <label for="descriptio">Description</label>
                            <div id="standalone" name="description">
                                <div id="toolbar">
                                        <select class="ql-font"></select>
                                        <select class="ql-size"></select>
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <select class="ql-color"></select>
                                        <button class="ql-blockquote"></button>
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <button class="ql-indent" value="-1"></button>
                                        <button class="ql-indent" value="+1"></button>
                                        <button class="ql-direction" value="rtl"></button>
                                        <select class="ql-align"></select>
                                        <button class="ql-image"></button>
                                        <select class="ql-header">
                                            <option value="1"></option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                            <option value="4"></option>
                                            <option value="5"></option>
                                            <option value="6"></option>
                                            <option value=""></option>
                                        </select>
                                </div>
                            </div>
                            <div id="editor"></div>
                            @if(isset($services))
                                <button id="onSubmit" class="btn btn-primary btn-pill mt-5 float-right">Update</button>
                            @else
                                <button id="onSubmit" class="btn btn-primary btn-pill mt-5 float-right">Submit</button>
                            @endif
                            
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
        <input type="hidden" id="service_id" value="{{$services->id ?? '' }}">
</body>
<script>
    $('#onSubmit').click(function() {
        
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        var editor_content = quill.container.innerHTML
        var name = $('#firstName').val();
        var title = $('#title').val();
        var sub_title = $('#sub_title').val();
        if(document.getElementById('banner_img').files[0] !== undefined){
            var bannerImage = (document.getElementById('banner_img').files[0])
        }else{
            var bannerImage =  $('#banner_img_preview').attr('value');
        }
        var short_description = $('#short_description').val();

        console.log(bannerImage,'bannerImage');
        var formData = new FormData();
        formData.append("name", name);
        formData.append("title", title);
        formData.append("sub_title", sub_title);
        formData.append("banner_image", bannerImage);
        formData.append("short_description", short_description);
        formData.append("description", editor_content);
        var service_id  = $('#service_id').val();
        if(service_id){
        formData.append("service_id", service_id);
        }
        // console.log(formData);

        // for (var pair of formData.entries()) {
        //     console.log(pair[0]+ ': ' + pair[1]); 
        // }
        var csrfToken = $('input[name="csrf-token"]').attr('content');
        //base_url = 'http://127.0.0.1:8000/admin';
        base_url = 'https://codingbrackets.com/admin';
        $.ajax({
            url: base_url + '/add-services',
            method: "post", 
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: formData,
            
            success: function(response) {
                if (response.status == true) {
                    window.location.href = base_url + '/all-services';
                } else {
                    console.log('data is not inserted');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error occurred:', error);
            }
        });
    });
    $(document).ready(function() {
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
            function setContentToQuill(htmlContent) {
                var tempElement = document.createElement('div');
                tempElement.innerHTML = htmlContent;
                var editorContent = tempElement.querySelector('.ql-editor').innerHTML;
                var delta = quill.clipboard.convert(editorContent);
                quill.setContents(delta);
            }
        var rawHtmlContent = @json($services->description ?? '');
        setContentToQuill(rawHtmlContent);    
    });
</script>

</html>