// form validate

(function () {

    const last_name = document.getElementById('last_name'),
        input_last_name = document.getElementById('materialRegisterFormLastName'),
        span = document.createElement('span');


    input_last_name.addEventListener('keyup', () => {
        if (input_last_name.value === '') {
            span.append('Veuillez entrez un nom');
            last_name.append(span);
        } else {
            last_name.removeChild(span);
        }
    });

}());