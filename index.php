<?php include("libs/load.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <?php load_templete('_head'); ?>
    <body>
		<main>
			<!-- Sidebar -->
			<?php load_templete('_sidebar'); ?>

			<!-- Main-content -->
			<div class="main-content">
				<?php load_templete('_navbar'); ?>
				<?php load_templete('_about'); ?>
				<?php load_templete('_resume'); ?>
				<?php load_templete('_portfolio'); ?>
				<?php load_templete('_blog'); ?>
				<?php load_templete('_contact'); ?>
			</div>
		</main>

      <!-- Custom Javascript File-->
      <script src="./assets/js/script.js"></script>
	  <script src="./assets/js/typewriter.js"></script>

      <!-- ionicon link -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>