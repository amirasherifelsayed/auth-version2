<html>
<head></head>
<body>
Hi {{Auth::user()->fullname}}
@foreach ($scourses as $course)
    {{$course->name}}

@endforeach

</body>
</html>