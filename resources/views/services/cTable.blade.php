<!DOCTYPE html>
<html>
	<head></head>

	<body>
	@if ($done)
		<script>alert('Added info to the table.')</script>
	@endif
		<form method="POST">
			@csrf
			<label for="name">Enter your name:</label><br>
			<input type="text" name="name"><br><br>
			<label for="dob">Enter your Date of birth</label><br>
			<input type="date" name="dob"><br><br>
			<label for="age_groupFK">Enter your Age Group</label><br>
			<select type="text" name="age_groupFK">
				<datalist>
					<option>0 to 17</option>
					<option>18 to 24</option>
					<option>25 to 34</option>
					<option>35 to 47</option>
					<option>48 or above</option>
				</datalist>
			</select>
			<button type="submit">Submit it</button>
		</form>
		<a href="/people">Go back</a>
	</body>
</html>
