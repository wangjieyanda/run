<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__PUBLIC__/admin/style/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
</head>
<body background='images/allbg.gif' leftmargin='8' topmargin='8'>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6">
  <tr>
    <td height="28" background="__PUBLIC__/admin/images/tbg.gif" colspan="8" style="padding-left:10px;">
  <div style="float:left">
  	<b>友情链接管理</b>
	</div>
	<div style="float:right;padding-right:6px;">
		[<a href="__GROUP__/Links/add"><u>增加链接</u></a>]
  </div>
  </td>
</tr>
<tr>
   <td height="30" align="center" bgcolor="#F9FCEF"  colspan="8"> 
   <form action="__URL__/index" name="form1" method="post">
   <input type="hidden" name="search" value="search"/>
	  <table border="0" cellspacing="0" cellpadding="3">
      <tr>
          <td>关键字：</td>
          <td><input name="keysearch" type="text" id="keyword" size="12" style="width:250px" value="<?php echo ($searchkey); ?>"/></td>
          <td>
          	<select name="linktype">
            <option value='' <?php if(empty($issel))echo "selected"; ?>>不限类型</option>
            <option value='writing' <?php if($issel == 'w')echo "selected"; ?>>文字链接</option>
            <option value='logo' <?php if($issel == 'l')echo "selected"; ?>>图片链接</option>
			</select>
          </td>
          <td>
           <input name="imageField" class="np" type="image" src="__PUBLIC__/admin/images/button_search.gif" width="60" height="22" border="0" />
          </td>
        </tr>
      </table>
	  </form>
    </td>
</tr>
<form name='form2' method='post' id="form2">
<tr align="center" bgcolor="#FBFCE2" height="26">
          <!--<td width="6%">选择</td>-->
          <td width="20%">链接名称</td>
          <td width="10%">链接类型</td>
          <td width="15%">URL(点击查看)</td>
          <td width="15%">站长Email</td>
          <td width="15%">更新时间</td>
          <td width="5%">审核状态</td>
          <td width="8%">排序</td>
          <td width="15%">管理</td>
        </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr align="center" bgcolor="#FFFFFF" height="26" onMouseMove="javascript:this.bgColor='#FCFDEE';"onMouseOut="javascript:this.bgColor='#FFFFFF';">
          <!--<td><input type='checkbox' name='linkid' value='linkid' class='np'></td>-->
          <td><?php echo ($data["linkname"]); ?></td>
          <td><?php echo ($data["linktype"]); ?></td>
          <td><a href="<?php echo ($data["url"]); ?>" target="_blank"><?php echo ($data["url"]); ?></a></td>
          <td><?php echo ($data["email"]); ?></td>
          <td><?php echo (date("Y-m-d H:i:s",$data["updatetime"])); ?></td>
          <td><?php if(($data["ischeck"]) == "1"): ?><img src="__PUBLIC__/admin/images/ok.png"/><?php else: ?><img src="__PUBLIC__/admin/images/no.png"/><?php endif; ?></td>
          <td><input type="hidden" name="idord[]" value="<?php echo ($data["id"]); ?>"/><input name="order[]" id="order_<?php echo ($data["id"]); ?>" value="<?php echo ($data["ord"]); ?>" style="width:25px" type="text"/></td>
          <td>
          	<a href="__URL__/edit/id/<?php echo ($data["id"]); ?>"><img src="__PUBLIC__/admin/images/gtk-edit.png" title="编辑" alt="编辑"></a>
    <a href="__URL__/del/id/<?php echo ($data["id"]); ?>"><img src="__PUBLIC__/admin/images/gtk-del.png" title="删除" alt="删除"></a>
    <a href="__URL__/check/id/<?php echo ($data["id"]); ?>"><img src="__PUBLIC__/admin/images/pass.png" title="审核" alt="审核"></a>
		      </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    
     <tr bgcolor="#ffffff" height="28" style=" text-align:right">
      <td colspan="8s">
      <input type="submit" value="更新排序" onclick="document.form2.action='__URL__/updateord'"/>
      </td>
     </tr>
     <tr align="center" bgcolor="#F9FCEF" height="28" >
      <td colspan="8" id="pages">
			<?php echo ($page); ?>
      </td>
     </tr>
      </form>
</table>
</body>
</html>