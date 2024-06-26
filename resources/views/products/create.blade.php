<!doctype html>
<html lang="en">
    <head>
        <title>Create</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-warning">
            <div class="container">
                <a class="navbar-brand btn btn-info" href="/">Products</a>
            </div>
        </nav>

        @if(Session::has('Success'))
        <div class="alert alert-success alert-block">
            <strong>Successfully Created</strong>
        </div>
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="card mt-3 p-3">
                        <form action={{route('products.store')}} method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    value="{{old('name')}}"
                                    class="form-control"
                                    placeholder="Enter Name"/>
                            </div>
                            @if($errors->has('name'))
                            <span class="text-danger">name field is requried</span>
                            @endif

                            <div class="form-group mb-3">
                                <label for="des" class="form-label">Description</label>
                                <textarea name="description" id="des" rows="4" class="form-control"></textarea>

                            </div>

                            @if($errors->has('description'))
                            <span class="text-danger">Description field is requried</span>
                            @endif
                            <div class="form-group mb-3">
                                <label for="image" class="form-label">image</label>
                                <input
                                    type="file"
                                    name="image"
                                    id="image"
                                    class="form-control"/>
                            </div>
                            @if($errors->has('image'))
                            <span class="text-danger">Check image size</span>
                            @endif
                            <button type="submit" class="btn btn-outline-info">Submit</button>



                        </form>

                    </div>

                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
