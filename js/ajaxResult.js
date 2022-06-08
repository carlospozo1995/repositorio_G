$(document).ready(function(){
    load(1);
});

function load(page) {
    let input = document.getElementById('inputSearch').value;

    let url = "http://localhost/carlos/G/dataBase/backend/bkResult.php";

    $.ajax({
        url: url,
        method: 'POST',
        data: {
            valueSearch: input,
            action: 'ajax',
            page:page,
        },
        beforeSend: function(objeto){
       $("#loader").html('<img src="img/loading.gif">');
       },
        complete: function(){
           
        },
        success: function(data){
            $(".container_products").html(data).fadeIn('slow');
            $("#loader").html("");
        },
        error: function(e){
            console.log(e);
        }
    });
}
