<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- if statment for whether it is detail only or edit -->

<!-- form section, data to be passed through from controller -->

@if($animal->id)
    <h1>Edit data about animal</h1>
    <form action="{{route('animal.save', $animal->id)}}" method="post">
        @else
            <h1>Create a new client</h1>
            <form action="{{route('animal.save')}}" method="post">
                @endif
                @csrf

Owner<br>
First name:<input type="text" name="first_name" value="{{old('first_name', $animal -> first_name)}}" {{ $readonly }}><br>
Surname:<input type="text" name="surname" value="{{old('surname', $animal -> surname)}}" {{ $readonly }}><br>
Email:<input type="email" name="email" value="{{old('email', $animal -> email)}}" {{ $readonly }}><br>
Phone:<input type="text" name="phone" value="{{old('phone', $animal -> phone)}}" {{ $readonly }}><br>
Address<input type="text" name="address" value="{{old('address', $animal -> address)}}" {{ $readonly }}><br>

Animal<br>
Name:<input type="text" name="name" value="{{old('name', $animal -> name)}}" {{ $readonly }}><br>
Species:<input type="text" name="species" value="{{old('species', $animal -> species)}}" {{ $readonly }}><br>
Breed:<input type="text" name="breed" value="{{old('breed', $animal -> breed)}}" {{ $readonly }}><br>
Age:<input type="number" name="age" min="0" value="{{old('age', $animal -> age)}}" {{ $readonly }}><br>
Weight:<input type="number" name="weight" min="0" value="{{old('weight', $animal -> weight)}}" {{ $readonly }}><br>

@if($animal->id)
    <button type="submit">Submit changes</button>
@else
    <button type="submit">Create new client</button>
@endif
</form>

</body>
</html>
