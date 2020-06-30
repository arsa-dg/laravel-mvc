<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        
        <form action="/welcome" method="post">
            @csrf
            <p>First Name:</p>
            <input type="text" name="nama-depan">

            <p>Last Name:</p>
            <input type="text" name="nama-belakang">

            <p>Gender:</p>
            <input type="radio" name="gender" value="0">Male <br>
            <input type="radio" name="gender" value="1">Female <br>
            <input type="radio" name="gender" value="2">Other

            <p>Nationality:</p>
            <select>
                <option value="ina">Indonesian</option>
                <option value="sin">Singaporean</option>
                <option value="mas">Malaysian</option>
                <option value="aus">Australian</option>
            </select>

            <p>Language Spoken:</p>
            <input type="checkbox" name="langs" value="bahasa">Bahasa Indonesia <br>
            <input type="checkbox" name="langs" value="eng">English <br>
            <input type="checkbox" name="langs" value="other">Other

            <p>Bio:</p>
            <textarea cols="30" rows="5"></textarea>

            <br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>