var login={
    check:function(){
        var username=$('input[name=username]').val();
        var password=$('input[name=password]').val();
        //var verify=$('input[name=verify]').val();
        var url = "/jfsc/index.php?c=Index&a=login";
        var data = {'username':username,'password':password};
        $.post(url,data,function(result){
            if(result.status==0){
                return dialog.error(result.message);
            }
            if(result.status==1){
                return dialog.success(result.message,"/jfsc/index.php?c=index&a=index");
            }
        },'JSON');

    }
}/**
 * Created by Administrator on 2016/8/19.
 */
