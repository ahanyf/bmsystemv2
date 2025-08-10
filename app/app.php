<?php
include '_AdminKitPro/_head.php';
?>
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
		<?php
		include '_bar_side.php';
		?>
		<div class="main">
		<?php
		include '_bar_top.php';
		?>

		<main class="content">
			
				<div class="container-fluid p-0">


				<?php
				
				
				if(isset($_GET['app'])){
				include 'app_contact.php';
				}
				
				?>
	
	




						

			
				</div>
			</main>
			<?php
			include '_AdminKitPro/_footer.php';
			?>

		</div>
	
	
	
	
	</div>
	<script src="_AdminKitPro/js/app.js"></script>

</body>
</html>