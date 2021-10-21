$(document).ready(function () {


    $(document).on('click', '.deleteAction', function (event) {
        let id = $(this).data('id');
        $('#item_id').val(id);
        $('#showModalAction').modal('show')
    });

    $('#showModalAction').on('show.bs.modal', function (event) {
       // alert('Modal')
    });


    $(document).on('click', '#deleteSubmit', function (event) {

        var id  = $('#item_id').val();
        getMessage(id);

    });


    function getMessage(id) {
        let urlDelete  = $('#urlDelete').val();
        let params = {
            'id':id,
            '_token':$('meta[name="csrf-token"]').attr('content')
        }
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     }
        // });

        $.ajax({
            type:'POST',
            url:urlDelete,
            data:params,
            success:function(data) {
                $("#msg").html(data.msg);
            }
        });
    }

});
