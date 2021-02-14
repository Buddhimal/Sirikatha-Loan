var spinner = $('#loader');


$('.blacklist').click(function () {

    var client_pk = $(this).data('client_pk');
    var loan_pk = $(this).data('loan_pk');
    var client_id = $(this).data('client_id');
    var client_name = $(this).data('client_name');

    // alert(client_pk);
    $("#lbl_name").empty();
    $("#lbl_id").empty();
    $("#lbl_name").append(client_name);
    $("#lbl_id").append(client_id);

    $('#client_pk').val(client_pk);
    $('#loan_pk').val(loan_pk);
    $('#reason').val('');

});


$("#frm_blacklist").submit(function(e) {

    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');

    if($('#reason').val()!='') {

        Swal.fire({
            title: 'Do you wnt to add this client to Blacklist?',
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function (data) {
                        alert(data);
                    }
                });
            } else {
                $('#modal-blacklist').modal('toggle')
            }
        })
    } else {
        $('#reason').focus();
    }
});

function approve_loan(id) {

    var url = base_url + "approve_loan?loan_id=" + id;

    Swal.fire({
        title: 'Do you want to Approve this loan?',
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Approve it!'
    }).then((result) => {
        if (result.value) {
            spinner.show();
            $.ajax({
                type: "POST",
                url: url,
                success: function (data, textStatus, jqXHR) {

                    jd = $.parseJSON(data)
                    if (jd.status = 'success') {
                        spinner.hide();
                        location.reload();
                    } else {
                        spinner.hide();
                        alert('Error Approve')
                    }

                }
            });
        }
    })
}
