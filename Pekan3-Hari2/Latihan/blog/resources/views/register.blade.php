
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
@csrf
        <label> First Name :</label><br>
        <input type="text" name="first"><br><br>

        <label> Last Name:</label><br>
        <input type="text" name="last"><br><br> 

        <label> Gender:</label><br><br>
        <input type="radio" name="gender">Male
        <input type="radio" name="gender">Female
        <input type="radio" name="gender">Other<br><br>

        <label >Nationality:</label><br><br>
        <select>
            <option value="Perempuan">Indonesian</option>
            <option value="Laki-Laki">Malaysian</option>
            <option value="Laki-Laki">Australian</option>
        </select><br><br>

        <label >Language Spoken:</label><br><br>
        <input type="checkbox"> Bahasa Indonesia<br>
        <input type="checkbox"> English<br>
        <input type="checkbox"> Other<br><br>

        

        <label>Bio:</label><br><br>
        <textarea name="alamat" cols="30" rows="10"></textarea><br><br>
     <button type="submit">Sign Up</button>
    </form>
</body>

</html>

