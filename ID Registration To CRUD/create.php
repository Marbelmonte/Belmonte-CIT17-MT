<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST))
{
	$id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');

    $stmt = $pdo->prepare('INSERT INTO contacts VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $email, $phone, $title, $created]);

    $msg = 'Created Successfully!';
}
?>

<?=template_header('Create')?>

<div class="content update">
	<h2>
		Create Contact
	</h2>

	<form action="create.php" method="post">
		<label for="id">
			ID
		</label>
		<label for="name">
			Full Name
		</label>
		<input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="name" placeholder="Full Name" id="name">
        <label for="email">
			Email
		</label>
		<label for="phone">
			ID Number
		</label>
		<input type="text" name="email" placeholder="@gmail.com" id="email">
        <input type="text" name="phone" placeholder="18-8888-999" id="phone">
        <label for="title">
			Contact Number
		</label>
		<label for="created">
			Created
		</label>
		<input type="text" name="title" placeholder="09" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    	<p>
    		<?=$msg?>
    	</p>
    	<?php endif; ?>
    </div>

<?=template_footer()?>