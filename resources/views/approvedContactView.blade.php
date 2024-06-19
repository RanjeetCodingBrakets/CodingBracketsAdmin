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
            showSpinner: false
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
                    <!-- Table Product -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h2>Approved Contact List</h2>
                                </div>
                                <div class="card-body">
                                    <table id="productsTable" class="table table-hover table-product"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Requirements</th>
                                                <th>Service</th>
                                                <th>Message</th>
                                                <th>Created at</th>
                                                <th>Status</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $userData)
                                                <tr>
                                                    <td>{{ $userData->name }}</td>
                                                    <td>{{ $userData->email }}</td>
                                                    <td>{{ $userData->phone }}</td>
                                                    <td>{{ $userData->requirements }}</td>
                                                    <td>{{ $userData->service_name }}</td>
                                                    <td>{{ $userData->comment }}</td>
                                                    <td>{{ $userData->createdAt }}</td>
                                                    <td>{{ $userData->status ? 'Approved' : 'Not Approved' }}</td>
                                                    {{-- <td> --}}
                                                    <!-- Delete Contact Model -->
                                                    <!-- <button type="button" class="btn btn-danger btn-pill" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="mdi mdi-delete-sweep"></i>
                                                        </button> -->
                                                    {{-- </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Pagination Links -->
                            <div class="mx-auto">
                                {{ $user->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            @include('include.footer')
        </div>
    </div>
    @include('include.footerLinks')

</body>

</html>

{{-- Delete Contact Model --}}
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">High Alert!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-dark">
                Are You Sure To Delete This Data
            </div>
            <div class="modal-footer">
                <!-- Button for deleting the user contact -->
                <a href="user/{{ $userData->id }}" class="mb-1 btn btn-danger">Yes</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div> --}}
