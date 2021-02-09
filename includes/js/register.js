class Register {


    constructor(last_name, first_name, mail, mail_confirm, password, password_confirm) {

        this.last_name = document.getElementById(last_name)
        this.first_name = document.getElementById(first_name)
        this.mail = document.getElementById(mail)
        this.mail_confirm = document.getElementById(mail_confirm)
        this.password = document.getElementById(password)
        this.password_confirm = document.getElementById(password_confirm)
    }

    checkLastName() {
        const last_name = document.getElementById('last_name'),
            span = document.createElement('span');

        span.classList.add('error_form');
        span.append('Veuillez entrez un nom');

        if (this.last_name.value === '') {
            last_name.append(span);
            return true;
        } else {
            last_name.removeChild(span);
            return false;
        }
    }

    checkFirstName() {
        const first_name = document.getElementById('fist_name'),
            span = document.createElement('span');

        span.classList.add('error_form');
        span.append('Veuillez entrez un prénom');

        if (this.first_name.value === '') {
            first_name.append(span);
            return true;
        } else {
            first_name.removeChild(span);
            return false;
        }
    }
}