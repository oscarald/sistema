<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del AOP">
        </div>
        @if ($tramites->count())
    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th># de Trámite</th>
                        <th>Fecha de Ingreso</th>
                        <th>Nombre AOP</th>
                        <th>Nombre Empresa</th>
                        <th>Tipo Trámite</th>
                        <th>Estado</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tramites as $tramite)
                        <tr>
                            <td>{{$tramite->id}}</td>
                            <td>{{$tramite->created_at}}</td>
                            <td>{{$tramite->nombre}}</td>
                            <td>{{$tramite->empresa}}</td>
                            <td>{{$tramite->tipo}}</td>
                            <td>
                                
                            @switch($tramite->estado)
                                @case(1)
                                    Para Asignar Técnico OSC
                                    @break
                                @case(2)
                                    En revisíon por Técnico OSC
                                    @break
                                @case(3)
                                    Trámite con observación OSC
                                    @break
                                @case(4)
                                    Trámite enviado AACN
                                    @break
                                @case(5)
                                    Para Asignar Técnico AACN
                                    @break
                                @case(6)
                                    En revisíon por Técnico AACN
                                    @break
                                @case(7)
                                    Trámite con observación AACN
                                    @break
                                @case(8)
                                    Trámite Finalizado
                                    @break
                                @case(9)
                                    Trámite Rechazado
                                    @break
                            
                                @default
                                    
                            @endswitch
                            </td>
                            <td>
                                @isset($tramite->obserosc)
                                    <p><a href="observacionosc/{{$tramite->id}}" class="btn btn-info">Descargar Informe de Revisión OSC</a></p>
                                        @if($tramite->estado == 3)
                                            <a href="{{ route('admin.tramites.edit', $tramite->id )}}" class="btn btn-warning">Corregir observaciones</a>
                                        
                                        @endif
                                        
                                @endisset
                            </td>
                            <td>
                                @isset($tramite->obseraacn)
                                    <p><a href="observacionaacn/{{$tramite->id}}" class="btn btn-info">Descargar Informe de Revisión AACN</a></p>
                                        @if($tramite->estado == 7)
                                        
                                            <a href="{{ route('admin.tramites.edit', $tramite->id )}}" class="btn btn-warning">Corregir observaciones</a>
                                        
                                        @endif
                                        
                                @endisset
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$tramites->links()}}
        </div>
        @else
            <div class="card-body">
                <strong>No hay ningun trámite con ese nombre</strong>
            </div>
        @endif
    </div>
    




</div>
