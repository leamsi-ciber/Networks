import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import {RouterModule, Routes} from '@angular/router';
import { HttpClientModule } from '@angular/common/http';

import {NgxPaginationModule} from 'ngx-pagination';
import { FilterPipe } from './pipes/filter.pipe';
import { FormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { Category1Component } from './components/category1/category1.component';
import { FooterComponent } from './components/footer/footer.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { HomeComponent } from './components/home/home.component';
import { LoginComponent } from './components/login/login.component';
import { AdminComponent } from './components/admin/admin.component';
import { SidebarComponent } from './components/sidebar/sidebar.component';


const appRoutes: Routes = [
  {path: 'vacantes', component:Category1Component},
  {path: 'Login', component:LoginComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    Category1Component,
    FooterComponent,
    NavbarComponent,
    HomeComponent,
    LoginComponent,
    AdminComponent,
    FilterPipe,
    SidebarComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    NgxPaginationModule,
    FormsModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
