<?php include('header.php'); ?>
<style>
	body#login::before {
    content: "";
    background: #00000036;
    position: absolute;
    top: 0;
    /* z-index: 1; */
    left: 0;
    width: 100%;
    height: 100%;
}

a:hover {
  background-color: black;
}
	
</style>
<body id="login">
    <div class="container" style="position: relative">
		<div class="row-fluid">
			<div class="span6"><div class="title_index"><?php include('title_index.php'); ?></div></div>
			<div class="span6"><div class="pull-right"><?php include('login_form.php'); ?></div></div>
		</div>
		<div  class="row-fluid">
			<div style="margin-top:8px;" class="span12"><div class="index-footer"><?php include('link.php'); ?></div></div>
			<?php include('footer.php'); ?>
		</div>
			
    </div>
<?php include('script.php'); ?>
</body>
</html>