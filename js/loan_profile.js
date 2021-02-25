var spinner = $('#loader');


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


$('.reject').click(function () {

    var client_pk = $(this).data('client_pk');
    var loan_pk = $(this).data('loan_pk');
    var loan_id = $(this).data('loan_id');

    // alert(client_pk);
    $("#lbl_name").empty();
    $("#lbl_id").empty();
    $("#lbl_id").append(loan_id);

    $('#client_pk').val(client_pk);
    $('#loan_pk').val(loan_pk);
    $('#reason').val('');

});

$('.cancel').click(function () {

    var payment_id = $(this).data('payment_id');

    $('#pay_payment_id').val(payment_id);
    $('#pay_reason').val('');

});


$("#frm_reject").submit(function (e) {

    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');

    if ($('#reason').val() != '') {

        Swal.fire({
            title: 'Do you want to reject this loan?',
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it!'
        }).then((result) => {
            spinner.show();
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function (data) {
                        var result = $.parseJSON(data);

                        if (result.status == "success") {
                            spinner.hide();
                            Swal.fire({
                                title: "Process Completed",
                                type: 'success',
                                text: "Loan Rejected successfully",
                                buttons: true
                            }).then((result) => {
                                location.reload();
                            });
                        } else {
                            spinner.hide();
                            Swal.fire({
                                title: "Process In-completed",
                                type: 'error',
                                text: "Unable to reject the loan",
                                buttons: true
                            }).then((result) => {
                                // location.reload();
                            });
                        }
                    }
                });
            } else {
                $('#modal-reject').modal('toggle')
            }
        })
    } else {
        $('#reason').focus();
    }
});


$("#frm_cancel").submit(function (e) {

    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');

    if ($('#pay_reason').val() != '') {

        Swal.fire({
            title: 'Do you want to Cancel this payment?',
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it!'
        }).then((result) => {
            spinner.show();
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function (data) {
                        var result = $.parseJSON(data);

                        if (result.status == "success") {
                            spinner.hide();
                            Swal.fire({
                                title: "Process Completed",
                                type: 'success',
                                text: "Payment Canceled successfully",
                                buttons: true
                            }).then((result) => {
                                location.reload();
                            });
                        } else {
                            spinner.hide();
                            Swal.fire({
                                title: "Process In-completed",
                                type: 'error',
                                text: "Unable to Cancel the Payment",
                                buttons: true
                            }).then((result) => {
                                // location.reload();
                            });
                        }
                    }
                });
            } else {
                $('#modal-reject').modal('toggle')
            }
        })
    } else {
        $('#pay_reason').focus();
    }
});
