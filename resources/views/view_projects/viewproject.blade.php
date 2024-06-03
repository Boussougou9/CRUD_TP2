<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 09:08:38 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">


        @include('layouts.header')


        <div class="bread-crumb-bar">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <div class="breadcrumb-list">
                            <h3>Project Grid</h3>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Projects</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Duration</th>
                            <th>Deadline</th>
                            <th>Freelancer T</th>
                            <th>Freelancer L</th>
                            <th>Tags</th>
                            <th>Skills</th>
                            <th>Budget Type</th>
                            <th>Budget From</th>
                            <th>Budget To</th>
                            <th>Fixed</th>
                            <th>Attachment</th>
                            <th>Language</th>
                            <th>Language Fluency</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas ?? [] as $data)
                            <tr>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->category }}</td>
                                <td>{{ $data->duration }}</td>
                                <td>{{ $data->deadline }}</td>
                                <td>{{ $data->freelancer_type }}</td>
                                <td>{{ $data->freelancer_level }}</td>
                                <td>{{ $data->tags }}</td>
                                <td>{{ $data->skills }}</td>
                                <td>{{ $data->budget_type }}</td>
                                <td>{{ $data->budget_from }}</td>
                                <td>{{ $data->budget_to }}</td>
                                <td>{{ $data->fixed_price }}</td>
                                <td>
                                    @if ($data->attachment)
                                        <a href="{{ asset('storage/' . $data->attachment) }}" target="_blank">View</a>
                                    @else
                                        No Attachment
                                    @endif
                                </td>
                                <td>{{ $data->languages }}</td>
                                <td>{{ $data->language_fluency }}</td>
                                <td>{{ $data->description }}</td>
                                <td>
                                    <a href="/update/{{ $data->id }}" class="btn btn-primary">Update</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      


    <script src="assets/js/jquery-3.7.1.min.js" type="5aa7723cc10bd7cf2a34bb37-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="5aa7723cc10bd7cf2a34bb37-text/javascript"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="5aa7723cc10bd7cf2a34bb37-text/javascript"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="5aa7723cc10bd7cf2a34bb37-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="5aa7723cc10bd7cf2a34bb37-text/javascript"></script>

    <script src="assets/js/profile-settings.js" type="5aa7723cc10bd7cf2a34bb37-text/javascript"></script>
    <script src="assets/js/script.js" type="5aa7723cc10bd7cf2a34bb37-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="5aa7723cc10bd7cf2a34bb37-|49" defer></script>
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 09:08:44 GMT -->

</html>
