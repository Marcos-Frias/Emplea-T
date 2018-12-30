import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { Empleo } from './empleo/empleo.model';
import { Empresa } from './empresa/empresa.model';

import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';

const PROTOCOL = 'http';
const PORT = 80;

@Injectable()
export class RestDataSource{
  private baseUrl = `http://localhost/emplea-t/apiemplea-t/api/`;

  constructor(private http: Http){  }

  getEmpleos():Observable<Empleo[]>{
    return this.http.get(this.baseUrl + "empleo").pipe(map( response => response.json())) ;
  }

  getEmpresas():Observable<Empresa[]>{
    return this.http.get(this.baseUrl + "empresa").pipe(map( response => response.json())) ;
  }

  getEmpleo(idEmpleo: number):Observable<Empleo[]>{
    return this.http.get(this.baseUrl + "empleo/"+ idEmpleo).pipe(map(response => response.json()));
  }

}
