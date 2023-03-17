
            $('button[name="edit"]').click(function(e){

e.preventDefault();

var id = this.id;

$.ajax({
    url:'update',
    type:'post',
    data:{
        id:id
    },
    success:function(data){


        //console.log(data);


$.each(data,function(key,value){


var s =  value.length;

for(var i=0;i<s ;i++){


var rows = "<tr id="+value[i].id+"><td>"+value[i].id+"</td><td>"+value[i].product+"</td><td>"+value[i].price+"</td><td><button id="+value[i].id+" name='edit'>edit</button></td><td><button id="+value[i].id+">delete</button></td></tr>"
$('#table2 tbody').append(rows);


}




});



    }

});


//alert("data");


});
