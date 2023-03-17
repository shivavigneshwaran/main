<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<body>

<form action="{{ url('cate') }}" method="post">
    @csrf

<?=session('message')?>
<select name="cat" id="cat">
    @isset($data)
    @foreach ($data as $datas)
    <option value="{{ $datas->name }}">{{ $datas->name }}</option>
    @endforeach
    @endisset
    </select>
    <label for="">Name:<input type="text" name="name" id="name" ></label>
    <label for="">Remarks:<input type="text" name="remarks" id="remarks"></label>
    {{-- <label for="">sub cate:<input type="text" name="subcat" id="subcat"></label> --}}
    <input type="submit" id="submit" name="submit">



</form>

@isset($name)

<h3>{{ $name }}</h3>


@endisset



</body>

</html>












