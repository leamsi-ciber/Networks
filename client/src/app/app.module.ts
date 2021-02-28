import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import {RouterModule, Routes} from '@angular/router';


import { AppComponent } from './app.component';
import { VacanteComponent } from './components/vacante/vacante.component';
import { JobsComponent } from './components/jobs/jobs.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { Category1Component } from './components/category1/category1.component';

import { HttpClientModule } from '@angular/common/http';
import { HomeComponent } from './components/home/home.component';



const appRoutes: Routes = [
  {path: 'jobs/id', component:Category1Component}

];


@NgModule({
  declarations: [
    AppComponent,
    JobsComponent,
    NavbarComponent,
    FooterComponent,
    Category1Component,
    VacanteComponent,
    HomeComponent
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
