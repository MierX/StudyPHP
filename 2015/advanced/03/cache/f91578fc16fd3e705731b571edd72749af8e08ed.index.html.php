<?php
/* Smarty version 3.1.39, created on 2021-04-01 10:17:54
  from 'D:\Project\Self\StudyPhp\2015\advanced\03\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60659dd23739a8_73890644',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'dcc048e5420e6572d02e1b51f0a39f7c0f66ca60' => 
    array (
      0 => 'D:\\Project\\Self\\StudyPhp\\2015\\advanced\\03\\templates\\index.html',
      1 => 1617272271,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 60,
),true)) {
function content_60659dd23739a8_73890644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\Project\\Self\\StudyPhp\\2015\\advanced\\03\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.31 15:42
motto：有志者，事竟成
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>smarty模板</title>
    <style>
        .odd {
            background-color: #fff;
        }
        .even {
            background-color: #263cd5;
        }
    </style>
</head>
<body>
<p onclick="setLocalStorage()">设置localStorage</p>
<p>smarty模板是一个强大的php模板引擎asdasdjasdjioasdjioajsdioajsiod</p>
<p>3.1415926</p>
<p>男</p>
<p>1617272274</p>

<p><?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%I:%S');?>
</p>

<p>smarty模板是一个强~~~</p>
<p>hihihihihihihihihihihihihihihi</p>
<table>
                
    <tr class="odd">
        <td>1</td>
    </tr>
                
    <tr class=" even">
        <td>2</td>
    </tr>
                
    <tr class="odd">
        <td>3</td>
    </tr>
                
    <tr class=" even">
        <td>4</td>
    </tr>
                
    <tr class="odd">
        <td>5</td>
    </tr>
                
    <tr class=" even">
        <td>6</td>
    </tr>
                
    <tr class="odd">
        <td>7</td>
    </tr>
                
    <tr class=" even">
        <td>8</td>
    </tr>
                
    <tr class="odd">
        <td>9</td>
    </tr>
                
    <tr class=" even">
        <td>0</td>
    </tr>
    </table>
<p>请选择：</p>
<label><input type="radio" name="name" value="张三" checked="checked" />张三</label>
<label><input type="radio" name="name" value="李四" />李四</label>
<label><input type="radio" name="name" value="王五" />王五</label>
<label><input type="radio" name="name" value="赵六" />赵六</label>
<p>请选择：</p>
<input type="radio" name="name" value="0">张三
<input type="radio" name="name" value="1">李四
<input type="radio" name="name" value="2">王五
<input type="radio" name="name" value="3">赵六
<p>请选择：</p>
<label><input type="checkbox" name="name[][]" value="张三" checked="checked" />张三</label>
<label><input type="checkbox" name="name[][]" value="李四" checked="checked" />李四</label>
<label><input type="checkbox" name="name[][]" value="王五" checked="checked" />王五</label>
<label><input type="checkbox" name="name[][]" value="赵六" checked="checked" />赵六</label>
</body>
</html><?php }
}
