<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    @foreach($selectdata as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->class}}</td>
            <td>{{$item->section}}</td>
            <td>{{$item->roll}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>