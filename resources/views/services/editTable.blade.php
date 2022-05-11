<!DOCTYPE html>
<html>
	<head></head>

	<body>
		<form action="{{ URL('people/edit', $person->id) }}" method="POST">
			{{ csrf_field() }}
			<label for="name">Reenter your name:</label><br>
			<input type="text" name="name" value="{{ $person->name }}"><br><br>
			<label for="dob">Your new Birth Date:</label><br>
			<input type="date" name="dob" value="{{ $person->dob }}"><br><br>
			<label for="age_groupFK">Your Respective age group</label><br>
			<input list="options" placeholder="{{ $person->age_groupFK }}" name="age_groupFK"><br><br>
			<datalist id="options">
			@foreach ($gaps as $gap)
				<option value="{{ $gap }}">
			@endforeach
			</datalist>
			<button type="submit">Apply edits.</button>
		</form>
	</body>
</html>
