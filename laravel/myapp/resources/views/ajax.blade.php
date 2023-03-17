<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form metho="POST"id="form_id">
       {{ csrf_field() }}
        <label>Name:<input type="text" name="name" id="name"></label><br>
        <input type="submit" name="submit" id="submit">

    </form>
<script src="assets/jquery.js"></script>

<script>
    $(document).ready(function(){
        $('#submit').click(function(){
           var name =$('#name').val();
           $.ajax({
            type:'post',
            url:'test',
            data:{
                'name':name
            },
            success:function(response){
                alert(response);
            },
            error:function(jx){
                alert("axjax failed");
            }
           });
        });
    });
</script>

</body>
</html>
