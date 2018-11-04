import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import {Task} from '../shared/model/task';
// import {EventEmitter} from 'selenium-webdriver';

@Component({
  selector: 'app-add-task',
  templateUrl: './add-task.component.html',
  styleUrls: ['./add-task.component.css']
})
export class AddTaskComponent implements OnInit {
  /*
  * La tache à créer
  * */
  task: Task = new Task();
  @Output() newTaskEvent = new EventEmitter();
  constructor() { }

  ngOnInit() {
  }

    addTask(){
    /*
    * Prévenir l'application qu'une  nouvelle tâche a été créée.
    * */
     this.newTaskEvent.emit(this.task);
     this.task = new Task();
    }
}
