$(function(){
    var COOKIE_NAME='username';
    if($.cookie(COOKIE_NAME)&&($.cookie(COOKIE_NAME)!="null"))
    {

        $('#username').val($.cookie(COOKIE_NAME));

    }
    $('#check').click(function(){
        if(this.checked)
        {
            $.cookie(COOKIE_NAME, $('#username').val(),{expires:7});
            console.log($.cookie(COOKIE_NAME));
        }
        else
        {
            $.cookie(COOKIE_NAME,null);
        }
    })
});