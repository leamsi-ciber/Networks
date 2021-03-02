import { Component, OnInit } from '@angular/core';
import { Page } from 'ngx-pagination/dist/pagination-controls.directive';
import { CategoriasService } from 'src/app/service/categorias.service';

@Component({
  selector: 'app-categorias',
  templateUrl: './categorias.component.html',
  styleUrls: ['./categorias.component.css']
})
export class CategoriasComponent implements OnInit {

  categorias:any;
  public page: number;

  constructor(private categoriasService:CategoriasService ) { }

  ngOnInit(): void {
    this.getCategoriaData();
  }

  getCategoriaData(){
    this.categoriasService.getData().subscribe(res => {
      this.categorias = res;
    });
  }

  insertData(){
    console.log('hello');
  }

}
