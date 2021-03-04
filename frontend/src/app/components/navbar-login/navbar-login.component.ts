import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { TokenService } from '../../shared/token.service';
import { AuthStateService } from '../../shared/auth-state.service';

@Component({
  selector: 'app-navbar-login',
  templateUrl: './navbar-login.component.html',
  styleUrls: ['./navbar-login.component.scss']
})
export class NavbarLoginComponent implements OnInit {

  isSignedIn: boolean;

  constructor(
    private auth: AuthStateService,
    public router: Router,
    public token: TokenService,
  ) {
  }

  ngOnInit() {
    this.auth.userAuthState.subscribe(val => {
        this.isSignedIn = val;
    });
  }

  // Signout
  signOut() {
    this.auth.setAuthState(false);
    this.token.removeToken();
    this.router.navigate(['login']);
  }
}
