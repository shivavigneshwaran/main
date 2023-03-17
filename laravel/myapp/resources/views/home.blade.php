<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="assets/jquery.js"></script>



    <title>Document</title>
</head>
<body>
    {{-- <button id="shw_frm">show form</button> --}}


    </table>
<form id="form_data" >
    @csrf
    <label>Name:<input type="text" name="name" id="name" value=""></label>
    <label>Remarks:<input type="text" name="remarks" id="remarks" value=""></label>
    <input type="submit" name="submit" id="submit" >

</form>


<div id="cat">
    <p></p>
</div>

<table>


    <thead>
        <tr>
             <th>Id</th>
            <th>Category</th>
            <th>Remarks</th>
            {{-- <th>edit</th>
            <th>delete</th> --}}


        </tr>


    </thead>
<tbody>




</tbody>


<meta  name="csrf-token" content="{{ csrf_token() }}">
<script>

$(document).ready(function(){

    $('#submit').click(function(event){
        event.preventDefault();
        var name = $('#name').val();
        var remarks = $('#remarks').val();
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'cate',
            type:'post',
            data:$('#form_data').serialize(),
            dataType:'json',
            success:function(data){

            console.log(data);


            },
            error:function(error){
                alert(error)
            }
        });

    });



});

</script>

</body>
</html>
