import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/service/data.service';

@Component({
  selector: 'app-category1',
  templateUrl: './category1.component.html',
  styleUrls: ['./category1.component.css']
})
export class Category1Component implements OnInit {

  category1:any;

  constructor(private dataService:DataService) { }

  ngOnInit(): void {
    this.getCategory1Data();
  }

  getCategory1Data(){
    this.dataService.getData().subscribe(res => {
      console.log(res);
    });
  }


}
