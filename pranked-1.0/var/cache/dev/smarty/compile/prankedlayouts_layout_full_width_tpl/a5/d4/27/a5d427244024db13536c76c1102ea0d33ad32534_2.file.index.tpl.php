<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-07 19:53:50
  from 'D:\wamp64\www\pranked-shop\pranked-1.0\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fce7a3e7b12d3_48732316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d427244024db13536c76c1102ea0d33ad32534' => 
    array (
      0 => 'D:\\wamp64\\www\\pranked-shop\\pranked-1.0\\themes\\classic\\templates\\index.tpl',
      1 => 1607362434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fce7a3e7b12d3_48732316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2423032885fce7a3e7a0cc4_75945319', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19753703465fce7a3e7a2664_92060243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2962696955fce7a3e7a7187_52680735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_13756002865fce7a3e7a4f12_77808264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2962696955fce7a3e7a7187_52680735', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2423032885fce7a3e7a0cc4_75945319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2423032885fce7a3e7a0cc4_75945319',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19753703465fce7a3e7a2664_92060243',
  ),
  'page_content' => 
  array (
    0 => 'Block_13756002865fce7a3e7a4f12_77808264',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2962696955fce7a3e7a7187_52680735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19753703465fce7a3e7a2664_92060243', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13756002865fce7a3e7a4f12_77808264', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
