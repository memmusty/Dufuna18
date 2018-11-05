$(document).ready(function(){
    
    $('#add').click(function(){
        var id=$('#textfield').val();
        console.log(id);
        $('#list').append("<li>"+id+"</li>");
    });
});