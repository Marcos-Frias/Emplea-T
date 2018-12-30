import { Injectable } from '@angular/core';
import { Empleo } from './empleo/empleo.model';
import { RestDataSource } from './rest.datasource';


@Injectable()
export class EmpleoRepository{
  private empleos: Empleo[] = [];
  private empleo: Empleo[] = [];
  private categories: string[] = [];

  constructor(
    private dataSource: RestDataSource
  ){
    dataSource.getEmpleos().subscribe(
      response => (
        this.empleos = response['empleos'],
        this.categories =  response['empleos']
          .map(e => e.id_puesto)
          .filter((c, index, array) => array.indexOf(c) == index).sort(),
      console.log(this.empleos)
    ),
    error => console.log('There is an error' + error),
    () => console.log('Completed ...')
  );
  }

  getEmpleos(category: string = null): Empleo[]{
    return this.empleos.filter(
      e => category == null || category == e.id_puesto
    );
  }

  getCategories(): string[]{
    return this.categories;
  }

  
}
