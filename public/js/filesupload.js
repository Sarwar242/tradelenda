$(document).on('change', '#propic', function() {
    var files = $('#propic')[0].files;

    if (files.length > 0) {
        var fd = new FormData();

        // Append data
        fd.append('file', files[0]);
        // fd.append('_token', CSRF_TOKEN);

        // Hide alert
        $('#responseMsg').hide();

        // AJAX request
        //here
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/personalinfo/profic",
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                // Show image container
                $("#stat").text('Uploading');
            },
            success: function(response) {
                console.log(response);
                // $("#mydiv").load(location.href + " #mydiv");


                if (response.success == true) { // Uploaded successfully
                    $('#stat').text(response.message);


                    $('#uploadProfilePictureTab').fadeOut(800, function() {
                        $('#stat').text(response.message);
                        window.location.reload();

                    });

                } else {
                    // Display Error
                    $('#stat').text("Upload Failed");
                }
            },
            error: function(response) {
                console.log("error : " + JSON.stringify(response));
            }
        });
    }
});

//Bank Statement

$(document).on('change', '#bankStatementFileUpload', function() {
    var files = $('#bankStatementFileUpload')[0].files;

    if (files.length > 0) {
        var fd = new FormData();

        // Append data
        fd.append('file', files[0]);
        // fd.append('_token', CSRF_TOKEN);

        // AJAX request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/financialinfo/bank_statement",
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                // Show image container
                $("#stat5").text('Uploading to the cloud!');
            },
            success: function(response) {
                console.log(response);

                if (response.success == true) { // Uploaded successfully
                    $('#stat5').text(response.message);

                } else {
                    // Display Error
                    $('#stat5').text("Upload Failed");
                }
            },
            error: function(response) {
                console.log("error : " + JSON.stringify(response));
            }
        });
    }
});



//Seal Upload

$(document).on('change', '#sealFileUpload', function() {
    var files = $('#sealFileUpload')[0].files;

    if (files.length > 0) {
        var fd = new FormData();

        // Append data
        fd.append('file', files[0]);
        //fd.append('_token', CSRF_TOKEN);


        // AJAX request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/businessinfo/seal",
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                // Show image container
                $("#stat0").text('Uploading to the cloud!');
            },
            success: function(response) {
                console.log(response);

                if (response.success == true) { // Uploaded successfully
                    $('#stat0').text(response.message);

                } else {
                    // Display Error
                    $('#stat0').text("Upload Failed");
                }
            },
            error: function(response) {
                console.log("error : " + JSON.stringify(response));
            }
        });
    }
});


//cacCertificateFileUpload

$(document).on('change', '#cacCertificateFileUpload', function() {
    var files = $('#cacCertificateFileUpload')[0].files;

    if (files.length > 0) {
        var fd = new FormData();
        // Append data
        fd.append('file', files[0]);
        // fd.append('_token', CSRF_TOKEN);

        // AJAX request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/businessinfo/cacCertificate",
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                // Show image container
                $("#stat4").text('Uploading to the cloud!');
            },
            success: function(response) {
                console.log(response);

                if (response.success == true) { // Uploaded successfully
                    $('#stat4').text(response.message);

                } else {
                    // Display Error
                    $('#stat4').text("Upload Failed");
                }
            },
            error: function(response) {
                console.log("error : " + JSON.stringify(response));
            }
        });
    }
});



//cac2FileUpload

$(document).on('change', '#cac2FileUpload', function() {
    var files = $('#cac2FileUpload')[0].files;

    if (files.length > 0) {
        var fd = new FormData();
        // Append data
        fd.append('file', files[0]);
        //fd.append('_token', CSRF_TOKEN);

        // AJAX request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/businessinfo/cac2FileUpload",
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                // Show image container
                $("#stat3").text('Uploading to the cloud!');
            },
            success: function(response) {
                console.log(response);

                if (response.success == true) { // Uploaded successfully
                    $('#stat3').text(response.message);

                } else {
                    // Display Error
                    $('#stat3').text("Upload Failed");
                }
            },
            error: function(response) {
                console.log("error : " + JSON.stringify(response));
            }
        });
    }
});



//cac7FileUpload

$(document).on('change', '#cac7FileUpload', function() {
    var files = $('#cac7FileUpload')[0].files;

    if (files.length > 0) {
        var fd = new FormData();
        // Append data
        fd.append('file', files[0]);
        //fd.append('_token', CSRF_TOKEN);

        // AJAX request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/businessinfo/cac7FileUpload",
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                // Show image container
                $("#stat2").text('Uploading to the cloud!');
            },
            success: function(response) {
                console.log(response);

                if (response.success == true) { // Uploaded successfully
                    $('#stat2').text(response.message);

                } else {
                    // Display Error
                    $('#stat2').text("Upload Failed");
                }
            },
            error: function(response) {
                console.log("error : " + JSON.stringify(response));
            }
        });
    }
});