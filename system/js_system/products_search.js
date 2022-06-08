$(document).ready(function(){
    loadSearch();
});

function loadSearch() {
    let searchInput = document.getElementById('search_product').value;
    let url = "http://localhost/carlos/G/system/backend_system/bk_search.php";

    $.ajax({
        url: url,
        method: 'POST',
        data: {
            valueSearch: searchInput,
        },
        beforeSend: function(objeto){
    //    $("#loader").html('<img src="img/loading.gif">');
       },
        complete: function(){
           
        },
        success: function(data){
            // console.log(data);
            $(".list_products_searh").html(data).fadeIn('slow');
            // $("#loader").html("");
        },
        error: function(e){
            console.log(e);
        }
    });

}