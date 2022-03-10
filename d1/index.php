<?php require_once './code.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S04: Access Modifiers and Inheritance</title>
</head>
<body>
		<h1>Access Modifiers</h1>

		<h2>Building Variables</h2>
		<p><?php //echo $building->name; ?></p>

		<h2>Condominium Variables</h2>
		<p><?php /*echo $condominium->name;*/ ?></p>

		<h1>Encapsulation</h1>
		<p>The Name of the condominium is <?php echo $condominium->getName(); ?></p>

		<?php $condominium->setName('Enzo Tower') ?>
		<p>The name of the condominium has been changed to <?php echo $condominium->getName(); ?></p>
</body>
</html>