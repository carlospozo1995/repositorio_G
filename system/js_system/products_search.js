$(document).ready(function() {
    loadResult(1);
});

function loadResult(page) {
    let valueInput = document.getElementById('search_product').value;

    let url = "http://localhost/carlos/G/system/backend_system/bk_search.php";

    $.ajax({
        url: url,
        method: 'POST',
        data: {
            value: valueInput,
            action: 'ajax',
            page:page,
        },
        beforeSend: function(objeto){
            $("#loader").html('<img src="../img_system/loading.gif">');
        },
        complete: function(){
           
        },
        success: function(data){
            $(".search_products").html(data).fadeIn('slow');
            $("#loader").html("");
        },
        error: function(e){
            console.log(e);
        }
    });
}