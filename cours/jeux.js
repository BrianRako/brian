// création d'un évènement
const createEvent = (hour, description) => {
    const event = document.createElement('div');
    event.classList.add('event');
    event.textContent = `${hour}  ${description}`;
    // Evenement de modification d'un evenement
    event.addEventListener('click', () => {
        alert(description);
    })
    return event;
}

// création du titre de la case du jour
const createTitleDay = (day) => {
    const titleElement = document.createElement('div');
    titleElement.classList.add('title');
    let dayInLetter;
    switch (day.day) {
        case 0:
            dayInLetter = 'Dimanche';
            break;
        case 1:
            dayInLetter = 'Lundi';
            break;
        case 2:
            dayInLetter = 'Mardi';
            break;
        case 3:
            dayInLetter = 'Mercredi';
            break;
        case 4:
            dayInLetter = 'Jeudi';
            break;
        case 5:
            dayInLetter = 'Vendredi';
            break;
        case 6:
            dayInLetter = 'Samedi';
            break;
    }
    titleElement.textContent = `${dayInLetter} ${day.date}`;
    return titleElement;
}

// création d'une case jour
const createDay = (day) => {
    const date = new Date();
    const dayElement = document.createElement('div');
    dayElement.classList.add('day');
    if (date.getMonth() !== day.month) {
        dayElement.classList.add('disabled');
    } else {
        // Evenement création d'un évènement
        dayElement.addEventListener('click', () => {
            const hour = prompt('Choisissez une heure');
            const description = prompt('Choisissez un évènement');
            day.events.push({ hour, description })
            const event = createEvent(hour, description);
            dayElement.appendChild(event);
        });
    }
    const titleDay = createTitleDay(day);
    dayElement.appendChild(titleDay);
    return dayElement;
}

getMonth = (date) => {
    let monthInLetter;
    switch (date.getMonth()) {
        case 0:
            monthInLetter = 'Janvier';
            break;
        case 1:
            monthInLetter = 'Février';
            break;
        case 2:
            monthInLetter = 'Mars';
            break;
        case 3:
            monthInLetter = 'Avril';
            break;
        case 4:
            monthInLetter = 'Mai';
            break;
        case 5:
            monthInLetter = 'Juin';
            break;
        case 6:
            monthInLetter = 'Juillet';
            break;
        case 7:
            monthInLetter = 'Aout';
            break;
        case 8:
            monthInLetter = 'Septembre';
            break;
        case 9:
            monthInLetter = 'Octobre';
            break;
        case 10:
            monthInLetter = 'Novembre';
            break;
        case 11:
            monthInLetter = 'Décembre';
            break;
    }
    return monthInLetter;
}

initCalendar = (calendar, body) => {
    const monthArray = new Array();
    const dayOfMonth = new Date();
    let dayOfMonthToCompare = new Date();
    const monthInLetter = getMonth(dayOfMonth);
    const titleMonthOfCalendar = document.createElement('div');
    titleMonthOfCalendar.classList.add('calendar-title');
    titleMonthOfCalendar.textContent = monthInLetter
    body.insertBefore(titleMonthOfCalendar, calendar);

    dayOfMonthToCompare.setMonth(dayOfMonthToCompare.getMonth() - 1);
    let isfirstMonday = false;
    // On récupere le 1er lundi
    while (!isfirstMonday) {
        dayOfMonth.setDate(dayOfMonth.getDate() - 1);
        const day = dayOfMonth.getDay();
        if ((dayOfMonthToCompare.getMonth() === dayOfMonth.getMonth() && day === 1) || (dayOfMonth.getDate() === 1 && day === 1)) {
            isfirstMonday = true;
        }
    }

    for (let week = 0; week < 6; week++) {
        for (let day = 0; day < 7; day++) {
            const dayObject = { day: dayOfMonth.getDay(), date: dayOfMonth.getDate(), month: dayOfMonth.getMonth(), events: [] }
            const dayElement = createDay(dayObject);
            calendar.appendChild(dayElement);
            monthArray.push(dayObject)
            dayOfMonth.setDate(dayOfMonth.getDate() + 1);
        }
    }
}

const body = document.getElementById('body');
const calendarElement = document.getElementById('calendar')
initCalendar(calendarElement, body);