<!DOCTYPE html>
<html>
	<head></head>

	<body>
		<a href="people/create">Create Table</a>

		<table>
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Date of birth</td>
				<td>Age Group</td>
			</tr>
			@foreach ($people as $person)
				<tr>
					<td>{{ $person->id }}</td>
					<td>{{ $person->name }}</td>
					<td>{{ $person->dob }}</td>
					<td>{{ $person->age_groupFK }}</td>
					<td><a href="{{ URL('people/destroy', $person->id) }}">Delete</a></td>
					<td><a href="{{ URL('people/edit', $person->id) }}">Edit</a></td>
				</tr>
			@endforeach
		</table>
	</body>
</html>
