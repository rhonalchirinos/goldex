<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Movimientos</title> 
  </head>
  <body>
    <div class="divcabezera">
    <table class="cabezera">
      <thead>
        <tr>
          <th style="width: 25%;"><h3 > Goldex</h3></th>
          <th style="width: 50%;"><h3> Movimientos Efectivo. </h3></th>
          <th style="width: 25%;" align="right">Fecha {{$desde}} - {{$hasta}}</th>
        </tr>
        @if ($negocio)
        <tr>
          <th>
            <p><strong>Negocio o socio :</strong>{{$negocio->nombre}} {{$negocio->rif}}</p>
          </th>
        </tr>
        @endif
      </thead>
    </table>
    </div>
    <br>
    <table class="tablecontenido" cellpadding="4"  >
         <thead  border="1">
          <tr valign="bottom"  align="center">
            <th style="width: 5%"   border="1"><strong>Id</strong></th>
            <th style="width: 32%"   border="1"><strong>Descripcion</strong></th>
            <th style="width: 20%"  border="1"><strong>Negocio o Socio</strong></th>
            <th style="width: 8%"  border="1"><strong>Fecha</strong></th>
            <th style="width: 5%"   border="1"><strong>%</strong></th>
            <th style="width: 15%"  border="1"><strong>Monto</strong></th>
            <th style="width: 15%"  border="1"><strong>Total</strong></th>
          </tr>
        </thead>
        <tbody >
          @foreach ($movimientos as $movimiento)
            <tr valign="bottom" align="center">
            <td style="width: 5%;"  border="1">{{$movimiento->id}}</td>
            <td style="width: 32%;"  border="1">{{$movimiento->descripcion}}</td>
            <td style="width: 20%;" border="1">{{$movimiento->negocio->nombre}}</td>
            <td style="width: 8%;" border="1">{{$movimiento->fecha}}</td>
            <td style="width: 5%;"  border="1" >{{$movimiento->comision}}</td>
            <td style="width: 15%;" border="1">{{number_format($movimiento->monto,2)}}</td>
            <td style="width: 15%;" border="1">{{number_format($movimiento->saldo,2)}}</td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5"></td>
            <td align="right" border="1"><strong>COMISION :</strong></td>
            <td align="center" border="1">{{number_format($comision,2)}} Bs</td>
          </tr>
          <tr>
            <td colspan="5"></td>
            <td align="right" border="1"><strong>TOTAL :</strong></td>
            <td align="center" border="1">{{number_format($total,2)}} Bs</td>
          </tr>
        </tfoot>  
      </table>
  </body>
</html>
 