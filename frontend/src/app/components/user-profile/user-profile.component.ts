import { Component, OnInit } from '@angular/core';
import { from } from 'rxjs';
import { AuthService } from './../../shared/auth.service';
import { Profiles } from 'src/app/profiles';
import { DataService } from 'src/app/services/data.service';


// User interface
export class User {
  name: String;
  email: String;
  id: 0;
}

@Component({
  selector: 'app-user-profile',
  templateUrl: './user-profile.component.html',
  styleUrls: ['./user-profile.component.css']
})

export class UserProfileComponent implements OnInit {

  UserProfile: User;
  profiles = new Profiles();
  categoria: any;

  constructor(
    public authService: AuthService, private dataService:DataService
  ) {
    this.authService.profileUser().subscribe((data:any) => {
      this.UserProfile = data;
    })
  }

  ngOnInit() {
    this.getdata()
   }


  getdata(){
    this.dataService.getCategory().subscribe(res =>{
      this.categoria = res;
    });
  }


  inserData(){
    this.dataService.insertData(this.profiles).subscribe(res =>{
      console.log(res);
    })
  }

}
