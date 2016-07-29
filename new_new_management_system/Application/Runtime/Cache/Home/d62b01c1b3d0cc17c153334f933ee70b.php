<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
    <style type="text/css">
    body {
        background:#FFF
    }
    </style>
        <meta charset="utf-8">
        <title>添加学生信息</title>
        <link rel="stylesheet" type="text/css" href="/new_new_management_system/Public/css/common.css"/>
        <link rel="stylesheet" type="text/css" href="__PUBLIC_/css/main.css"/>

    </head>
    <body>
        <div class="tab-content">
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <table class="insert-tab" width="100%">
            <tbody>
            <tr>
              <td><input class="btn btn10" onclick="location='/new_new_management_system/index.php/Home/Degmessage/teacher'" type="button" value="给教师发送邮件" />  <input class="btn btn10" onclick="location='/new_new_management_system/index.php/Home/Degmessage/student'" value="给学生发送邮件" type="button">
			    <input class="btn btn10" onclick="location='/new_new_management_system/index.php/Home/Degmessage/warning'" value="给学生发送学位警告邮件" type="button"></td>
          </tr>
            <div class="clear"></div>
        </tbody>
        </table>
        </div>
        <!-- End #tab2 -->
    </body>
</html>