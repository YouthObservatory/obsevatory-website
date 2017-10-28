// CSRF protection
$.ajaxSetup({
    headers: {
        'X-CSRF-Token': window.csrf_token
    }
});

// Habilita os tooltips
$('[data-toggle="tooltip"]').tooltip();

// Habilita navegação entre abas
$('.nav-tabs a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
});

// Ativa o editor nas páginas onde ele foi inserido
$('.editor').summernote({
    height: 400
});

// Rolagem suave até o alvo
$('a[data="smooth-scroll"]').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 50
            }, 1000);
            return false;
        }
    }
});

// Cria um alerta com botão de fechar
function alertDismissible(context, message) {
    alerta = '<div class="alert alert-' + context + ' alert-dismissible" role="alert">';
    alerta += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    alerta += message + '</div>';
    return alerta;
}

// Contact
$('#contact-send').on('click', function(e) {
    $.ajax({
        type: 'POST',
        url: '/contact',
        data: $('#contact-form').serialize(),
        success: function(response) {
            console.log(response);
            if (response >= 1) {
                $('#contact-alert').html(alertDismissible('success',
                    '<strong>Success!</strong> Your message was sent!'));
                $('#contact-form')[0].reset();
            } else if (response == -1)
                $('#contact-alert').html(alertDismissible('danger',
                    '<strong>Error!</strong> All fields are required!'));
            else
                $('#contact-alert').html(alertDismissible('danger',
                    '<strong>Error!</strong> Your message was not sent!'));
        },
        error: function(response) {
            $('#contact-alert').html(alertDismissible('danger',
                '<strong>Error!</strong> Your message was not sent!'));
        }
    });
    e.preventDefault();
});

// Newsletter Subscribe
$('#newsletter-send').on('click', function(e) {
    $.ajax({
        type: 'POST',
        url: '/newsletter/subscribe',
        data: $('#newsletter-form').serialize(),
        success: function(response) {
            $('#newsletter-alert').html(alertDismissible('success', response.message));
        }
    });
    e.preventDefault();
});

// local url of page (minus any hash, but including any potential query string)
var url = location.href.replace(/#.*/, '');

// Find all anchors
$('#menuPrincipal').find('a[href]').each(function(i, a) {
    var $a = $(a);
    var href = $a.attr('href');

    // check is anchor href starts with page's URI
    if (href.indexOf(url + '#') == 0) {
        // remove URI from href
        href = href.replace(url, '');
        // update anchors HREF with new one
        $a.attr('href', href);
    }

    // Now refresh scrollspy
    $('[data-spy="scroll"]').each(function(i, spy) {
        $(spy).scrollspy('refresh');
    });
});

// Confirm Delete Modal
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
