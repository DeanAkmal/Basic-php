<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG!!!!</h1>
    <table>
        <tr>
            <td>
                <?php echo $_POST['Fname'] . " " . $_POST['Lname']; ?>
            </td>
        </tr>
        
        <tr>
            <td>
                <?php echo $_POST['gender']; ?>
            </td>
        </tr>
        
        <tr>
            <td>
                <?php echo $_POST['Negara']; ?>
            </td>
        </tr>
        
        <tr>
            <td>
                <?php echo $_POST['bahasa1'];?>
                <?php echo $_POST['bahasa2'];?>
                <?php echo $_POST['bahasa3'];?>         
            </td>
        </tr>
        
        <tr>
            <td>
                <h5>Bio Kamu</h5>
                <?php echo $_POST['bio']; ?>
            </td>
        </tr>
    
    </table>

    <h2>Terima kasih telah bergabung di website kami. Media belajar kita bersama</h2>
    
</body>
</html>
