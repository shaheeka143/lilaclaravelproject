<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Users List</h1>
    <input type="text" id="search" placeholder="Search...">

    <table border="1" id="usersTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->department->name }}</td>
                    <td>{{ $user->designation->name }}</td>
                    <td>{{ $user->phone_number }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var searchTerm = $(this).val().toLowerCase();
                $('#usersTable tbody tr').each(function() {
                    var name = $(this).find('td').eq(0).text().toLowerCase();
                    var department = $(this).find('td').eq(1).text().toLowerCase();
                    var designation = $(this).find('td').eq(2).text().toLowerCase();
                    if (name.includes(searchTerm) || department.includes(searchTerm) || designation.includes(searchTerm)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
</body>
</html>
