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
            @include('include.header')
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="content-wrapper">
                <div class="content">
                    <div class="card card-default">
                        <div class="card-header">
                            <h2 class="font-weight-bolder">Add Portfolio</h2>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstName">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $portfolio_data->title ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="portfolio_img">Upoad Image</label>
                                        <img style="width:200px"
                                            src="{{ isset($portfolio_data->portfolio_image) ? asset('/admin/' . $portfolio_data->portfolio_image) : '' }}"
                                            value="{{ $portfolio_data->portfolio_image ?? '' }}"
                                            hidden="{{ isset($portfolio_data->portfolio_image) ? 'false' : 'true' }}"
                                            id="portfolio_img_preview">
                                        <input type="file" class="form-control" id="portfolio_img"
                                            name="portfolio_img" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" id="category" name="cat_id" defaultVlaue=>
                                            @foreach ($category as $category_value)
                                                <option value="{{ $category_value->id }}"
                                                    {{ isset($portfolio_data->cat_id) ? ($category_value->id == $portfolio_data->cat_id ? 'selected' : '') : '' }}>
                                                    {{ $category_value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input rows="4" type="text" class="form-control" id="description"
                                            name="description" value="{{ $portfolio_data->description ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                            @if (isset($portfolio_data))
                                <button id="onSubmit" class="btn btn-primary btn-pill mt-5 float-right">Update</button>
                            @else
                                <button id="onSubmit" class="btn btn-primary btn-pill mt-5 float-right">Submit</button>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" id="portfolio_id" value="{{ $portfolio_data->id ?? '' }}">
                </div>
                <!-- Footer -->
                @include('include.footer')
            </div>
        </div>
        @include('include.footerLinks')
</body>
<script>
    $('#onSubmit').click(function() {
        var title = $('#title').val();
        var cat_id = $('#category').val();
        var description = $('#description').val();
        if (document.getElementById('portfolio_img').files[0] !== undefined) {
            var portfolioImage = (document.getElementById('portfolio_img').files[0])
        } else {
            var portfolioImage = $('#portfolio_img_preview').attr('value');
        }
        var formData = new FormData();
        formData.append("title", title);
        formData.append("portfolio_image", portfolioImage);
        formData.append("description", description);
        formData.append("cat_id", cat_id);
        var portfolio_id = $('#portfolio_id').val();
        if (portfolio_id) {
            formData.append("portfolio_id", portfolio_id);
        }
        var csrfToken = $('input[name="csrf-token"]').attr('content');
        // base_url = 'http://127.0.0.1:8000/admin';
        base_url = 'https://codingbrackets.com/admin';
        $.ajax({
            url: base_url + '/add-portfolio',
            method: "post",
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: formData,
            success: function(response) {
                if (response.status == true) {
                    window.location.href = base_url + '/portfolio';
                } else {
                    console.log('data is not inserted');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error occurred:', error);
            }
        });
    });
    // $(document).ready(function() {
    //     var quill = new Quill('#editor', {
    //         theme: 'snow'
    //     });
    //         function setContentToQuill(htmlContent) {
    //             var tempElement = document.createElement('div');
    //             tempElement.innerHTML = htmlContent;
    //             var editorContent = tempElement.querySelector('.ql-editor').innerHTML;
    //             var delta = quill.clipboard.convert(editorContent);
    //             quill.setContents(delta);
    //         }
    //     var rawHtmlContent = @json($services->description ?? '');
    //     setContentToQuill(rawHtmlContent);
    // });
</script>

</html>
