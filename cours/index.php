<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
</head>
<style>
    .error_false {
        display: none;
    }

    .error_true {
        display: inline-block;
    }
</style>

<body>
    <input type="password" name="pass" id="pass">


    <input type="password" name="pass2" id="pass2">
    <span id="error" class="error_false "> mot de passe ne correspondent pas </span>

    <script>
        const pass = document.getElementById('pass'),
            pass2 = document.getElementById('pass2'),
            tooltip = document.getElementById('error');

        pass2.addEventListener('keyup', () => {
            if (pass2.value != pass.value) {
                tooltip.classList.add('error_true');
            } else {
                tooltip.classList.remove('error_true');
            }
        });
    </script>

</body>

</html>