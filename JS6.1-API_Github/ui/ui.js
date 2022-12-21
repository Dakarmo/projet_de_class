import { dateDiffInDays, deleteCardIf } from '../utilities/utilities.js';

function showUser(user) {
    document.querySelector('.result').innerHTML=`<li>Nom: ${user.login} ID: ${user.id} Date de création du compte: ${user.created_at} Nombre de followers : ${user.followers} </li>`;
}

export default showUser;
