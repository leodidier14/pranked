<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-07 18:43:58
  from 'D:\wamp64\www\pranked-shop\pranked-1.0\admin547itnku5\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fce69de56cdd8_95752518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4869e68956e5c382127d152fa16a4c1beaa1ce92' => 
    array (
      0 => 'D:\\wamp64\\www\\pranked-shop\\pranked-1.0\\admin547itnku5\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1607362422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fce69de56cdd8_95752518 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
