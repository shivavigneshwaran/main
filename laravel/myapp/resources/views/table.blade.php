<table>


    <thead>
        <tr>
             <th>Id</th>
            <th>Category</th>
            <th>Remarks</th>
            {{-- <th>edit</th>
            <th>delete</th> --}}


        </tr>

    </thead>
<tbody>
    @isset($user)
    @foreach ($user as $users )

    <td>{{$users->id}}</td>
    <td>{{$users->name}}</td>
    <td>{{$users->remarks}}</td>

@endforeach

    @endisset




</tbody>

</table>
