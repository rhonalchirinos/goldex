<tr>
  <td>{{$banco->id}}</td>
  <td>{{$banco->nombre}}</td>
  <td align="right">
    <span class="dropdown" >
      <button 
          class="btn btn-default" type="button" 
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-th" aria-hidden="true" ></span>
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="split-button">
        <li  role="menuitem">
          <a href="{{ route('bancos.show', $banco->id) }}">
            Mostrar
          </a>
        </li>
        <li role="menuitem">
          <a href="{{ route('bancos.edit', $banco->id) }}">
            Editar
          </a>
        </li>
        <li role="menuitem" (click)="onEliminar(abono)">
          <form action="{{ route('bancos.destroy', $banco->id) }}" method="POST" style="display: inline;"    
            onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
          </form>
        </li>
      </ul>
    </span>
  </td>
</tr>