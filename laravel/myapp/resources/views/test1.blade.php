<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/jquery.js"></script>
</head>
<body>

<form >
    {{-- @csrf --}}
    <label>Name:<input type="text" name="name" id="name"></label>
    <label>Remarks:<input type="text" name="remarks" id="remarks"></label>
    <button name="submit" id="submit" >submit</button>

</form>

 {{-- <button id="button">test</button> --}}

<ul id="sam">

</ul>



<script>

// var a ={"name":"vicky","city":"erode"};

$(document).ready(function(){



$('#submit').click(function(event){
    event.preventDefault();

    var c = $('#name').val();
    var r = $('#remarks').val();
$.ajax({
    url:'test3',
    type:'post',
    data:{
        name:c,
        remarks:r
    },
    success:function(data){

$.each(data,function(key,value){

    // alert(value);

    var student='';

    student += '<li>' +value + '</li>';

$('#sam').append(student);

});
    },
    error:function(error){

        alert(error);

    }
});
});
});


</script>

</body>
</html>
