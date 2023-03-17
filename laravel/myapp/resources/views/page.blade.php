<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/jquery.js"></script>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>

@foreach ($data as $datas)

<h1>{{ $datas->category }}</h1>

@endforeach



    <center><form style="width: 50%;" id="frm">

        <div class="mb-3">
          <label for="name" class="form-label">enter Your name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">category</label>
          <input type="text" class="form-control" id="category" name="category">
        </div>

        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
      </form></center>

</body>


<script>

    $(document).ready(function(){


        $('#submit').click(function(event){
    event.preventDefault();
    var name = $('#name').val();
    var category = $('#category').val();


    $.post('test2',{
        name:name,
        category:category


    },function(data){
       alert('submited');
    });
});




    });



</script>

</html>
