$(document).ready(function(){
    load(1);
});

function load(page) {
    let idGet = document.getElementById('option_id').value;

    let url = "http://localhost/carlos/G/dataBase/backend/bkCategory.php";

    $.ajax({
        url: url,
        method: 'POST',
        data: {
            valueId: idGet,
            action: 'ajax',
            page:page,
        },
        beforeSend: function(objeto){
            $("#loader").html('<img src="img/loading.gif">');
        },
        complete: function(){
           
        },
        success: function(data){
            $(".container_category").html(data).fadeIn('slow');
            $("#loader").html("");
        },
        error: function(e){
            console.log(e);
        }
    });

}










