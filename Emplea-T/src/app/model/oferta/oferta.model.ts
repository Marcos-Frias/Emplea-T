import { Injectable} from '@angular/core';
import { Empleo } from '../empleo/empleo.model';

@Injectable()
export class Oferta {
    public lines: OfertasLine[] = [];
    public itemCount: number = 0;
    public numerOfertas: number = 0;

    addOferta(empleo: Empleo, quantity:number = 1){
      let line = this.lines.find( line => line.empleo.idOferta == empleo.idOferta );
      if (line !== undefined) {
          line.quantity += quantity;
      }else{
        this.lines.push(new OfertasLine(empleo, quantity));
      }
      this.recalculate();
      console.log(this.lines);
      console.log(this.itemCount);
    }

    removeLine(idOferta: number){
      let index = this.lines.findIndex (line => idOferta == line.empleo.idOferta);
      this.lines.splice(index, 1);
      this.recalculate();
    }

    private recalculate(){
      this.itemCount = 0;
      this.lines.forEach(
        l => {
          this.itemCount += l.quantity;
        }
      )
    }
}

export class OfertasLine {
    constructor(
      public empleo: Empleo,
      public quantity: number
    ){}

    get lineTotal(){
      return this.quantity;
    }
}
