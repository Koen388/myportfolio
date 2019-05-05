@extends ('./layouts/default')

@section('title', 'Dashboard')

@section('content')

<table class="table">
    <thead class="thead-dark">
    <th>Id</th>
    <th>Course</th>
    <th>Grades</th>
    <th>Teachers</th>
    </thead>

    <tbody>
        @foreach($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->course}}</td>
                    <td>{{$course->grade}}</td>
                    <td>{{$course->teacher}}</td>
                </tr>
        @endforeach
    </tbody>
</table>

@endsection