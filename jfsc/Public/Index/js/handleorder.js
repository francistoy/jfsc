$('.deleteorder').click(function()
{
   var oid=$(this).attr('attr-id');
    layer.confirm('是否删除订单', {
        btn: ['确定', '取消'] //按钮
    }, function() {
        loading("正在删除...");
        var url="/jfsc/index.php?c=Jifen&a=handleord&status=-1";
        var query = new Object();
        query.order_num = oid;
        $.post(url,query,function(result)
        {
            if(result.status==1)
            {
                layer.closeAll();
                return dialog.success('成功删除订单',"");
            }
        },'json');
    },function(){});
});
$('.sureorder').click(function()
{
    var oid=$(this).attr('attr-id');
    layer.confirm('确认收货？', {
        btn: ['确定', '取消'] //按钮
    }, function() {
        loading("正在处理...");
        var url="/jfsc/index.php?c=Jifen&a=handleord&status=4";
        var query = new Object();
        query.order_num = oid;
        $.post(url,query,function(result)
        {
            if(result.status==1)
            {
                layer.closeAll();
                return dialog.success('确认收货成功','');
            }
        },'json');
    },function(){});
});
$('.goorder').click(function()
{
    var oid=$(this).attr('attr-id');
    layer.confirm('确认发货？', {
        btn: ['确定', '取消'] //按钮
    }, function() {
        loading("正在处理...");
        var url="/jfsc/index.php?c=Jifen&a=handleord&status=3";
        var query = new Object();
        query.order_num = oid;
        $.post(url,query,function(result)
        {
            if(result.status==1)
            {
                layer.closeAll();
                return dialog.success('已成功发货','/jfsc/admin.php?c=Order&a=orderindex&status=3');
            }
        },'json');
    },function(){});
});
function loading(msg)
{
    layer.msg(
        msg, {
            icon: 16,
            time: 0,
            shade: [0.5, '#000']
        });
}