import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { FormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { EmpleoModule } from './components/empleo/empleo.module';
import { EmpleoComponent } from './components/empleo/empleo.component';
import { OfertaComponent } from './components/empleo/oferta/oferta.component';
import { OfertaDetailComponent } from './components/empleo/oferta-detail/oferta-detail.component';
import { PostulacionComponent } from './components/empleo/postulacion/postulacion.component';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    EmpleoModule,
    BrowserModule,
    FormsModule,
    RouterModule.forRoot([
      { path: "empleo", component: EmpleoComponent},
      { path: "oferta", component: OfertaComponent},
      { path: "OfertInfo", component: OfertaDetailComponent},
      { path: "postulaciones", component: PostulacionComponent},
      { path: "**", redirectTo: "/empleo" }
    ])
  ],
  providers: [EmpleoModule],
  bootstrap: [AppComponent]
})
export class AppModule { }
