<script type="text/javascript" src="js/jquery-1.6.2.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#checkBoxAll').click(function() {
			if ($(this).is(":checked"))
				$('.chkCheckBoxId').prop('checked', true);
			else
				$('.chkCheckBoxId').prop('checked', false);
		});
	});
</script>
<?php
require 'connect.php';
if(isset($_POST['buttonDelete'])) {
	if(isset($_POST['username'])) {
		foreach ($_POST['username'] as $username) {
			$stmt = $conn->prepare('delete from account where username = :username');
			$stmt->bindValue('username', $username);
			$stmt->execute();
		}
	}
}
$stmt = $conn->prepare('select * from account2');
$stmt->execute();
?>
<form method="post" action="index.php">
	<input type="submit" name="buttonDelete" value="Delete" onclick="return confirm('Are you sure?')" />
	<table cellpadding="2" cellspacing="2" border="1">
		<tr>
			<th><input type="checkbox" id="checkBoxAll" /></th>
			<th>Username</th>
			<th>Email</th>
			<th>Age</th>
		</tr>
		<?php while($account2 = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
		<tr>
			<td><input type="checkbox" class="chkCheckBoxId"
				value="<?php echo $account2->username; ?>" name="username[]" /></td>
			<td><?php echo $account2->username; ?></td>
			<td><?php echo $account2->email; ?></td>
			<td><?php echo $account2->age; ?></td>
		</tr>
		<?php } ?>
	</table>
</form>