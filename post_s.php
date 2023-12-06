<?php

	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];

		if (!empty($name) && !empty($message)) {
			$sql = "INSERT INTO demo (name, message)
			VALUES ('$name', '$message')";

			if ($conn->query($sql) === TRUE) {
			  echo "Комментарий успешно добавлен!";
			} else {
			  echo "Ошибка: " . $sql . "<br>" . $conn->error;
			}
		} else {
			echo "Пожалуйста, заполните все поля!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/style_post_original.css">
	<title>Comment System PHP | National Coding</title>
</head>
<body>
	<li><a href="/index.php">Exit</a></li>
<br>
	<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<?php

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {

		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
</body>
</html>
