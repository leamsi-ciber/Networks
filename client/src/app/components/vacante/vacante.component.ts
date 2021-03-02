import { Component, OnInit } from '@angular/core';
import { Page } from 'ngx-pagination/dist/pagination-controls.directive';
import { VacantesService } from 'src/app/service/vacantes.service';

@Component({
  selector: 'app-vacante',
  templateUrl: './vacante.component.html',
  styleUrls: ['./vacante.component.css']
})
export class VacanteComponent implements OnInit {

  vacante:any;
  public page: number;
  filterpost = '';

  constructor(private VacantesService:VacantesService) { }

  ngOnInit(): void {
    this.getVacanteData();
  }
  
  getVacanteData(){
    
    this.VacantesService.getData().subscribe(res => {
      this.vacante = res;
    });
  }

}
