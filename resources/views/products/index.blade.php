<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
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
                <a class="navbar-brand btn btn-info" href="/">All Products</a>
            </div>
        </nav>
        <div class="container col-sm-8">
            <div style="text-align: right">
                <a class="btn btn-outline-danger mt-2" href={{route('products.create')}}>New Product</a>
            </div>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product )
                    <tr>
                        <td>{{$product->id}}</td>

                        <td><img
                            src="/products/{{$product->image}}"
                            class="rounded-circle" width="50px" height="50px"
                            alt="image"/>
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <a href="product/{{$product->id}}/edit" class="btn btn-outline-success">Edit</a>
                            <a href="product/{{$product->id}}/delete" class="btn btn-outline-info">Delete</a>
                            <a href="product/{{$product->id}}/view" class="btn btn-outline-warning">View</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
        {{-- {{$products->links()}} --}}
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
