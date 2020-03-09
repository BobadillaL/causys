import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormComponent } from './form/form.component';
import { RouterModule, Route } from '@angular/router';
import {HttpClientModule} from '@angular/common/http'
import {FormsModule} from '@angular/forms';
import { WelcomeComponent } from './welcome/welcome.component';
import { PhoneComponent } from './phone/phone.component';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component'

const routes: Route[] = [
  {path: '', component: WelcomeComponent},
  {path: 'login', component: LoginComponent},
  {path: 'phone', component: PhoneComponent},
  {path: 'form', component: FormComponent},
  {path: 'form/:id', component: FormComponent}

];

@NgModule({
  declarations: [
    AppComponent,
    FormComponent,
    WelcomeComponent,
    PhoneComponent,
    LoginComponent,
    RegisterComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes),
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
