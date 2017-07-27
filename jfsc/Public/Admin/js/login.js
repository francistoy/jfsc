var login={
    check:function(){
        var username=$('input[name=username]').val();
        var password=$('input[name=password]').val();
        var verify=$('input[name=verify]').val();
        var url = "/jfsc/admin.php?c=login&a=check";
        var data = {'username':username,'password':password,'verify':verify};
        $.post(url,data,function(result){
            if(result.status==0){
                return dialog.error(result.message);
            }
            if(result.status==1){
                return dialog.success(result.message,"/jfsc/admin.php?c=index&a=index");
            }
        },'JSON');

    }
}
