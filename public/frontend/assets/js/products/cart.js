$( document ).ready(function() {




    $( document ).on( "click", ".add-cart", function() {
        let id = $(this).data('id');

        let params = {
            'id':id,
            '_token':$('meta[name="token"]').attr('content'),
            'quantity':2
        }

        $.ajax({
            type:'POST',
            url:base_url+'/products/create',
            data:params,
            success:function(json) {
                console.log(json);
            }
        });
    });



    $( document ).on( "click", ".deleteProduct", function() {

        let id = $(this).data('id');
        deleteProduct(id);
    });


    function deleteProduct(id)
    {
        let params = {
            'id':id,
            '_token':$('meta[name="token"]').attr('content')
        }

        $.ajax({
            type:'POST',
            url:base_url+'/products/delete',
            data:params,
            success:function(json) {
                window.location.reload();
            }
        });
    }


});
