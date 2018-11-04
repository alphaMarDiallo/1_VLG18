import { Component } from '@angular/core';
import {Task} from './shared/model/task';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
 // -- Notre tableau de tâches
 tasks: Task[] = [
   {
     id: 1,
     name: 'Faire la vaiselle',
     status: false
   },
   {
     id: 2,
     name: 'Sortir les poubelles',
     status: false
   },
   {
     id: 3,
     name: ' Sortir avec ma fiancée ',
     status: true
   },
   {
     id: 4,
     name: 'Corriger les évaluations du PoleS',
     status: false
   }
 ];
  Task: ;
  /*
  * L'utilisateur viens de terminer une tâche
  * 0param {Task] task
  * */
  taskIsDone(task: Task) {
    task.status = true;
  }

  newTask(taskFromEvent: Task) {
    /*
    * Lorsque l'utilisateur créer une tâche dans add-task, celle ci est récupérer dans
     * add component puis ajouté dans le tableau de tâche
    * */
    this.tasks.push(taskFromEvent);
  }
  /*
  * L'utilisateur viens de supprimer une tâche.
  * On la retire du tableau
  * @param task
  * */
  removeTask(task: Task) {
    this.tasks.splice(this.tasks.indexOf(task, 1);
  }

}
