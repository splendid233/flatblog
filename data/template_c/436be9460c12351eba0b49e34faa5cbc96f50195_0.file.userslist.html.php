<?php
/* Smarty version 3.1.31, created on 2017-05-06 17:56:03
  from "C:\xampp\htdocs\flatBlog\tpl\admin\userslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590d9db31900d3_96955854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '436be9460c12351eba0b49e34faa5cbc96f50195' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flatBlog\\tpl\\admin\\userslist.html',
      1 => 1494064417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/link_css.html' => 1,
    'file:admin/top-navbar.html' => 1,
    'file:admin/left-nav.html' => 1,
    'file:admin/script_js.html' => 1,
  ),
),false)) {
function content_590d9db31900d3_96955854 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>博客后台管理系统</title>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        const uname = "users";
    <?php echo '</script'; ?>
>
</head>
<body>
    <div class="wrapper">
        <?php $_smarty_tpl->_subTemplateRender('file:admin/top-navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="main">
            <?php $_smarty_tpl->_subTemplateRender('file:admin/left-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <section class="content-wrap">
                <section class="content">
                    <div class="users" id="users">
                        <div class="sub-nav">
                            <ol class="breadcrumb">
                                <li><a href="admin.php?controller=admin&method=index">首页</a></li>
                                <li class="active">用户管理</li>
                            </ol>
                        </div>
                        <div class="details">
                            <div class="details_operation">
                                <div class="left-wrap">
                                    <div class="btn btn-comment" id="all-del" onclick="delAll(uname)">批量删除</div>
                                </div>
                                <div class="right-wrap">
                                    <div class="status-wrap">
                                        <span class="fl">状态：</span>
                                        <div class="status-select">
                                            <select name id="select" class="select" onchange="selectStatus(this,uname)">
                                                <option>请选择</option>
                                                <option value="1" class="select-item">有效</option>
                                                <option value="2" class="select-item">无效</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group search">
                                        <input type="text" class="form-control" name="key" placeholder="用户名">
                                        <span class="input-group-btn">
                                            <a class="btn btn-comment" onclick="searchContent(uname)">搜索</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="main-con">
                                <table class="table" cellspacing="0" cellpadding="0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="all-select">
                                                <label for="all-select" class="label">编号</label>
                                            </th>
                                            <th>id</th>
                                            <th>用户名</th>
                                            <th>邮箱</th>
                                            <th>注册时间</th>
                                            <th>状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, NULL, 'name', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']++;
?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                                                <label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration'] : null);?>
</label>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
                                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['create_at'],'%Y-%m-%d %H:%M:%S');?>
</td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['value']->value['status'] == 1) {?>有效<?php } else { ?>无效<?php }?></td>
                                            <td>
                                                <a href="admin.php?controller=admin&method=usersrevise&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                                                <a onclick="delOne(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,uname)">删除</a>
                                            </td>
                                        </tr>
                                    <?php
}
} else {
?>

                                        <tr>
                                            <td>暂无用户</td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation" class="page">
                                    <ul class="pagination">
                                        <li class="disabled">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
