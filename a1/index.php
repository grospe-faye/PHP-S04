<?php require_once './code.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S04: Access Modifiers and Inheritance</title>
</head>
<body>
		<h1>Building</h1>
		<p>The name of this building is <?php echo $building->getName(); ?></p>
		<p>The Caswynn Building has <?php echo $building->getFloors(); ?> floors</p>
		<p>The Caswynn Building is <?php echo $building->getAddress(); ?></p>
		<?php $building->setName('Caswynn Complex') ?>
		<p>The name of the building has been changed to <?php echo $building->getName(); ?></p>
		



		<h1>Condominium</h1>
		 <p>The name of this condominium is <?php echo $condominium->getName(); ?></p>
		<p>The Enzo Condo has <?php echo $condominium->getFloors(); ?> floors</p>
		<p>The Enzo Condo is <?php echo $condominium->getAddress(); ?></p>

		<?php $condominium->setName('Enzo Tower') ?>
		<p>The name of the condominium has been changed to <?php echo $condominium->getName(); ?></p>


</body>
</html>