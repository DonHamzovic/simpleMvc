

$(function () {


     $.get( 'dashboard/get_Names', function(data){

        console.log(data);

            for (var i = 0; i < data.length; i++) {

               $('#Names'). append('<div>' + data[i].name + '<a class="del" rel="'+data[i].id+'" href="#">X</a></div>'); 
                          
            }


            
 	$('.del').click(function() {
            $thisItem = $(this);
			var id = $(this).attr('rel');
			
            $.post('dashboard/delete_student' ,{id :id} ,function(o) {

               	$thisItem.parent().remove();     
            

            })
			
			return false;
		});

        

     } , 'json');  



    $('#student_insert').submit(function()  {

        var url =$(this).attr('action');
        var data = $(this).serialize();
        alert('essai de inserer un eleve '+data);

        $.post(url ,data , function(o){
         
            $("#Names").append('<div>' + o.name + '<a class="del" rel="'+ o.id +'" href="#">X</a></div>');	

            alert(1);

        },'json')

        return false;
    });

    
});