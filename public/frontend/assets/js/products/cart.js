$( document ).ready(function() {




    $( document ).on( "click", ".add-cart", function(event) {
        let id = $(this).data('id');
        event.preventDefault();

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



    $( document ).on( "click", ".deleteProduct", function(event) {

        event.preventDefault();
        let id = $(this).data('id');
        $('#cart_id').val(id);
        $('#deleteCartModal').modal('show');
       // deleteProduct(id);
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

    $( document ).on( "click", "#checkoutPayment", function(event) {
        event.preventDefault();
        window.location.href = base_url+'/payment';
    });



    $( document ).on( "click", "#deleteOK", function(event) {
       let id =  $('#cart_id').val();
        deleteProduct(id)
    });


    $( document ).on( "click", "#lastPayment", function(event) {

        event.preventDefault();

        let params = {
            '_token':$('meta[name="token"]').attr('content')
        }
        $.ajax({
            type:'POST',
            url:base_url+'/order-payment',
            data:params,
            success:function(json) {
                window.location.reload();
            }
        });

    });





});
