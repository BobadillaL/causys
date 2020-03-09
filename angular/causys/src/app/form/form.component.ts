import { Component, OnInit } from '@angular/core';
import { Phone } from '../interfaces/phone';
import { PhonesService } from '../services/phones.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css']
})
export class FormComponent implements OnInit {
  phone: Phone = {
    brand: null,
    model: null,
    imei: null,
    number: null,
    owner: null,
    company: null,
    description: null,
    state: null
  };

  id: any;
  editing: boolean = false;
  phones: Phone[];
  constructor(private phonesService: PhonesService, private activateRoute: ActivatedRoute) {
    this.id = this.activateRoute.snapshot.params['id'];
    if (this.id){
      this.editing = true;
      this.phonesService.get().subscribe((data: Phone[]) => {
        this.phones = data;
        this.phone = this.phones.find((m) => {return m.id == this.id});
        console.log(this.phone);
      }, (error) => {
        console.log(error);
      })
    } else {
      this.editing = false;
    }
  }

  ngOnInit(): void {
  }

  savePhone() { 
    if(this.editing) {
      this.phonesService.put(this.phone).subscribe((data) => {
        alert('Telefono Actualizado');
        console.log(data);
      }, (error) => {
        console.log(error);
        alert('Ocurrio un error');
      });
    } else{
      this.phonesService.save(this.phone).subscribe((data) => {
        alert('Telefono Guardado');
        console.log(data);
      }, (error) => {
        console.log(error);
        alert('Ocurrio un error');
      });  
    }
    
  }

}
