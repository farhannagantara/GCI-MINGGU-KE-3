<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>

<body>
    <h3>Sign Up Form</h3>

    <form action="/welcome2">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="fn"><br><br>

        <label>Last name:</label><br>
        <input type="text" name="ln"><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender">Male<br>
        <input type="radio" name="gender">Female<br>
        <input type="radio" name="gender">Other<br><br>

        <label>Nationality:</label><br>
        <select>
            <option value="Indonesia">Indonesia</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="radio" name="radio" >Bahasa Indonesia<br>
        <input type="radio" name="radio" >English<br>
        <input type="radio" name="radio" >Other<br><br>

        <label>Bio:</label><br>
        <textarea name="" rows="5" cols="30"></textarea><br><br>

        <input type="submit" value="Sign Up">


    </form>
</body>

</html>