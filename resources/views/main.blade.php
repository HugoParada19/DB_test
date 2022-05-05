<!DOCTYPE html>
<html>
	<head><link rel="stylesheet" src="{{ asset('assets/styles/style.css') }}"></head>

	<body>
		<h2>Source</h2>

		<a href="{{ URL('ctable') }}">Create value</a>

		<table>
			<tr>
				<td>Id</td>
				<td>Date of birth</td>
				<td>Name</td>
				<td>Age group</td>
			</tr>
			@foreach ($person as $sperson)
				<tr>
					<td>{{ $sperson->id }}</td>
					<td>{{ $sperson->dob }}</td>
					<td>{{ $sperson->name }}</td>
					<td>{{ $sperson->age_groupFK }}</td>
					<td><a href="{{ URL('destroy', $sperson->id) }}">Delete</a></td>
					<td><a href="{{ URL('edit', $sperson->id) }}">Edit</a></td>
				</tr>
			@endforeach
		</table>
	</body>
</html>
