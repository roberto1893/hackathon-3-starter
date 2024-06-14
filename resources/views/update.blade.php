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
First name:<input type="text" name="first_name"/><br>
Surname:<input type="text" name="surname"/><br>
Email:<input type="email" name="email"/><br>
Phone:<input type="text" name="phone"/><br>
Address<input type="text" name="address"/><br>

Animal<br>
Name:<input type="text" name="name"/><br>
Species:<input type="text" name="species"/><br>
Breed:<input type="text" name="breed"/><br>
Age:<input type="number" name="age" min="0"/><br>
Weight:<input type="number" name="weight" min="0"/><br>
<button type="sumbit">Sumbit</button>
</form>

</body>
</html>