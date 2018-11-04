// Pour déclarer une classe comme composant de notre application, on importe 'component' via @angular/core
import { Component } from '@angular/core';
import {Contact} from './shared/models/contact';


// @Component ets ce qu'on appel un décorateur. Il va nous permettre de définir 3 paramètres essentiels à notre application...
@Component({

// Le selecteur (selector) détermine la manière dont le composant sera affiché dans notre HTML : <app-root></app-root>; Vous devez
// OBLIGATOIREMENT avoir la balise d'ouverture et de fermeture
  selector: 'app-root',
  // "templateUrl" ou "template" ets la partie visible du composant. C'est ce qui s'affiche à l'écran lorsque le composant est utilisé.

  templateUrl: './app.component.html',
// template: `
// <h1>{{ title }}</h1>`,

  styleUrls: ['./app.component.css']
  // styles: [`
// h1 { color: mediumpurple;}
// `]
})

// La classe contient les données du composant, mais aussi, son comprtement (ce qu'il fait)
export class AppComponent {
  // -- Déclaration d'une variable
  title = 'Gestion de mes Contacts';

  // -- Contact actif
  contactActif: Contact;

  // -- Déclaration d'un objet
  unContact: Contact = {
    id: 1,
    name: 'Jonathan BOURDARIAS',
    username: 'jonathan bourdarias',
    email: 'jonathan.bourdarias@lepoles.com'
  };

  // -- Tableau de Contacts
  mesContacts: Contact[] = [
    {
      id: 153686,
      name: 'Luc JOINVIL',
      username: 'luc joinvil',
      email: 'luc.joinvil@lepoles.org'
    },
    {
      id: 945617,
      name: 'Alpha DIALLO',
      username: 'alpha diallo',
      email: 'alpha.diallo@lepoles.org'
    },
    {
      id: 756584,
      name: 'Hugo LIEGEARD',
      username: 'hugo liegeard',
      email: 'hugo.liegeard@lepoles.org'
    },
    {
      id: 354169,
      name: 'Layla LAHCENE',
      username: 'layla lahcene',
      email: 'layla.lahcene@lepoles.org'
    },
  ];

  showContact(contactCliqueParMonUtilisateur: Contact) {
    this.contactActif = contactCliqueParMonUtilisateur;
    console.log(contactCliqueParMonUtilisateur);
  }

  addContactToArray($event: Contact) {
    // -- Ajout du contact dans le tableau
    this.mesContacts.push($event);
  }
}
