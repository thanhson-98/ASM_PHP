<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>

<div class="row">
    <div class="col-4">
        <form action="/admin/product/update" method="POST">
            @method('PUT')
            <div class="row justify-content-center">
                <div class="col">
                    <h1>edit form</h1>
                    <input type="hidden" name="id" value="{{$product_in_view -> id}}">
                    {{csrf_field()}}
                    <div class="md-form">
                        <label for="" class="grey-text font-weight-light">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$product_in_view -> name}}">
                    </div>
                    <div class="md-form">
                        <label for="" class="grey-text font-weight-light">Price</label>
                        <input type="text" name="price" class="form-control" value="{{$product_in_view -> price}}">
                    </div>
                    <div class="md-form">
                        <label for="" class="grey-text font-weight-light">Description</label>
                        <input type="text" name="description" class="form-control" value="{{$product_in_view -> description}}">
                    </div>
                    <div class="md-form">
                        <label for="" class="grey-text font-weight-light">Image</label>
                        <input type="text" name="image" class="form-control" value="{{$product_in_view -> image}}">
                        <img src="{{$product_in_view -> image}}" alt="" style="width:200px;">
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>
</html>