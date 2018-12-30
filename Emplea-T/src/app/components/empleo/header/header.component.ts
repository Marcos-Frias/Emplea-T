import { Component, OnInit } from '@angular/core';
import { Oferta } from '../../../model/oferta/oferta.model';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  constructor(public oferta: Oferta) { }

  ngOnInit() {
  }

}
