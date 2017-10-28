// Ativa o campo de título para publicação
$('[data="pubtitle"]').each(function() {
    var $this = $(this),
        $input = $this.parent().children(':first-child');

    if ($input.val() != '') {
        $this.text($input.val());
    }

    $this.on('focus', function() {
        if ($this.html().trim() == '<span>Title</span>') {
            $this.text('');
        }
    });

    $this.on('blur', function() {
        if ($this.text() == '') {
            $this.html('<span>Title</span>');
            $input.val('');
        }
    });

    $this.on('keyup', function() {
        $input.val($this.text());
    });
});

$('[data="pubolho"]').each(function() {
    var $this = $(this),
        $input = $this.closest('.page-header').children('input:last-of-type')

    if ($input.val() != '') {
        $this.text($input.val());
    }

    $this.on('focus', function() {
        if ($this.html().trim() == 'Abstract') {
            $this.text('');
        }
    });

    $this.on('blur', function() {
        if ($this.text() == '') {
            $this.html('Abstract');
            $input.val('');
        }
    });

    $this.on('keyup', function() {
        $input.val($this.text());
    });
});

var $uploadCrop,
    $coverInput = $('#cover'),
    $coverPreview = $('.cover');

if (window.coverForm && $coverInput.val() != '') {
    $coverPreview.attr('style', 'background-image: url(\"' + $coverInput.val() + '\")');
}

function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            });
            $('.cover-croppie').addClass('ready');
        }

        reader.readAsDataURL(input.files[0]);
    } else {
        swal("Sorry - you're browser doesn't support the FileReader API");
    }
}

$uploadCrop = $('#cover-croppie').croppie({
    viewport: {
        width: 177,
        height: 100
    },
    boundary: {
        width: 250,
        height: 140
    },
    exif: false
});

$('#cover-upload').on('change', function() {
    readFile(this);
});

$('#cover-save').on('click', function(ev) {
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'original'
    }).then(function(resp) {
        if (!window.coverForm) {
            $.ajax({
                type: 'PUT',
                url: '/api/cover/',
                data: 'cover=' + resp,
                success: function(response) {
                    if (!response.error) {
                        $('#profile-notifications').html(alertDismissible('success',
                            response.message));
                    } else {
                        $('#profile-notifications').html(alertDismissible('danger',
                            response.message));
                    }
                }
            });
        } else $coverInput.val(resp);

        $coverPreview.attr('style', 'background-image: url(\"' + resp + '\")');
        $('#coverModal').modal('toggle');
    });
});
