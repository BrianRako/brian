class Register {

    constructor() {
        this.deactivateSubmit();
        this.checkLastName();
        this.checkFirstName();
        this.checkMail();
        this.confirmMail();
        this.checkPass();
        this.passConfirm();
    }

    deactivateSubmit() {
        const submit = document.getElementById('submit');
        const input = document.getElementsByTagName('input');
        const error = document.getElementById('error_sub');
        const span = document.createElement('span');
        span.classList.add('error_form');


        submit.addEventListener('click', (e) => {
            for (let key in input) {
                let value = input[key].value;

                if (value === '') {
                    e.preventDefault();
                    input[key].style.border = "solid 2px rgb(177, 16, 16)";
                    span.innerText = ' Veuillez remplir tous les champs';
                    error.prepend(span);
                    e.preventDefault();
                } else {
                    input[key].style.border = "solid 2px rgb(14, 160, 67) ";
                }
            }
        })
    }

    checkLastName() {
        const submit = document.getElementById('submit');
        const last_name = document.getElementById('materialRegisterFormLastName');
        const div_last_name = document.getElementById('last_name');
        const span = document.createElement('span');
        span.classList.add('error');

        last_name.addEventListener('blur', () => {
            if (last_name.value === '') {
                span.style.bottom = '7px';
                last_name.style.border = "solid 2px rgb(177, 16, 16)";
                span.innerText = 'Veuillez entrez un nom';
                div_last_name.prepend(span);
                return false;
            } else {
                span.remove();
                last_name.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })

        submit.addEventListener('click', (e) => {
            if (last_name.value === '') {
                span.style.bottom = '7px';
                last_name.style.border = "solid 2px rgb(177, 16, 16)";
                span.innerText = 'Veuillez entrez un nom';
                div_last_name.prepend(span);
                e.preventDefault();
                return false;
            } else {
                span.remove();
                last_name.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }

        })

    }

    checkFirstName() {
        const submit = document.getElementById('submit');
        const first_name = document.getElementById('materialRegisterFormFirstName');
        const div_first_name = document.getElementById('first_name');
        const span = document.createElement('span');
        span.classList.add('error');

        first_name.addEventListener('blur', () => {
            if (first_name.value === '') {
                span.style.bottom = '7px';
                span.innerText = 'Veuillez entrez un prénom';
                div_first_name.prepend(span)
                first_name.style.border = "solid 2px rgb(177, 16, 16)";
                return false;
            } else {
                span.remove();
                first_name.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })

        submit.addEventListener('click', (e) => {
            if (first_name.value === '') {
                span.style.bottom = '7px';
                span.innerText = 'Veuillez entrez un prénom';
                div_first_name.prepend(span)
                first_name.style.border = "solid 2px rgb(177, 16, 16)";
                e.preventDefault();
                return false;
            } else {
                span.remove();
                first_name.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })
    }

    checkMail() {
        const submit = document.getElementById('submit');
        const mail = document.getElementById('defaultForm-email1');
        const mail_div = document.getElementById('email');
        const span = document.createElement('span');
        const regex = new RegExp("[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+", "gm");

        span.classList.add('error');
        span.innerText = "";

        mail.addEventListener('blur', () => {
            if (mail.value === '') {
                span.innerText = "Veuillez entrez une adresse email";
                mail_div.prepend(span)
                mail.style.border = "solid 2px rgb(177, 16, 16)";
                return false;
            } else if (!mail.value.match(regex)) {
                span.innerText = "L'adrese email n'est pas valide";
                mail_div.prepend(span)
                mail.style.border = "solid 2px rgb(177, 16, 16)";
                return false;
            } else {
                span.remove();
                mail.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })

        submit.addEventListener('click', (e) => {
            if (mail.value === '') {
                span.innerText = "Veuillez entrez une adresse email";
                mail_div.prepend(span)
                mail.style.border = "solid 2px rgb(177, 16, 16)";
                e.preventDefault();
                return false;
            } else if (!mail.value.match(regex)) {
                span.innerText = "L'adrese email n'est pas valide";
                mail_div.prepend(span);
                mail.style.border = "solid 2px rgb(177, 16, 16)";
                e.preventDefault();
                return false;
            } else {
                span.remove();
                mail.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })
    }

    confirmMail() {
        const submit = document.getElementById('submit');
        const mail = document.getElementById('defaultForm-email1');
        const mailconfirm = document.getElementById('defaultForm-email2');
        const div_mail_confirm = document.getElementById('email_confirm');
        const span = document.createElement('span');
        const regex = new RegExp("[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+", "gm");

        span.classList.add('error');
        span.innerText = '';

        mailconfirm.addEventListener('blur', () => {
            if (mailconfirm.value === '') {
                span.innerText = 'Veuillez confirmer votre adresse mail';
                div_mail_confirm.prepend(span);
                mailconfirm.style.border = "solid 2px rgb(177, 16, 16)";
                return false;
            } else if (mailconfirm.value !== mail.value) {
                span.innerText = 'Les adresses mail ne correspondent pas';
                div_mail_confirm.prepend(span);
                mailconfirm.style.border = "solid 2px rgb(177, 16, 16)";
                return false;
            } else if (!mail.value.match(regex)) {
                span.innerText = "L'adresse mail n'est pas valide";
                div_mail_confirm.prepend(span);
                mailconfirm.style.border = "solid 2px rgb(177, 16, 16)";
                return false;
            } else {
                span.remove();
                mailconfirm.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })

        submit.addEventListener('click', (e) => {
            if (mailconfirm.value === '') {
                span.innerText = 'Veuillez confirmer votre adresse mail';
                div_mail_confirm.prepend(span);
                mailconfirm.style.border = "solid 2px rgb(177, 16, 16)";
                e.preventDefault();
                return false;
            } else if (mailconfirm.value !== mail.value) {
                span.innerText = 'Les adresses mail ne correspondent pas';
                div_mail_confirm.prepend(span);
                mailconfirm.style.border = "solid 2px rgb(177, 16, 16)";
                e.preventDefault();
                return false;
            } else if (!mail.value.match(regex)) {
                span.innerText = "L'adresse mail n'est pas valide";
                div_mail_confirm.prepend(span);
                mailconfirm.style.border = "solid 2px rgb(177, 16, 16)";
                e.preventDefault();
                return false;
            } else {
                span.remove();
                mailconfirm.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })
    }

    checkPass() {
        const submit = document.getElementById('submit');
        const pass = document.getElementById('defaultForm-pass1');
        const div_pass = document.getElementById('pass');
        const span = document.createElement('span');
        const regex = new RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$", "gm");
        span.classList.add('error');

        pass.addEventListener('blur', () => {
            if (pass.value === '') {
                span.innerText = 'Veuillez entrez un mot de passe';
                div_pass.prepend(span);
                pass.style.border = "solid 2px rgb(177, 16, 16)";
                return false;
            } else if (!pass.value.match(regex)) {
                span.innerText = "Le mot de passe n'est pas valide";
                div_pass.prepend(span);
                pass.style.border = 'solid 2px rgb(177, 16, 16)'
                return false;
            } else {
                span.remove();
                pass.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })

        submit.addEventListener('click', (e) => {
            if (pass.value === '') {
                span.innerText = 'Veuillez entrez un mot de passe';
                div_pass.prepend(span);
                pass.style.border = "solid 2px rgb(177, 16, 16)";
                e.preventDefault();
                return false;
            } else if (!pass.value.match(regex)) {
                span.innerText = "Le mot de passe n'est pas valide";
                div_pass.prepend(span);
                pass.style.border = 'solid 2px rgb(177, 16, 16)';
                e.preventDefault();
                return false;
            } else {
                span.remove();
                pass.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }

        })
    }

    passConfirm() {
        const submit = document.getElementById('submit');
        const pass = document.getElementById('defaultForm-pass1');
        const confirm_pass = document.getElementById('defaultForm-pass2');
        const div_pass_confirm = document.getElementById('passconfirm');
        const regex = new RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$", "gm");
        const span = document.createElement('span');
        span.classList.add('error');

        confirm_pass.addEventListener('blur', () => {
            if (confirm_pass.value === '') {
                span.innerText = 'Veuillez confirmer votre mot de passe';
                div_pass_confirm.prepend(span);
                confirm_pass.style.border = 'solid 2px rgb(177, 16, 16)';
                return false;
            } else if (confirm_pass.value !== pass.value) {
                span.innerText = 'Les mot de passe ne corespondent pas';
                div_pass_confirm.prepend(span);
                confirm_pass.style.border = 'solid 2px rgb(177, 16, 16)';
                return false;
            } else if (!pass.value.match(regex)) {
                span.innerText = "le mot de passe n'est pas valide";
                div_pass_confirm.prepend(span);
                confirm_pass.style.border = 'solid 2px rgb(177, 16, 16)';
                return false;
            } else {
                span.remove();
                confirm_pass.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }

        })
        submit.addEventListener('click', (e) => {
            if (confirm_pass.value === '') {
                span.innerText = 'Veuillez confirmer votre mot de passe';
                div_pass_confirm.prepend(span);
                confirm_pass.style.border = 'solid 2px rgb(177, 16, 16)';
                e.preventDefault();
                return false;
            } else if (confirm_pass.value !== pass.value) {
                span.innerText = 'Les mot de passe ne corespondent pas';
                div_pass_confirm.prepend(span);
                confirm_pass.style.border = 'solid 2px rgb(177, 16, 16)';
                e.preventDefault();
                return false;
            } else if (!pass.value.match(regex)) {
                span.innerText = "le mot de passe n'est pas valide";
                div_pass_confirm.prepend(span);
                confirm_pass.style.border = 'solid 2px rgb(177, 16, 16)';
                e.preventDefault();
                return false;
            } else {
                span.remove();
                confirm_pass.style.border = "solid 2px rgb(14, 160, 67)";
                return true;
            }
        })
    }
}