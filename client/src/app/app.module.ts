import { FormComponent } from './form/form.component';
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


/**/
const routes: Routes = [
  {path: 'home', component:HomeComponent},
  {path: 'form', component:FormComponent},
  {path: 'form/:id', component:FormComponent}

];


@NgModule({
  declarations: [
    AppComponent,
    JobsComponent,
    NavbarComponent,
    FooterComponent,
    FormComponent,
    Category1Component,
    VacanteComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    RouterModule.forRoot(routes),
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
