<div>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        
    @endif

    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo del Usuario">
        </div>

        @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            </td>
                            <td>
                                <a href="{{route('admin.users.edit', $user)}}" class="btn btn-primary">Editar Rol</a>
                            </td>
                            <td>
                                <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>

        @else

            <div class="card-body">
                <strong>No hay ningun registro</strong>
            </div>

        @endif

    </div>
</div>
