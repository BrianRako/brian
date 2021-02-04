// form validate

(function () {

    const last_name = document.getElementById('materialRegisterFormLastName'),
        tootltip_last_name = document.getElementById('tooltip_last_name'),
        submit = document.getElementById('submit');

    last_name.addEventListener('keyup', () => {
        if (last_name.value != "") {
            submit.disabled = false;
        }
        else {
            submit.disabled = true;
            tootltip_last_name.classList.remove('tooltip_error');
        }
    });

    const first_name = document.getElementById('materialRegisterFormFirstName'),
        tootltip_first_name = document.getElementById('tooltip_first_name');

    first_name.addEventListener('keyup', () => {
        if (first_name.value != "") {
            submit.disabled = false;
        } else {
            submit.disabled = true;
            tootltip_first_name.remove('tooltip_error')
        }
    });


    submit.addEventListener('click', () => {
        alert('Vous avez cliqué sur le bouton de connexion.');
    });
    submit.addEventListener('mouseenter', () => {
        submit.style.background = 'black';
    })

}());