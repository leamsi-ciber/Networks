import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import {RouterModule, Routes} from '@angular/router';


import { AppComponent } from './app.component';
import { JobsComponent } from './components/jobs/jobs.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { Category1Component } from './components/category1/category1.component';

import { HttpClientModule } from '@angular/common/http';
import { FormComponent } from './form/form.component';
import { HomeComponent } from './components/home/home.component';
//import { AppRoutingModule } from './app.routing.module';



const routes: Routes = [
  // Rutas de navegacion
  //{path: '', redirectTo: '/home', pathMatch: 'full'},
 
     {path: 'home', component: HomeComponent},
     { path: 'form', component: FormComponent}
     
 ];


@NgModule({
  declarations: [
    AppComponent,
    JobsComponent,
    NavbarComponent,
    FooterComponent,
    Category1Component,
    FormComponent,
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
