var _url = '/api/comments/';

var announceError = function(data) {
    $('#comments > .notifications').html(alertDismissible('danger', data.responseJSON.error));

    if (data.status == 401 && data.responseJSON.code == 13) {
        $('#login').on('click', function(e) {
            $('#comments > .notifications > div').alert('close');
            $('#comments .send.save').addClass('enabled');
        });
    }

    $('html, body').animate({
        scrollTop: $("#comments").offset().top
    }, 1000);
}

$('#comments > .area').comments({
    profilePictureURL: '/images/avatar/' + window._username,
    /*upvoteIconURL: 'static/images/like.png',*/
    textareaRows: 1,
    getComments: function(success, error) {
        setTimeout(function() {
            $.ajax({
                type: 'GET',
                url: _url + _publicacaoId,
                success: function(commentsList) {
                    success(commentsList);
                }
            });
        }, 500);
    },
    postComment: function(data, success, error) {
        data.publicacao_id = _publicacaoId;
        setTimeout(function() {
            $.ajax({
                type: 'POST',
                url: _url.slice(0,-1),
                data: data,
                success: function(comment) {
                    success(comment);
                },
                error: function(e) {
                    announceError(e);
                    error();
                }
            });
        }, 500);
    },
    putComment: function(data, success, error) {
        setTimeout(function() {
            $.ajax({
                type: 'put',
                url: _url + data.id,
                data: data,
                success: function(comment) {
                    success(comment);
                },
                error: function(e) {
                    announceError(e);
                    error();
                }
            });
        }, 500);
    },
    deleteComment: function(data, success, error) {
        setTimeout(function() {
            $.ajax({
                type: 'delete',
                url: _url + data.id,
                success: success,
                error: function(e) {
                    announceError(e);
                    error();
                }
            });
        }, 500);
    },
    upvoteComment: function(data, success, error) {
        var upvoteURL = _url + data.id + '/upvotes';
        setTimeout(function() {
            if (data.user_has_upvoted) {
                $.ajax({
                    type: 'post',
                    url: upvoteURL,
                    data: {
                        comment: data.id
                    },
                    success: function() {
                        success(data);
                    },
                    error: function(e) {
                        announceError(e);
                        error();
                    }
                });
            } else {
                $.ajax({
                    type: 'delete',
                    url: upvoteURL,
                    success: function() {
                        success(data);
                    },
                    error: function(e) {
                        announceError(e);
                        error();
                    }
                });
            }
            success(data);
        }, 500);
    },
});
