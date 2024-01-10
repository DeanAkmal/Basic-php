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
    <h1 class ="text-4xl">SELAMAT DATANG!!!!</h1><br>
    <table class="border-collapse border border-slate-400">
        <tr>
            <td class="border border-slate-400">
                <?php echo "Nama: " . $_POST['Fname'] . " " . $_POST['Lname']; ?>
            </td> 
        </tr>
        
        <tr>
            <td class="border border-slate-400">
                <?php echo "Gender: " . $_POST['gender']; ?>
            </td>
        </tr>
        
        <tr>
            <td class="border border-slate-400">
                <?php echo "Warga Negara: " . $_POST['Negara']; ?>
            </td>
        </tr>
        
        <tr>
            <td class="border border-slate-400">
                <?php echo "Bahasa Utama: " ?>
                <?php echo $_POST['bahasa1'];?>
                <?php echo $_POST['bahasa2'];?>
                <?php echo $_POST['bahasa3'];?>         
            </td>
        </tr>

        <tr>
            <td class="border border-slate-400">
                <?php echo "Pesan: " . $_POST['bio']; ?>
            </td>
        </tr>
    
    </table>
        <br><br>
    <h2>Terima kasih telah bergabung di website kami. Media belajar kita bersama</h2>
</body>
</html>
