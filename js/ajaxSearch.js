$(document).ready(function() {

    let inputSearch = document.getElementById('inputSearch');
    let boxSearch = document.getElementById('boxSearch');

    inputSearch.addEventListener('keyup', function (e) {
        let value = e.target.value;
        dataSearch(value);
    })

    function dataSearch(data) {
        let url = "http://localhost/carlos/G/dataBase/backend/bkSearch.php?option=search";

        $.ajax({
            url: url,
            method: 'POST',
            dataType: 'JSON',
            data: {
                sendWord: data,
            },
            beforeSend: function(){

            },
            complete: function(){
    
            },
            success: function(data){
                // console.log(data);
                if (inputSearch.value.length > 2) {
                    let products = '';
                    if (data.length > 0) {
                        for (let i = 0; i < data.length; i++) {
                            products += `
                                <li class="item_search">
                                    <a href="#"><img src="uploads/${data[i].imagen}">${data[i].nombre} - ${data[i].marca}</a>
                                </li>
                            `
                        }
                        boxSearch.style.overflowY = 'scroll';
                    }
                    else{
                        products = `<li class="not_products"> <i class="fa-solid fa-circle-exclamation"></i>No se encontraron productos</li>`;

                        boxSearch.style.overflowY= 'hidden';
                    }
                    boxSearch.style.display = 'block';
                    boxSearch.innerHTML = products;
                }
                else{
                    boxSearch.innerHTML ="";
                }
                
            },
            error: function(){
            }
        });
    }

});
