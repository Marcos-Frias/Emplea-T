import { Component, OnInit } from '@angular/core';
import { Empleo } from '../../../model/empleo/empleo.model';
import { EmpleoRepository } from '../../../model/empleo.repository';
import { Empresa} from '../../../model/empresa/empresa.model';
import { EmpresaRepository } from '../../../model/empresa.repository';
import { Oferta } from '../../../model/oferta/oferta.model';

@Component({
  selector: 'app-oferta',
  templateUrl: './oferta.component.html',
  styleUrls: ['./oferta.component.css']
})
export class OfertaComponent implements OnInit {

  private selectedCategory = null;
  private empleoPerPage = 9;
  private selectedPage = 1;

  constructor(private repositoryEmpleo: EmpleoRepository, private repositoryEmpresa: EmpresaRepository,
    private oferta: Oferta) { }

  ngOnInit() {
  }

  get empleos() {
      let pageIndex = (this.selectedPage - 1) *
      this.empleoPerPage
      return this.repositoryEmpleo.getEmpleos(this.selectedCategory)
      .slice(pageIndex, pageIndex + this.empleoPerPage);
  }

  get empresas(){
    return this.repositoryEmpresa.getEmpresas();
  }

  get categories() {
      return this.repositoryEmpleo.getCategories();
  }

  changeCategory(newCategory?: string) {
      this.selectedCategory = newCategory;
       this. selectedPage =1;
  }

  changePage(newPage: number) {
      this.selectedPage = newPage;
  }

  changePageSize(newSize: number) {
      this.empleoPerPage = Number(newSize);
  }

  get pageNumber(): number[] {
      return Array(Math.ceil(
          this.repositoryEmpleo.getEmpleos(this.selectedCategory).length /
          this.empleoPerPage
      )).fill(0).map((x, i) => i + 1);
  }

  addPostulacion(empleo: Empleo){
    this.oferta.addOferta(empleo);
    console.log('Se a postulado');
  }
}
