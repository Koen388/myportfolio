@extends ('./layouts/default')

@section('title', 'Opdrachten')

@section('content')

<form action="/assignments/" method="POST">
@csrf
Project Name <input type="text" name="project_name"><br>
Image URL <input type="text" name="image_url"><br>
Description <input type="text" name="description"><br>
<button type="submit">click me bish</button>
</form>

@endsection