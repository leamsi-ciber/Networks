import { DataService } from './../../service/data.service';
import { Component, OnInit } from '@angular/core';
//import { ConsoleReporter } from 'jasmine';

@Component({
  selector: 'app-vacante',
  templateUrl: './vacante.component.html',
  styleUrls: ['./vacante.component.css']
})
export class VacanteComponent implements OnInit {
  vacantes:any;
  constructor(private DataService:DataService) { }

  ngOnInit(): void {

    this.getVacanteDate();
  }

    getVacanteDate(){
      this.DataService.getData().subscribe(res => {
        this.vacantes = res;
      });
      
    }
}
