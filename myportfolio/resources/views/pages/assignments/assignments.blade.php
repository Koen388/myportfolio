@extends ('./layouts/default')

@section('title', 'Opdrachten')

@section('content')

<form action="/assignments/create"><button type="submit">Poof</button></form>

<table class="table">
    <thead class="thead-dark">
    <th>Id</th>
    <th>Project_Name</th>
    <th>Image URL</th>
    <th>Description</th>
    </thead>

    <tbody>
        @foreach($assignment as $assignment)
                <tr>
                    <td>{{$assignment->id}}</td>
                    <td>{{$assignment->project_name}}</td>
                    <td>{{$assignment->image_url}} <img src='{{$assignment->image_url}}'> </td>
                    <td>{{$assignment->description}}</td>
                </tr>
        @endforeach
    </tbody>
</table>

@endsection

