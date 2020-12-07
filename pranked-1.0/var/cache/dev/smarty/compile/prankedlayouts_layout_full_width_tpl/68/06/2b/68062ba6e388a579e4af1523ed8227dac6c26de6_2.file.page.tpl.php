<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-07 19:53:50
  from 'D:\wamp64\www\pranked-shop\pranked-1.0\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fce7a3e849f29_01369596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68062ba6e388a579e4af1523ed8227dac6c26de6' => 
    array (
      0 => 'D:\\wamp64\\www\\pranked-shop\\pranked-1.0\\themes\\classic\\templates\\page.tpl',
      1 => 1607362434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fce7a3e849f29_01369596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16948323325fce7a3e8341e7_16338850', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_11224522635fce7a3e837881_51547643 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_6190432815fce7a3e835a54_03676912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11224522635fce7a3e837881_51547643', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_19470714515fce7a3e83f6c3_09445442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_637659835fce7a3e8418f2_31141833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4919205095fce7a3e83ded9_11094323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19470714515fce7a3e83f6c3_09445442', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_637659835fce7a3e8418f2_31141833', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1560068035fce7a3e846555_89210792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12966090065fce7a3e844db7_39418412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1560068035fce7a3e846555_89210792', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16948323325fce7a3e8341e7_16338850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16948323325fce7a3e8341e7_16338850',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6190432815fce7a3e835a54_03676912',
  ),
  'page_title' => 
  array (
    0 => 'Block_11224522635fce7a3e837881_51547643',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4919205095fce7a3e83ded9_11094323',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19470714515fce7a3e83f6c3_09445442',
  ),
  'page_content' => 
  array (
    0 => 'Block_637659835fce7a3e8418f2_31141833',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12966090065fce7a3e844db7_39418412',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1560068035fce7a3e846555_89210792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6190432815fce7a3e835a54_03676912', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4919205095fce7a3e83ded9_11094323', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12966090065fce7a3e844db7_39418412', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
