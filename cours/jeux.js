// jeux  (humain vs AI)

function compare(choix1, choix2) {
    if (choix1 === choix2) {
        return " égalité";
    }
    else if (choix1 === 'pierre') {
        if (choix2 === 'ciseaux') {
            return 'pierre';
        } else if (choix2 === 'feuille') {
            return ' feuille';
        }
    } else if (choix1 === 'feuille') {
        if (choix2 === 'pierre') {
            return 'feuille';
        } else if (choix2 === 'ciseaux') {
            return 'ciseaux';
        }
    } else if (choix1 === ' ciseaux') {
        if (choix2 === 'pierre') {
            return 'pierre';
        } else if (choix2 === 'feuille') {
            return 'ciseaux';
        }
    }
}

const joueur = prompt('Veuillez choisir entre ces choix (pierre / feuille / ciseaux) ?');
console.log(joueur);

let ia = Math.random()
if (ia < 0.34) {
    ia = 'pierre';
} else if (ia <= 0.67) {
    ia = 'feuille';
} else {
    ia = 'ciseaux';
}
console.log("ia:", ia)

let result = compare(joueur, ia);
console.log('gagnant est :', result)
