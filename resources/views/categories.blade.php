<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Categories Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand text-danger text-uppercase" href="/categories"> Moustafa <span class="text-light"> ibrahim </span></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="collapsibleNavId">
            <ul class="navbar-nav mt-2 mt-lg-0 ">
                <li class="nav-item active">
                    <a class="nav-link active" href="/categories">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/brands">Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Products</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <h1>Add New Category</h1>
                <form action="/categories" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Category name </label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"
                            placeholder="Enter Category name">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-8">
                <h1 class="text-center"> All Categories </h1>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>updateded At</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td class="text-primary">{{$category->name}}</td>
                            <td class="text-danger">{{$category->category_id}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td>

                                <!-- Button Edit trigger modal -->
                                <a href="/categories/{{$category->id}}/edit" type="button" title="Delete {{$category->name}} " class="btn btn-sm btn-success" >
                                    Edit
                                </a>
                                <!-- Button Delete trigger modal -->
                                    <button type="button" title="Delete {{$category->name}} " class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal{{$category->id}}">
                                        X
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            Are You Sure You want To delete <b> {{$category->name}}  </b> ?
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <a href="/categories/delete/{{$category->id}}" type="button" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                            </td>
                            <td></td>
                        </tr>
                        @empty
                            <tr>
                                <td> - </td>
                                <td colspan="4" class="text-danger"> No information yet you must put information to show it fo you</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>



    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
