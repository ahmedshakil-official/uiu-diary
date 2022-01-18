$(document).on('submit','#userForm',function(e){
        e.preventDefault();
       
        $.ajax({
        method:"POST",
        url: "php-script.php",
        data:$(this).serialize(),
        success: function(data){
        $('#msg').html(data);
        $('#userForm').find('input').val('')
    }});
});

$(document).on('click','#showData',function(e){
      $.ajax({    
        type: "GET",
        url: "backend-script.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#table-container").html(data); 
           
        }
    });
});

var deleteData = function(id){
    $.ajax({    
        type: "GET",
        url: "delete-data.php", 
        data:{deleteId:id},            
        dataType: "html",                  
        success: function(data){   
        $('#msg').html(data);
       $('#table-container').load('fetch-data.php');
           
        }
    });
};