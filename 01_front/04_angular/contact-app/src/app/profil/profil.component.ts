import { Component, Input, OnInit } from '@angular/core';
import {Contact} from '../shared/models/contact';

@Component({
  selector: 'app-profil',
  templateUrl: './profil.component.html',
  styleUrls: ['./profil.component.css']
})
export class ProfilComponent implements OnInit {
 /*
 * Mon composant "ProfilComponent"
 * s'attend à recevoir en entrée (input)
 * un objet de type contact.
 * */
  @Input() contactProfil: Contact;

  constructor() { }

  ngOnInit() {
  }

}
