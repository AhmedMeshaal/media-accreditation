
    <table border="1">
        <tr bgcolor="#ffd700">
            <th>name</th>
            <th>Organization</th>
            <th>Designation</th>
            <th>Accreditation Type</th>
            <th>Action</th>

        </tr>
        @foreach($Individuals as $individual)
        <tr>
            <td>{{ $individual[1] }}</td>
            <td>{{ $individual->organization }}</td>
            <td>{{ $individual->designation }}</td>
            <td>{{ $individual->accreditation_type }}</td>
            <td><a href="/profile_status/user/{{$individual->id}}">Review</a></td>
            <td><button>delete</button></td>
        </tr>
        @endforeach
    </table>



