$(document).ready(function(){
    load(1);
});

function load(page) {
    

    let url = "http://localhost/carlos/G/system/backend_system/bk_products.php";

    $.ajax({
        url: url,
        data: {
            action: 'ajax',
            page:page,
        },
        beforeSend: function(objeto){
            $("#loader").html('<img src="../img_system/loading.gif">');
        },
        complete: function(){
           
        },
        success: function(data){
            // console.log(data);
            $(".list_products").html(data).fadeIn('slow');
            $("#loader").html("");
        },
        error: function(e){
            console.log(e);
        }
    });

}
