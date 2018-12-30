export class Empleo {
    constructor(
      public idOferta: number,
      public horario: string,
      public sueldo: number,
      public dias: string,
      public observacion: string,
      public id_puesto: string,
      public id_reclutador: number,
      public experienciaLab: string,
      public id_escolaridad: number,
      public conocimientosReq: string,
      public funcionesDes:string,
      public prestaciones:string,
      public documentacion: string,
      public exclusividad:string,
      public id_Sexo: number
    ){}
}
