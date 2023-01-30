<?PHP

require_once 'config.php';

require_once '../scripts/php/classes/crud/classifications.class.php';

$classification	= new Classifications();

$classifications = $classification -> getAll( '' );

$classification = null;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Classifications</title>

	<?php require_once './styleLinks.php'; ?>

	<link rel="stylesheet" type="text/css" href="../styles/crud/classifications.css">
	<link rel="stylesheet" type="text/css" href="../styles/navbarStyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/common.css">

	<link rel="stylesheet" type="text/css" href="../styles/all.min.css">
</head>
<body>

	<!-- alert -->
	<?php require_once './alert.php'; ?>

	<nav></nav>

	<?php if ( $role ) { ?>
		<a class="new" href="classificationsForm.php"><i class="fa-solid fa-plus"></i></a>
	<?php } ?>

	<main>
		<?php 
		foreach ( $classifications as $row ) { ?>
			<section>
				<a href="./exams.php?c_id=<?= $row ['c_id'] ?>&c_name=<?= $row ['c_name']; ?>">
					<h4 title="<?= $row ['c_name']; ?>"><?= $row ['c_name']; ?></h4>
				</a>
				<?php if ( $role ) { ?>
					<article>
						<a class="btn btn-success" href="./classificationsForm.php?c_id=<?= $row ['c_id']; ?>">Edit</a>
						<a class="btn btn-danger" href="../scripts/php/classificationsAction.php?submit=Delete&c_id=<?= $row ['c_id']; ?>">Delete</a>
					</article>
				<?php } ?>
			</section>
		<?php } ?>
	</main>

	<script type="text/javascript" src="../scripts/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../scripts/js/all.min.js"></script>

	<script type="text/javascript" src="../scripts/js/navbarGenerator.js"></script>
	<script type="text/javascript" src="../scripts/js/tools.js"></script>

</body>
</html>