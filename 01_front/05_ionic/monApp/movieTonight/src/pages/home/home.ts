import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';


@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {


  title ="Movie Tonigth";

 movies: movie[]=[
    {
    id: 1;
    img: "<img src='../assets/imgs/01.jpg'>"
    title: "Le Secret de mon succes";
    description: "Après l'obtention de son diplôme, l'ambitieux et talentueux Brantley décide de quitter son Kansas natal pour aller tenter sa chance à New York. Il ne tarde pas à gravir les échelons d'une importante multinationale en ayant recours à un subterfuge. Ce qui profitera également à sa vie sentimentale.";
    category?: "Comedy";
    year?: 1987
   }
];

  constructor(public navCtrl: NavController) {

  }
}
