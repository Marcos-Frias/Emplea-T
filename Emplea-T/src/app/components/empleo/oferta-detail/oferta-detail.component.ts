import { Component, OnInit } from '@angular/core';
import { Oferta } from '../../../model/oferta/oferta.model';

@Component({
  selector: 'app-oferta-detail',
  templateUrl: './oferta-detail.component.html',
  styleUrls: ['./oferta-detail.component.css']
})
export class OfertaDetailComponent implements OnInit {

  constructor(private oferta: Oferta) { }

  ngOnInit() {
  }

}
