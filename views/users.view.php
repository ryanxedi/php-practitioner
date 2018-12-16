<?php require('partials/head.php'); ?>


<h1>All Users</h1>

<h2>Submit your name</h2>

<form method="POST" action="/users">

	<input name="name" autofocus></input>
	<button type="submit">Submit</button>
</form>

<h2>Submitted Names</h2>

<?php foreach ($users as $user) : ?>

	<li><?= $user->name; ?></li>

<?php endforeach; ?>

<?php require('partials/footer.php'); ?>