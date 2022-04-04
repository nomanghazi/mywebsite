<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $item)
<tr><td>{{ $item->id }} </td><br>
    <td>{{ $item->name }} </td><br>
    <td>{{ $item->mail }} </td><br>
    <td>{{ $item->phone }} </td><br>
    <td>{{ $item->adress }} </td> </tr>
   
@endforeach

</body>
</html>