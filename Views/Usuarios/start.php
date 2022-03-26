<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<style>
    @import url(https://fonts.googleapis.com/icon?family=Material+Icons);
</style>
<div class="container">
    <form class="col s12" method="post" action="?controller=usuarioComun&action=start">
        <div class="row">
            <div class="input-field hoverable col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="username" type="text" class="validate">
                <label for="username">Nombre de usuario</label>
            </div>
            <div class="input-field hoverable col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input id="password" type="password" class="validate">
                <label for="password">Contraseña</label>
            </div>
        </div>

        <a class="waves-effect waves-light btn right hoverable"><i class="large material-icons right">lock_open</i>Iniciar Sesión</a>
    </form>
</div>





<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

