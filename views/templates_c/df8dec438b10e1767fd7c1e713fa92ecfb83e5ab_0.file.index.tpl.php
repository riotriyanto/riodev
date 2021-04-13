<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 15:54:23
  from 'C:\xampp\htdocs\rto_fm\views\template\template_back\lte\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e42c01fed2be6_09475448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df8dec438b10e1767fd7c1e713fa92ecfb83e5ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_fm\\views\\template\\template_back\\lte\\index.tpl',
      1 => 1581432862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:close_menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e42c01fed2be6_09475448 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_smarty_tpl->tpl_vars['data_aplikasi']->value['nama_singkat_app'];?>
</title>
  <link rel="shortcut icon" type="image/png" href=""/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <!-- jQuery 3 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- DataTables -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- SlimScroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/bower_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/dist/js/demo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/sweetalert2/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<!-- page script -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>TO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><marquee><?php echo $_smarty_tpl->tpl_vars['data_aplikasi']->value['nama_singkat_app'];?>
</marquee></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img width="160" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
views/assets/user/<?php echo $_smarty_tpl->tpl_vars['data_user']->value['foto'];?>
" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_lengkap'];?>
</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img width="160" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
views/assets/user/<?php echo $_smarty_tpl->tpl_vars['data_user']->value['foto'];?>
" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_lengkap'];?>

                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
rtoadmin/profil" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- seting menu -->
          <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
          <!-- end setng -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img width="160" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
views/assets/user/<?php echo $_smarty_tpl->tpl_vars['data_user']->value['foto'];?>
" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info" style="margin-top: -5px;">
          <p><?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama_lengkap'];?>
</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <div class="row"><br></div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    <?php $_smarty_tpl->_subTemplateRender("file:close_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
