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
    <div class="pageColumn"><form method="post" action="/new_new_management_system/index.php/Home/Currmanage/search" id="search">
        按照Id查询课程<input type="text" id="sid" name="searchid"/> 按照名称查询课程 <input type="text" id="sname" name="searchname"/>
        <input class="btn btn-primary btn6 mr10"  type="submit" value="查询" /><div style="margin-left:90%"><a href="/new_new_management_system/index.php/Home/Currmanage/add"><h2><font size="3" color="green">添加课程信息</font></h2></a></div>
        
    </form>
        <div style="margin-left:15%">

        </div>
        <div class="pageButton"></div>
        <table>
            <thead>
            <!--<th width="10"><input name="" type="checkbox" value="" /></th>-->
            <th width="12%">id</th>
            <th width="12%">名称</th>
            <th width="12%">学分</th>
            <th width="12%">学时</th>
            <th width="12%">专业</th>
            <th width="12%">学院</th>
            <th width="12%">课程性质</th>
            <th width="12%">课程容量</th>
            <th width="12%">选项</th>
            </thead>
            <tbody>
            <?php if(is_array($curricula_list)): $i = 0; $__LIST__ = $curricula_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <!--<td class="checkBox"><input name="" type="checkbox" value="" /></td>-->
                    <td><?php echo ($vo['id']); ?></td>
                    <td><?php echo ($vo['name']); ?></td>
                    <td><?php echo ($vo['credit']); ?></td>
                    <td><?php echo ($vo['hours']); ?></td>
                    <td><?php $sp=$vo['speciality_id']; switch($sp) { case 1: echo "计算机科学与技术"; break; case 2: echo "自动化"; break; case 3: echo "测控科学与技术"; break; case 4: echo "信息工程"; break; case 5: echo "化学工程"; break; case 6: echo "应用化学"; break; case 7: echo "高分子材料科学与工程"; break; case 8: echo "经济管理"; break; }?>
                    </td>
                    <td><?php $ac=$vo['academy_id']; switch($ac){ case 1: echo "信息科学与技术学院"; break; case 2: echo "化学工程学院"; break; case 3: echo "材料与工程学院"; break; case 4: echo "文法学院"; break; case 5: echo "理学院"; break; case 6: echo "机电工程学院"; break; case 7: echo "经济管理学院"; break; case 8: echo "生命科学与技术学院"; break; case 9: echo "继续教育学院"; break; case 10: echo "职业技术学院"; break; case 11: echo "马克思主义学院"; break; case 12: echo "国际教育学院"; break; case 13: echo "能源学院"; break; case 14: echo "侯德榜工程师学院"; break; default: echo "error!"; break; }?>
                    </td>
                    <td><?php $tp=$vo['type']; switch($tp) { case 1: echo "公共基础必修"; break; case 2: echo "专业必修"; break; case 3: echo "专业选修"; break; case 4: echo "通识"; break; case 5: echo "实践环节必修"; break; }?>
                    </td>
                    <td><?php echo ($vo['contain']); ?></td>
                    <!--<td><a href="/new_new_management_system/index.php/Home/Currmanage/read/id/<?php echo ($vo['id']); ?>"><?php echo ($vo['title']); ?></a></td>-->
                    <td>
                        <a href="/new_new_management_system/index.php/Home/Currmanage/edit/id/<?php echo ($vo['id']); ?>" title="编辑"><img src="/new_new_management_system/Public/Images/admin/icons/pencil.png" alt="编辑" /></a>
                        <a href="/new_new_management_system/index.php/Home/Currmanage/delete/id/<?php echo ($vo['id']); ?>" title="删除"><img src="/new_new_management_system/Public/Images/admin/icons/cross.png" alt="删除" /></a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
            <tfoot>
            <tr>
                <td clospan = "4">
                    <div class="pagination">
      					<font size="4" color="red"><h2><?php echo ($page_method); ?></h2></font>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div></div>
</body>
</html>