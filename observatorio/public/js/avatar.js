var $uploadCrop,
    $avatarInput = $('#avatar'),
    $avatarPreview = $('.avatar');

if (window.avatarForm && $avatarInput.val() != '') {
    $avatarPreview.attr('style', 'background-image: url(\"' + $avatarInput.val() + '\")');
}

function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            });
            $('.avatar-croppie').addClass('ready');
        }

        reader.readAsDataURL(input.files[0]);
    } else {
        swal("Sorry - you're browser doesn't support the FileReader API");
    }
}

$uploadCrop = $('#avatar-croppie').croppie({
    viewport: {
        width: 128,
        height: 128,
        type: 'circle'
    },
    boundary: {
        width: 250,
        height: 250
    },
    exif: false
});

$('#avatar-upload').on('change', function() {
    readFile(this);
});

$('#avatar-save').on('click', function(ev) {
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function(resp) {
        if (!window.avatarForm) {
            $.ajax({
                type: 'PUT',
                url: '/api/avatar/',
                data: 'avatar=' + resp,
                success: function(response) {
                    if (!response.error) {
                        $('#profile-notifications').html(alertDismissible('success',
                            response.message));
                    } else {
                        $('#profile-notifications').html(alertDismissible('danger',
                            response.message));
                    }
                },
                error: function(response) {
                    // TODO: Colocar aviso de erro mais legível, usando os campos de resposta do JSON
                    $('#profile-notifications').html(alertDismissible('danger',
                        'Something went wrong'));
                }
            });
        } else $avatarInput.val(resp);

        $avatarPreview.attr('style', 'background-image: url(\"' + resp + '\")');
        $('#avatarModal').modal('toggle');
    });
});
