import {Component, EventEmitter, OnInit, Output} from '@angular/core';
import {Contact} from '../shared/models/contact';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent implements OnInit {

  nouveauContact: Contact = new Contact();


  constructor() { }

  @Output()unContactEstCree = new  EventEmitter();
  ngOnInit() {
  }

  exportContact() {
    /*
    * Lorsque mon formulaire est soumis,
    * j'emet un evenement qui sera écouté par mon application
    * et qui récupérera les données du nouveau contact
    * */
    // console.log(this.nouveauContact);
    this.unContactEstCree.emit(this.nouveauContact);
  // On réinitialise le contact
    this.nouveauContact = new Contact();
  }
}
