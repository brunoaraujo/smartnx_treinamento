<div>
    <br>
    @if($isOpen)
        <div id="exampleModalLive" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <input type="text" wire:model.defer="form.cat_nome"/>
                    @error('form.cat_nome')<div class="text-danger">{{ $message }}</div>@enderror
                    <button wire:click="store">SALVAR</button>
                </div>
            </div>
        </div>
    @endif
    <button wire:click="new">NOVO</button>
    <table class="table">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>CATEGORIA</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $categoria)
                <tr>
                    <td>{{$categoria->cat_id}}</td>
                    <td>{{$categoria->cat_nome}}</td>
                    <td>
                        <a class="btn btn-warning" wire:click="edit({{$categoria->cat_id}})">Editar</a>
                        <a class="btn btn-danger" wire:click="delete({{$categoria->cat_id}})">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
