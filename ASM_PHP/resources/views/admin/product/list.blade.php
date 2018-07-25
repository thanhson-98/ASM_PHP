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
<h1 class="text-center text-uppercase font-weight-bold">List food</h1>
<ul>
    @foreach($products_in_view as $product)
        <div class="row justify-content-center">
            <div class="col-3 mt-3">
                <!-- Card -->
                <div class="card">

                    <!-- Card image -->
                    <img class="card-img-top" src="{{$product -> image}}" alt="Card image cap">

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title"><a>{{$product -> name}}</a></h4>
                        <!-- Text -->
                        <p class="card-text">{{$product -> description}}</p>
                        <!-- Button -->
                        <a href="/admin/product/edit/{{$product -> id}}" class="btn btn-primary">edit</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
    @endforeach
</ul>


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