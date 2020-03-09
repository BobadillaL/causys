
import { Component, OnInit } from '@angular/core';
import { PhonesService } from '../services/phones.service';
import { Phone } from '../interfaces/phone';

@Component({
  selector: 'app-phone',
  templateUrl: './phone.component.html',
  styleUrls: ['./phone.component.css']
})

export class PhoneComponent implements OnInit {
  phones: Phone[];
  constructor(private phoneService: PhonesService) { 
    this.getPhones() ;
  }

  getPhones(){
    this.phoneService.get().subscribe((data: Phone[]) => {
      this.phones = data;
    }, (error) => {
      console.log(error);
      alert('Ocurrio un error');
    });
  }

  ngOnInit(): void {
  }

  delete(id: number){
    this.phoneService.delete(id).subscribe((data) => {
      alert('Eliminado con Exito!');
      console.log(data);
      this.getPhones();
    }, (error) => {
      console.log(error);
    });

  }

}
