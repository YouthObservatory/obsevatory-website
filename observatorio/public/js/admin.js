$("[name='toggle-news']").bootstrapSwitch({
    onSwitchChange: function(e) {
        $.ajax({
            type: 'PUT',
            url: '/api/admin/publication/' + this.getAttribute('data-id'),
            error: function(err) {
                $(e.target).bootstrapSwitch('toggleState', true);
                // TODO: Adicionar aviso responsivo para o usuário
            }
        })
    }
});

$('.permission-form').submit(function(e) {
    $.ajax({
        type: 'PUT',
        url: this.getAttribute('action'),
        data: $(e.target).serialize(),
        success: function(res) {
            console.log(res);
            // TODO: Adicionar aviso responsivo
        },
        error: function(err) {
            console.log(err);
            // TODO: Adicionar aviso responsivo
        }
    })

    e.preventDefault();
});
