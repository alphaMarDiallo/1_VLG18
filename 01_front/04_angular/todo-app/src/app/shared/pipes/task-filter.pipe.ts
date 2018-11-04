import { Pipe, PipeTransform } from '@angular/core';
import {Task} from '../model/task';
@Pipe({
  name: 'taskFilter',
  /*
  * l'option pure sur le filtre :
  * par default il n'écoute pas les changement sur les filtre.
  * Lorsque l'on rend le pipe impure (false) les changement liée au filtre
  * */
  pure: false
})
export class TaskFilterPipe implements PipeTransform {

  transform(tasks: Task[], status: boolean): Task[] {
  /*
  * Je retourne un tableau de tache filtrer par rapport au 'status'
  * */
    //
    // -- on créé une tableau intermédiaire
    const filteredTasks: Task[] = [];
    for(let i = 0; i < tasks.length; i++){
      console.log(tasks[i]);
      /*
      * Je vérifie si le "status" de l'une de mes tâches (tasks[i])
      * correspond au "status" que je recherhce
      * */
      if(tasks[i].status === status){
        filteredTasks.push(tasks[i]);
      }
    }
    return filteredTasks;
  }

}
