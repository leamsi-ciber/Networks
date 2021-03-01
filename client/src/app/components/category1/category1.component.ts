import { Component, OnInit } from '@angular/core';
import { Page } from 'ngx-pagination/dist/pagination-controls.directive';
import { DataService } from 'src/app/service/data.service';

@Component({
  selector: 'app-category1',
  templateUrl: './category1.component.html',
  styleUrls: ['./category1.component.css']
})
export class Category1Component implements OnInit {

  category1:any;
  public page: number;
  filterpost = '';

  constructor(private dataService:DataService) { }

  ngOnInit(): void {
    this.getCategory1Data();
  }

  getCategory1Data(){
    this.dataService.getData().subscribe(res => {
      this.category1 = res;
    });
  }

}
