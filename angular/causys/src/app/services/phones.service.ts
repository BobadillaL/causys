import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import {Phone} from '../interfaces/phone';

@Injectable({
  providedIn: 'root'
})
export class PhonesService {
  
  API_ENDPOINT = 'http://localhost:8000/api';
  constructor(private httpClient: HttpClient) { }
  
  get() {
    return this.httpClient.get(this.API_ENDPOINT + '/phones');
  }

  save(phone: Phone){
   const headers = new HttpHeaders({'Content-Type': 'application/json'});
   return this.httpClient.post(this.API_ENDPOINT + '/phones', phone, {headers: headers});
  }

  put(phone){
    const headers = new HttpHeaders({'Content-Type': 'application/json'});
    return this.httpClient.put(this.API_ENDPOINT + '/phones/' + phone.id, phone, {headers: headers});
  }

  delete(id: number){
    return this.httpClient.delete(this.API_ENDPOINT + '/phones/' + id );
  }

}
