import { NgModule } from '@angular/core';
import { HttpModule } from '@angular/http';

import { RestDataSource } from './rest.datasource';
import { EmpleoRepository } from './empleo.repository';
import { EmpresaRepository } from './empresa.repository';
import { Oferta } from './oferta/oferta.model';

@NgModule({
  imports: [HttpModule],
  declarations: [],
  providers: [RestDataSource, EmpleoRepository,EmpresaRepository,Oferta]
})
export class ModelModule { }
