<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息</title>
<link href="/new_new_management_system/Public/images/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/new_new_management_system/Public/css/common.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC_/css/main.css"/>
<script type="text/javascript" src="/new_new_management_system/Public/javascript/jquery.min.js"></script>
<style type="text/css">
body {
	background:#FFF
}
</style>
</head>
<body>

<div id="contentWrap">
<div class="pageTitle"></div>
<div class="pageColumn">
		<div style="margin-left:90%"><a href="/new_new_management_system/index.php/Home/Sysmessage/add"><h2><font size="3" color="green">添加系统消息</font></h2></a></div>
<div class="pageButton"></div>
	<table>
      <thead>
      <!--<th width="10"><input name="" type="checkbox" value="" /></th>-->
      <th width="25%">id</th>
        <th width="25%">时间</th>
        <th width="25%">标题</th>
        <th width="25%">选项</th>
          </thead>
      <tbody>
  		<?php if(is_array($notification_list)): $i = 0; $__LIST__ = $notification_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
          <!--<td class="checkBox"><input name="" type="checkbox" value="" /></td>-->
          <td><?php echo ($vo['id']); ?></td>
          <td><?php echo ($vo['time']); ?></td>
          <td><a href="/new_new_management_system/index.php/Home/Sysmessage/read/id/<?php echo ($vo['id']); ?>"><font color="green"><?php echo ($vo['title']); ?></font></a></td>
          <td>
  			<a href="/new_new_management_system/index.php/Home/Sysmessage/edit/id/<?php echo ($vo['id']); ?>" title="编辑"><img src="/new_new_management_system/Public/Images/admin/icons/pencil.png" alt="编辑" /></a>
  			<a href="/new_new_management_system/index.php/Home/Sysmessage/delete/id/<?php echo ($vo['id']); ?>" title="删除"><img src="/new_new_management_system/Public/Images/admin/icons/cross.png" alt="删除" /></a>
		</td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
  	<tfoot>
  		<tr>
			<td></td>
			<td></td>
			<td></td>
  			<td clospan = "5">
  				<div class="pagination" style="margin-left:63%">
  					<font size="4" color="red"><h2><?php echo ($page_method); ?></h2></font>
			</td>
  		</tr>
  	</tfoot>
    </table>
</div>
</div></div>
</body>
</html>