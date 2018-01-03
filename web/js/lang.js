/**
 * Created by User on 08.12.2017.
 */
$(function() {
    $(document).on('click','.language', function(){
        var lang = $(this).attr('id');
        $.get('/site/language',{'lang':lang},function (data) {
            location.reload();
        });
    });
});