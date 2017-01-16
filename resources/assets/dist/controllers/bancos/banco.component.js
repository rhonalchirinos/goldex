"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var banco_service_1 = require('./../../services/banco.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var BancoComponent = (function () {
    function BancoComponent(bancoService) {
        this.bancoService = bancoService;
    }
    BancoComponent.prototype.ngOnInit = function () {
    };
    BancoComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    BancoComponent.prototype.openModal = function () {
        this.modal.show();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], BancoComponent.prototype, "modal", void 0);
    BancoComponent = __decorate([
        core_1.Component({
            selector: 'banco-component',
            template: "\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">\n<div class=\"modal-dialog\" style=\"width:85%; height:80%;\">\n<div class=\"modal-content\" *ngIf=\"banco\">\n  <div class=\"modal-header\">\n    <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n      <span aria-hidden=\"true\">&times;</span>\n    </button>\n    <h4 class=\"modal-title\">Detalle Banco {{banco.id}}</h4>\n  </div>\n  <div class=\"modal-body\">\n    <div class=\"panel-body\">\n      <div  class=\"col-md-12\">\n        <detalle [nombre]=\"'Banco :'\" [contenido]=\"banco.nombre\" ></detalle>\n      </div>\n    </div>\n  </div>\n</div>\n</div>\n</div>\n  ",
            providers: [banco_service_1.BancoService]
        }), 
        __metadata('design:paramtypes', [banco_service_1.BancoService])
    ], BancoComponent);
    return BancoComponent;
}());
exports.BancoComponent = BancoComponent;
//# sourceMappingURL=banco.component.js.map