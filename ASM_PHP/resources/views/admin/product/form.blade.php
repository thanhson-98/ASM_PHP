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
<div class="row justify-content-center">
    <div class="col-3">
        <div class="text-center">
            <img src="http://phunuthoinay.vn/wp-content/uploads/2017/02/1_91247494-2017-02-9.jpg"
                 style="width: 200px" alt="">
        </div>
        <form action="/admin/product/store" method="POST">
        {{ csrf_field() }}
        <!-- Default input Name -->
            <div class="md-form">
                <label for="" class="grey-text font-weight-light">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="md-form">
                <label for="" class="grey-text font-weight-light">Price</label>
                <input type="text" name="price" class="form-control">
            </div>

            <div class="md-form">
                <label for="" class="grey-text font-weight-light">Description</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div class="md-form">
                <label for="" class="grey-text font-weight-light">Image</label>
                <input type="text" name="image" class="form-control">
            </div>

            {{--<label for="" class="grey-text font-weight-light">Type</label>--}}
            {{--<section name = typeId>--}}
                {{--<div class="custom-control custom-checkbox">--}}
                    {{--<input type="checkbox" class="custom-control-input" id="nho_1" value="1">--}}
                    {{--<label class="custom-control-label" for="nho_1">Loại nhỏ</label>--}}
                {{--</div>--}}
                {{--<div class="custom-control custom-checkbox">--}}
                    {{--<input type="checkbox" class="custom-control-input" id="vua_1" value="2">--}}
                    {{--<label class="custom-control-label" for="vua_1">Loại vừa</label>--}}
                {{--</div>--}}
                {{--<div class="custom-control custom-checkbox">--}}
                    {{--<input type="checkbox" class="custom-control-input" id="lon_1" value="3">--}}
                    {{--<label class="custom-control-label" for="lon_1">Loại lớn</label>--}}
                {{--</div>--}}
            {{--</section>--}}
            <div class="text-center py-4 mt-3">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-primary" type="reset">clean</button>
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