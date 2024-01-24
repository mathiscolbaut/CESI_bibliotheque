<h1 class="text-blue-600 text-3xl text-center">Connect</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<br/>
<body class="d-flex justify-content-center align-items-center text-center">
    <div id="login-one" class="login-one">
        <form class="login-one-form" action="validationLogin" method="POST">
            <div class="col-md-3 mx-auto">
                <div class="login-one-ico"><i id="lockico" class="fa fa-unlock-alt"></i></div>
                <div class="form-group mb-3">
                    <input id="mail" name="mail" class="form-control" type="text" placeholder="Adresse Mail" />
                    <br />
                    <input id="mdp" name="mdp" class="form-control" type="password" placeholder="Mot de passe" />
                    <br />
                    <div class="text-center"> <!-- Ajout de la classe text-center -->
                        <button id="submit" class="btn btn-primary" style="background-color: #007ac9;" type="submit">S'enregistrer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Inclure les liens vers Bootstrap JS et jQuery ici si nécessaire -->

</body>