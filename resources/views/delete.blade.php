<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>form</title>
</head>
<body class="m-5">
        <input type="text" id="my_id" placeholder="Your Id"><br><br>
       
        <button class="btn btn-primary" onclick="delete_data()">Deleta</button>

        <script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
</body>
</html>