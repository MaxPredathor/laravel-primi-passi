<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    >
    <!-- font-awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    >
    <!-- link to Font-Family and CSS Files -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Document Title -->
    <title>Document</title>
  </head>

  <body>
    <header>
        <h1>Brands in Collaboration:</h1>
        @foreach ($brandsname as $brand)
            <p>{{ $brand }}</p>
        @endforeach
        <button><a href="{{Route('home') }}">Home</a></button>
    </header>

    <main></main>

    <footer></footer>

    <!-- My JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/utility.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>