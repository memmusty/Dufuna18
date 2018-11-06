$(document).ready(function(){
    
    $('#add').click(function(){
        var id=$('#textfield').val();
        $('#list').append("<li>"+id+"</li>");
    });
});