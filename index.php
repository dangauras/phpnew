<?php
// Personal details
$name = "Suresh Dangaura";
$age = 35;
$email = "dangauras@gmail.com";
$phone = "9848544459";
$address = "123 Main Street, bardagoriya, Muda";
$hobbies = ["Coding", "Gaming", "Reading", "Traveling"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #4CAF50;
        }
        ul {
            list-style-type: square;
        }
    </style>
</head>
<body>
    <h1>My Personal Details</h1>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Age:</strong> <?php echo $age; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>

    <h2>Hobbies</h2>
    <ul>
        <?php foreach ($hobbies as $hobby): ?>
            <li><?php echo $hobby; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
