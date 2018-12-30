import { Component, OnInit } from '@angular/core';
import { Oferta } from '../../../model/oferta/oferta.model';

@Component({
  selector: 'app-postulacion',
  templateUrl: './postulacion.component.html',
  styleUrls: ['./postulacion.component.css']
})
export class PostulacionComponent implements OnInit {

  constructor(private oferta: Oferta) { }

  ngOnInit() {
  }

}
