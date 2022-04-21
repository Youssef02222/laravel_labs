<html>
<head>
    <title>my blog</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <!-- CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous"
    />
    <style>
        background-color: #eee;
    </style>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="navbar-brand nav-link text-light" href="#">ITI Blog</a>
            <a class="nav-item nav-link text-light" href="#">All Posts</a>

        </div>
    </div>
</nav>


<section class="vh-100" style="">
    <div class="container  h-50 ">
        <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="">
                <div class="">
                    <div class="card-body">



                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-success btn-lg">Create Post</button>
                            </div>


                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Posted By</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                           @foreach($tests as $test)
                            <tr>
                                <th scope="row">{{$test['id']}}</th>
                                <td>{{$test['title']}}</td>
                                <td>{{$test['post_creator']}}</td>
                                <td>{{$test['created_at']}}</td>
                                <td>
                                 <button type="submit"  class="btn btn-info">View</button>
                                    <button type="submit" class="btn btn-primary ms-1">Edit</button>

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                           @endforeach
                            <tr>
                                <th scope="row">2</th>
                                <td>Renew car insurance</td>
                                <td>In progress</td>
                                <td>In progress</td>
                                <td>
                                    <button type="submit" class="btn btn-info">View</button>
                                    <button type="submit" class="btn btn-primary ms-1">Edit</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Sign up for online course</td>
                                <td>In progress</td>
                                <td>In progress</td>
                                <td>
                                    <button type="submit" class="btn btn-info">View</button>
                                    <button type="submit" class="btn btn-primary ms-1">Edit</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination" >
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item bg-dark"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"
></script>
</body>
</html>

