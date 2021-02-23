<?php  include 'information.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php ucfirst('scritp-PHP'); ?></title>
</head>

<body>
    <div>
        <h1>Information about <?php echo $name; ?></h1>
        <p>
            this person has the information below : 
            <br>
            <?php echo $age . ' years old  and work as a :  ' . $job; ?>
        </p>
    </div>
</body>

</html>