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
    <form action="./action.php" method="post" class="shadow-lg w-6/12 m-auto mt-10 bg-white p-5 border rounded text-center">
        <div>
            <label for="input" class="block text-xl">Entrez le degré de temperature:</label>
            <input placeholder="Temperature..." type="number" name="input" id="input" class="w-10/12 m-5 py-2 bg-gray-100 text-black text-center d-block border rounded w-100">
        </div>
        <div class="mb-5">
            <label for="f" class="p-5 w-6 rounded text-white text-center py-2 bg-yellow-500">F</label>
            <input type="radio" name="calc" id="f" value="f">
        </div>
        <div>
            <label for="c" class="p-5 w-6 rounded text-white text-center py-2 bg-yellow-500">C</label>
            <input type="radio" name="calc" id="c" value="c">
        </div>
        <div>
            <button value="submit" name="submit" class="bg-blue-900 text-white px-10 w-10/12 py-5 text-xl my-3 rounded" >Send</button>
        </div>
        <div class="mt-5 border border-5 p-10  bg-green-300 flex aling-content-center justify-content-center">
            Resultat : <span class="px-2 rounded bg-blue-900 ml-2 text-white"><?php echo @$_GET['res']; ?></span>
        </div>
    </form>
</body>
</html>