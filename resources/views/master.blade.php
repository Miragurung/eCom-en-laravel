<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    

</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-decoration-color: ghostwhite;
        background-image: url(https://img.freepik.com/free-photo/trendy-female-with-cocktail-shopping-bags_23-2148170087.jpg?size=626&ext=jpg);
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 150px;
    }
    .trening-item{
        float: left;
        width: 32%;
        background-color: ghostwhite;
        
    }
    .trending-wrapper{
        margin: 40px;
    }
    .detail-img{
        height: 300px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 50px;
        padding-bottom: 100px;
        background-color: floralwhite;
    }
body{
        background-color:rgb(243, 237, 237);
    }
.navbar{
    background-color:rgb(250, 112, 112);
    
}
button{
    background-color: dimgrey;
}
h3{
    text-decoration-color: black;
    background-color: rgb(248, 201, 201);
    text-decoration-style: dashed;
    tex
}
h1{

    
    background-size:5000px 5000px;
    background-repeat:no-repeat;
    background-image:url(https://img.freepik.com/free-photo/girl-holds-fashion-shopping-bag-beauty_1150-13673.jpg?size=626&ext=jpg);
}

</style>
</html>