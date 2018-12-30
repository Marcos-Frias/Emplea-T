import { Injectable } from '@angular/core';
import { Empresa } from './empresa/empresa.model';
import { RestDataSource } from './rest.datasource';


@Injectable()
export class EmpresaRepository{
  private empresas: Empresa[] = [];

  constructor(
    private dataSource: RestDataSource
  ){
    dataSource.getEmpresas().subscribe(
      response => (
        this.empresas = response['empresas'],
        console.log(this.empresas)
    ),
    error => console.log('There is an error' + error),
    () => console.log('Completed ...')
  );
  }

  getEmpresas(): Empresa[]{
    return this.empresas;
  }

}
