<!DOCTYPE html>
<html>
	<head></head>

	<body>
		<form action="{{$person->id}}/apply" method="GET">
			@csrf
			<label for="dob">Date of birth.</label>
			<input type="date" value="{{ $person->dob }}" name="dob"><br><br>
			<label for="name">Name.</label>
			<input type="text" name="name" value="{{ $person->name }}"><br><br>
			<label for="age_group">Your age group.</label>
			<input list="options" placeholder="{{ $person->age_groupFK }}" name="age_groupFK"><br><br>
				<datalist id="options">
					<option value="0 to 17">
					<option value="18 to 24">
					<option value="25 to 34">
					<option value="35 to 47">
					<option value="48 or above">
				</datalist>
			</select>
			<button type="submit">Submit it</button>
		</form>
	</body>
</html>
