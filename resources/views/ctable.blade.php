<!DOCTYPE html>
<html>
	<head></head>

	<body>
	@if ($present)
		<script>alert('added info.')</script>
	@endif
		<form action="ctable" method="POST">
			@csrf
			<label for="dob">Date of birth</label>
			<input type="date" name="dob">
			<label for="name">Input your name</label>
			<input type="text" name="name">
			<label for="age_group">Your age group</label>
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

		<a href="{{ URL('main') }}"
	</body>
</html>
