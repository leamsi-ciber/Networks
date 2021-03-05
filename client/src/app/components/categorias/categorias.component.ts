import { Component, OnInit } from '@angular/core';
import { Page } from 'ngx-pagination/dist/pagination-controls.directive';
import { CategoriasService } from 'src/app/service/categorias.service';
import { Categoria } from 'src/app/categoria';

@Component({
  selector: 'app-categorias',
  templateUrl: './categorias.component.html',
  styleUrls: ['./categorias.component.css']
})
export class CategoriasComponent implements OnInit {

  categorias:any;
  categoria = new Categoria();
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
    this.categoriasService.insertData(this.categoria).subscribe(res => {
      console.log(res);      
    })
  }

}
