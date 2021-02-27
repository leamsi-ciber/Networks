import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import {RouterModule, Routes} from '@angular/router';


import { AppComponent } from './app.component';
import { JobsComponent } from './components/jobs/jobs.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { Category1Component } from './components/category1/category1.component';

import { HttpClientModule } from '@angular/common/http';



const appRoutes: Routes = [
  {path: '', component:Category1Component}
];


@NgModule({
  declarations: [
    AppComponent,
    JobsComponent,
    NavbarComponent,
    FooterComponent,
    Category1Component
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
