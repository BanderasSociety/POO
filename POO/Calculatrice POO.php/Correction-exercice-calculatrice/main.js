/*
 * L'objectif du programme est de calculer une opération arithmétique sur deux
 * nombres, l'utilisateur saisit tout puis le résultat s'affiche dans la page.
 */

let nombre1;
let nombre2;
let operation;
let resultat;

// Etape 1 : demander les 2 nombres et l'opération à appliquer.
nombre1   = parseFloat(window.prompt('Quel est le nombre 1 ?'));
nombre2   = parseFloat(window.prompt('Quel est le nombre 2 ?'));
operation = window.prompt("Quelle est l'opération ? Saisissez son nom ou le symbole");


// Etape 2 : effectuer le calcul en fonction de l'opération choisie.
switch(operation)
{
    case '+':                       // Supporte également l'opérateur en raccourci
    case 'addition':
    resultat = nombre1 + nombre2;
    break;

    case '-':
    case 'soustraction':
    resultat = nombre1 - nombre2;
    break;

    case '*':
    case 'multiplication':
    resultat = nombre1 * nombre2;
    break;

    case '/':
    case 'division':
    if(nombre2 != 0)        // Attention à la division par zéro !!
    {
        resultat = nombre1 / nombre2;
    }
    else
    {
        resultat = null;    // L'affichage final n'aura pas lieu
        document.write('ERREUR : division par zéro 🤯');
    }
    break;

    case '**':
    case 'puissance':
    resultat = nombre1 ** nombre2;      // Nouvel opérateur EcmaScript
    break;

    default:
    resultat = null;        // L'affichage final n'aura pas lieu
    document.write('ERREUR : opération non supportée 👹');
}


// Etape 3 : affichage du résultat uniquement s'il y en a un (et pas une erreur).
if(resultat != null)
{
    document.write("✅ Le résultat de l'opération est : " + resultat);
}