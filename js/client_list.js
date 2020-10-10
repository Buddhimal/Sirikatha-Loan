function inactice_client(id) {

    var url = base_url + "inactive_client?client_id=" + id;

    Swal.fire({
        title: 'Do you want to inactive this client?',
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
                success: function (data, textStatus, jqXHR) {

                    console.log(data);

                    jd = $.parseJSON(data)
                    if (jd.status = 'success') {
                        location.reload();
                    } else {
                        alert('error')
                    }

                }
            });
        }
    })
}
