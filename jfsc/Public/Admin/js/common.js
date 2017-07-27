 //添加按钮
$('#button-add').click(function()
{
    var url=SCOPE.add_url;
    window.location.href=url;
});

//删除按钮
 $('.jfsc-delete').click(function()
 {
     var id=$(this).attr('attr-id');
     var data={'id':id,};
     var url=SCOPE.delete_url;
     layer.open(
         {
         'title':'是否删除?',
         btn:['yes','no'],
         icon:3,
         closeBtn:2,
         content:'是否确定删除',
         scrollbar:true,
         yes:function(){
             gotodelete(url,data,SCOPE.jump_url);
         }
     });
 });
 //更改状态按钮
 $('.jfsc-reset').click(function()
 {
     var id=$(this).attr('attr-id');
     var status=$(this).attr('attr-status');
     var data={'id':id,'status':status};
     var url=SCOPE.reset_url;
     layer.open({
         title: '在线调试'
         ,content: '可以填写任意的layer代码'
     });
 });

 function gotodelete(url,data,jumpurl)
 {
     $.post(url,data,function(result)
     {
         if(result.status==1)
         {
           return dialog.success(result.message,jumpurl);
         }
         if(result.status==0)
         {
             return dialog.error(result.message);
         }
     },'JSON');
 }

 //新增信息
$('#jfsc-button-submit').click(function()
{
     var data =$('#jfsc-form').serializeArray();
     var postdata={};
     var url =SCOPE.save_url;
      $(data).each(function(i)
      {
          postdata[this.name]=this.value;
      });
    console.log(postdata);
    $.post(url,postdata,function(result)
    {
        if(result.status==1)
        {
            return dialog.success(result.message,SCOPE.jump_url);
        }
        if(result.status==0)
        {
            return dialog.error(result.message);
        }
    },'JSON');
 });
 //保存信息
 $('#jfsc-button-change').click(function()
 {
     var data =$('#jfsc-form').serializeArray();
     var postdata={};
     var url =SCOPE.change_url;
     $(data).each(function(i)
     {
         postdata[this.name]=this.value;
     });
     console.log(postdata);
     $.post(url,postdata,function(result)
     {
         if(result.status==1)
         {
             return dialog.success(result.message,SCOPE.jump_url);
         }
         if(result.status==0)
         {
             return dialog.error(result.message);
         }
     },'JSON');
 });
 $('.pagego').click(function()
 {
     var page=$(".yeshu").val();
     var type=$('.getypename').val();
     var cid=$('.getcid').val();
     var p_Name=$('.p_Name').val();
     var status=$('.status').val();
     var order_num=$('.order_num').val();
     var user_name=$('.user_name').val();
     if(isNaN(page))
     {
         return dialog.error("输入的并不是数量");
     }
     window.location.href=SCOPE.yeshu_url+"&page="+page+"&type="+type+"&cid="+cid+"&id="+cid+"&p_Name="+p_Name+"&status="+status+"&order_num="+order_num+"&user_name="+user_name;
 });

