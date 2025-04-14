<!doctype html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Textbox-Based Inputs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <h1>Form Results</h1>
        <p>Name: <?php echo $_POST['name'];?></p>
        <p>Date: <?php echo $_POST['date'];?></p>
        <p>Password: <?php echo $_POST['password'];?></p>
        <p>Phone Number: <?php echo $_POST['phone'];?></p>
        <p>E-mail: <?php echo $_POST['email'];?></p>
        <p>Most Recent Catch: <?php echo $_POST['catch'];?></p>
        <p>Party Size:  <?php echo $_POST['size'];?></p>
        <p>Egg1: <?php echo $_POST['egg1'];?></p>
        <p>Egg2: <?php echo $_POST['egg2'];?></p>
        <p>Egg3: <?php echo $_POST['egg3'];?></p>
        <p>Egg4: <?php echo $_POST['egg4'];?></p>
        <p>Favorite Pokémon Type: <?php echo $_POST['type'];?></p>
    </body>
</html>