import {NgModule} from '@angular/core';
import { RouterModule, Routes, RoutesRecognized } from "@angular/router";
import { AppComponent } from './app.component';
import { FormComponent } from './form/form.component';

const routes: Routes = [
 // Rutas de navegacion
 //{path: '', redirectTo: '/home', pathMatch: 'full'},

    {path: '', component: AppComponent},
    { path: '/form', component: FormComponent}
    
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})

export class AppRoutingModule {}
