<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Buat Account Baru</h1>
    <h2>Sign up Form</h2>
    <form method="POST" action="welcome.html">    
    <label for="Fname">First name : </label>
    <input type="text" id="Fname" name="Fname" required>
    <br><br>
    <label for="Lname">Last name : </label>
    <input type="text" id="Lname" name="Lname" required >
    <br><br>

    <label for="gender">Gender</label><br><br>
    <input type="radio">Male 
    <br>
    <input type="radio">Netral
    <br>
    <input type="radio">Female <br><br>

    <label for="Negara">Nationality</label><br><br>
    <select name="Negara" id="Negara" required >
        <option value="Indonesia">Indonesia</option>
        <option value="Amrik">Amrik</option>
        <option value="Cina">Cina</option>
        <option value="Jepang">Jepang</option>
        <option value="Netherland">Netherland</option>
    </select> <br> <br>    

    <label for="Languange">Languange Spoken</label><br><br>
    <input type="checkbox">Bahasa Indonesia <br>
    <input type="checkbox">Bahasa Inggris <br>
    <input type="checkbox">Bahasa Cina <br>
    <input type="checkbox">Bahasa Jepang <br>
    <input type="checkbox">Bahasa Netherland <br><br>

    <label for="Bio">bio</label><br><br>    
    <textarea name="bio" id="bio" cols="30" rows="10" required ></textarea> <br><br>
        <button> Sign up</button>
</form>
</body>
</html>