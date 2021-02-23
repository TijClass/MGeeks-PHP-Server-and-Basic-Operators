<!DOCTYPE html>
<html lang="en" class="text-gray-900">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <!-- <div class="bg-gray-900 h-2/3  md:6/12 w-9/12 m-auto my-10 shadow-md">
    <form action="./action.php" method="post" class="m-10 p-5 border rounded text-center">
        <div>
            <label for="input" class="block text-white">Choisir entre C ou F (Celsius et Fahrenheit)</label>
            <input type="text" name="input" id="input" class="mt-2 bg-white-100 border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent border rounded w-100">
        </div>
        <div class="mt-1">
            <label class="text-white" for="f">F</label>
            <input type="radio" name="calc" id="f" value="f">
            <label class="text-white" for="c">C</label>
            <input type="radio" name="calc" id="c" value="c">
        </div>
        <div>
            <button value="submit" name="submit" class="w-54 text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 px-3 my-3 rounded" >Send</button>
        </div>
        <div class="bg-green-300 mt-5 border border-5 p-10  b-red flex align-content-center justify-center">
            Resutl : <?php echo @$_GET['res']; ?>
        </div>
    </form>
    </div>
     -->
<!-- This is an example component -->
<div class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        <form class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
            <p class="text-white font-medium text-center text-lg font-bold">LOGIN</p>
              <div class="">
                <label class="block text-sm text-white" for="email">E-mail</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email"  placeholder="Digite o e-mail" aria-label="email" required>
              </div>
              <div class="mt-2">
                <label class="block  text-sm text-white">Senha</label>
                 <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"
                  type="password" id="password" placeholder="Digite a sua senha" arial-label="password" required>
              </div>

              <div class="mt-4 items-center flex justify-between">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                  type="submit">Entrar</button>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400"
                  href="#">Esqueceu a senha ?</a>
              </div>
              <div class="text-center">
                <a class="inline-block right-0 align-baseline font-light text-sm text-500 hover:text-red-400">
                    Criar uma conta
                </a>
              </div>

        </form>

      </div>
    </div>
  </div>
</div>
<style>
  .login{
  /*
    background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
  */
  background: url('http://bit.ly/2gPLxZ4');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</body>
</html>