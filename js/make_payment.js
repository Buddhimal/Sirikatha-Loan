$("#btn_update").on("click", function (e) {
    e.preventDefault();

    if (validate()) {
        Swal.fire({
            title: 'Are you sure?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }).then((result) => {
            if (result.value) {
                $("#payment_data").submit();
            }
        })
    }
});


window.setInterval(() => {
    if ($('#amount_paid').val() != "" && $('#amount_paid').val() != null && $('#amount_paid').val() > 0) {

        $('#amount_paid').removeClass("parsley-error");
        $('#amount_paid_span').html('<span></span>');
    }
    if ($('#datepicker-autoClose').val() != "" && $('#datepicker-autoClose').val() != null) {
        $('#date_paid').removeClass("parsley-error");
        $('#date_paid_span').html('<span></span>');
    }


}, 500);


function validate() {
    var error;

    if ($('#amount_paid').val() == "" || $('#amount_paid').val() == null) {
        $('#amount_paid_span').html('<span style="color:red;">Enter Paid Amount</span>');
        error = true;
    }
    if ($('#amount_paid').val() <= 0) {
        $('#amount_paid_span').html('<span style="color:red;">Amount must be grater than 0</span>');
        error = true;
    }
    if ($('#datepicker-autoClose').val() == "" || $('#datepicker-autoClose').val() == null) {
        $('#date_paid_span').html('<span style="color:red;">Select Paymet Date</span>');
        error = true;
    }


    return !error;
}