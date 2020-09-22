<!DOCTYPE html>
<html lang="br">
<head>
    <title>controle de projetos</title>
    <meta charset="UTF-8">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper black">
            <a href="/" class="brand-logo">Controle de Projetos</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('admin.projetos')}}">Projetos</a></li>
            </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('admin.projetos')}}">Projetos</a></li>
        </ul>
    </header>