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