<!DOCTYPE html>
<html lang="en" class="text-gray-900">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body class="min-h-screen bg-gray-100">
    <form action="./action.php" method="post" class="m-10 p-5 border rounded text-center">
        <div>
            <label for="input" class="block">Input</label>
            <input type="text" name="input" id="input" class="border rounded w-100">
        </div>
        <div>
            <label for="f">F</label>
            <input type="radio" name="calc" id="f" value="f">
            <label for="c">C</label>
            <input type="radio" name="calc" id="c" value="c">
        </div>
        <div>
            <button value="submit" name="submit" class="bg-blue-500 px-10 my-3 rounded" >Send</button>
        </div>
        <div class="mt-5 border border-5 p-10  b-red flex aling-content-center justify-content-center">
            Resutl : <?php echo @$_GET['res']; ?>
        </div>
    </form>
</body>
</html>