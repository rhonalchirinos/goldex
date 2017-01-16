import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'movimiento-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" style="width:85%; height:80%;">
<div class="modal-content" *ngIf="movimiento">
<div class="modal-header">
  <button type="button" class="close" (click)="hideModal()" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <h4 class="modal-title">Movimiento {{movimiento.id}}</h4>
</div>
<div class="modal-body">
  <div class="panel-body">
    <div class="col-md-12">
      <movimiento-detalle-component  [movimiento]="movimiento"></movimiento-detalle-component>
  </div>
</div> <!-- end  modal-body --> 
</div>
</div>
</div>
  `,
  providers: [MovimientoService]
})
export class MovimientoComponent implements OnInit {
  @Input()
  movimiento: Movimiento;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private movimientoService: MovimientoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal() :void {
    this.modal.show();
  }
}
   
 