<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals List</title>
</head>
<body>
<h1>Welcome to TheClinic</h1>
<!-- the search section -->
<form action="{{route('animal.search')}}">
    <label for="search-input">Insert name, surname of owner or name of animal</label> <br>
    <input type="text" name="key" id="search-input"> <br> <br>
    <button type="submit">Search</button>
</form>

<!-- the list section -->
<br> <br><br> <br>
<strong>List of animals</strong>
<table>
    <thead>
    <th>id</th>
    <th>Picture</th>
    <th>Owner</th>
    <th>Animal Name</th>
    <th>Species</th>
    <th>Breed</th>
    <th>Age</th>
    <th>Weight</th>
    <th>Edit data</th>
    <th>Visits</th>
    </thead>
    <tbody>
    @foreach($list as $animal)
        <tr>
            <td>{{$animal->id}}</td>
            <td><img src="/images/pets/{{ $animal->image->path }}" alt="animal-picture" style="height: 50px"></td>
            <td>{{$animal->owner->first_name}} {{$animal->owner->surname}}</td>
            <td><a href="{{route('animal.update', $animal->id)}}">{{$animal->name}}</a></td>
            <td>{{$animal->species}}</td>
            <td>{{$animal->breed}}</td>
            <td>{{$animal->age}}</td>
            <td>{{$animal->weight}}</td>
            <td><a href="{{route('animal.update', $animal->id, true)}}">Edit data</a></td>
            <td><a href="#">Visit</a></td>
        </tr>
    @endforeach

    </tbody>
</table>

</body>
</html>
