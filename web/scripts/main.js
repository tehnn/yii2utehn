
$('#btn_add').click(function () {
    $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('href'));

    return false;
});


$('.mPop').click(function () {
    $('#zmodal').modal('show')
            .find('#zmodalContent')
            .load($(this).attr('href'));

    return false;
});

// serialize form, render response and close modal
function submitForm($form) {
    $.post(
        $form.attr("action"), // serialize Yii2 form
        $form.serialize()
    )
        .done(function(result) {
            $form.parent().html(result.message);
            $('#modal').modal('hide');
        })
        .fail(function() {
            console.log("server error");
            $form.replaceWith('<button class="newType">Fail</button>').fadeOut()
        });
    return false;
}