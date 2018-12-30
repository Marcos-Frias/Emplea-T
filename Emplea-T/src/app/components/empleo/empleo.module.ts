import { NgModule } from '@angular/core';
import { ModelModule } from '../../model/model.module';
import { BrowserModule } from '@angular/platform-browser';
import { EmpleoComponent } from './empleo.component';
import { SpinnerComponent } from './spinner/spinner.component';
import { RouterModule } from '@angular/router';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { OfertaComponent } from './oferta/oferta.component';
import { OfertaDetailComponent } from './oferta-detail/oferta-detail.component';
import { PostulacionComponent } from './postulacion/postulacion.component';

@NgModule({
  imports: [
    ModelModule,
    BrowserModule,
    RouterModule
  ],
  declarations: [
    EmpleoComponent,
    SpinnerComponent,
    FooterComponent,
    HeaderComponent,
    OfertaComponent,
    OfertaDetailComponent,
    PostulacionComponent,
  ],
  providers: [],
  exports: [
    EmpleoComponent
  ]
})
export class EmpleoModule { }
