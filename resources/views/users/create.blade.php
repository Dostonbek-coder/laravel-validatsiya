<form action="{{route ('users.store')}}" method="POST">
@csrf
@error("name")
{{$message}}
@enderror
<input type="text" name="name">
<br>
@error("email")
{{$message}}
@enderror
<input type="email" name="email">
@error("age")
{{$message}}
@enderror
<br>
<input type="number" name="age">
<button type="submit">Submit</button>
</form>