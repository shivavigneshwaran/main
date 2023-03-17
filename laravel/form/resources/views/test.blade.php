<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="assets/jquery.js"></script>



</head>
<body>
    <center><form style="width: 50%;" action="{{ route('test2') }}" method="post">


        <div class="mb-3">
          <label for="name" class="form-label">Enter Your name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Remarks</label>
          <input type="text" class="form-control" id="category" name="category">
        </div>

        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
      </form></center>

      {{-- <table class="table">
        <thead>
            <tr>
            <th>id</th>
            <th>category</th>
            <th>remarks</th>
            <th>edit</th>
            <th>Delete</th>
            </tr>

        </thead>
        <tbody>

        </tbody>
      </table>

      <table id="table2">
        <thead>
            <tr>
            <th>id</th>
            <th>product</th>
            <th>price</th>
            <th>edit</th>
            <th>Delete</th>
            </tr>

        </thead>
        <tbody>

        </tbody>
      </table> --}}


</body>

{{-- <script>

    $(document).ready(function(){


            $('#submit').click(function(e){

                e.preventDefault();

                var name = $('#name').val();
                var category = $('#category').val();


                $.ajax({
            url:'test2',
            type:'post',
            data:{
                name:name,
                category:category
            },
            success:function(data){

             //console.log(data[0].category);


            $.each(data,function(key,value){


               var s =  value.length;

                for(var i=0;i<s ;i++){
                    // console.log(value[i].name);



                var row = "<tr id="+value[i].id+"><td>"+value[i].id+"</td><td>"+value[i].name+"</td><td>"+value[i].remarks+"</td><td><button id="+value[i].id+" name='edit'>edit</button></td><td><button id="+value[i].id+">delete</button></td></tr>"
                $(' tbody').append(row);




                }




            });











            }
      });


            });












    });



</script> --}}



</html>

