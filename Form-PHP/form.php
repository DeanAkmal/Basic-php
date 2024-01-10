<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container">
    <div class="flex justify-center">
    <h1 class="mb-4 text-xl font-extrabold">Buat Account Baru</h1><br>
    </div>
    <div class="flex justify-center">
    <br>
    <form method="POST" action="hasil.php">    
    <label for="Fname">First name : </label>
    <input type="text" placeholder = "Type here" class="input input-bordered input-sm w-full max-w-xs" id="Fname" name="Fname" required><br><br>
    <label for="Lname">Last name : </label>
    <input type="text" placeholder = "Type here" class="input input-bordered input-sm w-full max-w-xs" id="Lname" name="Lname" required ><br><br>

    <label class="text-xl">Gender</label><br><br>
    <td>   
    <input type="radio" name ="gender" value = "Cowo" > Cowok 
    <input type="radio" name = "gender" value = "Cewek"> Cewek 
    </td>
    <br><br>

    <label class="text-xl">Nationality</label><br><br>
    <select name="Negara" class="select select-bordered w-full max-w-xs" id="Negara" required >
        <option value="Indonesia">Indonesia</option>
        <option value="Amrik">Amrik</option>
        <option value="Cina">Cina</option>
    </select> <br><br>

    <label class="text-xl">Languange Spoken</label>
    <div class="max-w-48" >
        <br>
        <input type="checkbox"  class="checkbox checkbox-xs" name="bahasa[]" value="Bahasa Indonesia"> Bahasa Indonesia <br>
        <input type="checkbox"  class="checkbox checkbox-xs" name="bahasa[]" value="Bahasa Inggris"> Bahasa Inggris <br>
        <input type="checkbox"  class="checkbox checkbox-xs" name="bahasa[]" value="Bahasa Cina"> Bahasa Cina <br><br>
    </div>

        <label for="Bio">Bio</label><br><br>    
        <textarea placeholder ="Bio" class= "textarea textarea-bordered textarea-lg w-full max-w-xs" name="bio" required></textarea> <br><br>
        <button class="btn btn-outline">Sign In</button>
        </div>
    </div>
</form>
</body>
</html>