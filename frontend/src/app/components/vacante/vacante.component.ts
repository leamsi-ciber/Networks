import { DataService } from 'src/app/services/data.service';
//import { DataService } from './../../service/data.service';
import { Component, OnInit,Input } from '@angular/core';
//import { Component, OnInit } from '@angular/core';
//import { ConsoleReporter } from 'jasmine';
import {ActivatedRoute} from '@angular/router';

@Component({
  selector: 'app-vacante',
  templateUrl: './vacante.component.html',
  styleUrls: ['./vacante.component.css']
})


export class VacanteComponent implements OnInit {
  //@Input() title: string= 'Sin Titulo'
 // @Input('job') job:string = '1'
  //constructor(private DataService:DataService) { }

   // vacante = [];
  //constructor(private dataService:DataService) {
    //this.getVacanteDate(this.job);
  //}
/*
  ngOnInit(): void {

    this.getVacanteDate(this.job);
  }

    getVacanteDate(id:string){
     this.dataService.getData1(id).subscribe(
      (data:any) => {

        this.vacante = data.data;
        console.log(this.vacante)
        
      }
    );
    }
    
}
 */

 @Input() title: string= 'Sin Titulo'
  @Input('categoria') categoria:string = '1'

  
  jobs = [];
  constructor(private dataService:DataService) {
    this.getCategoryData(this.categoria);
  }
  
  ngOnInit(): void {
    this.getCategoryData(this.categoria);

  }

  getCategoryData(id:string){
    this.dataService.getData1(id).subscribe(
      (data:any) => {

        this.jobs = data.data;
        console.log(this.jobs)
        
      }
    );
    }

}
