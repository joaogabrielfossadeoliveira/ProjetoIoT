<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card shadow-sm" style="width: 100%; max-width: 600px;">
        <div class="card-body">
            <h4 class="card-title mb-4 text-center">
                <i class="bi bi-plus-circle"></i> Criar Sensor
            </h4>

            <form wire:submit.prevent="store">

                   <div>    
                    <label class="form-label"><i class="bi bi-clipboard"></i> Ambientes</label>
                    <select class="form-select" aria-label="ambiente_id" wire:model='ambiente'>
                        <option hidden>Selecione o seu ambiente</option>
                        @foreach ($ambientes as $ambiente)
                        <option value={{ $ambiente->id }}> {{ $ambiente->nome }} </option>
                        @endforeach
                    </select>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label"><i class="bi bi-person"></i> Codigo</label>
                    <input type="text" wire:model="codigo" class="form-control">
                    @error('Codigo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label"><i class="bi bi-credit-card"></i> Tipo</label>
                    <input type="text" wire:model="tipo" class="form-control">
                    @error('tipo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
               <div class="mb-3">
                    <label class="form-label"><i class="bi bi-chat-square-dots"></i> descricao</label>
                    <input type="text" wire:model="descricao" class="form-control">
                    @error('descricao')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label class="form-label"><i class="bi bi-clipboard"></i> Status</label>
                    <select class="form-select" aria-label="status" wire:model='status'>
                        <option hidden></option>
                        <option value="1">ativo </option>
                        <option value="0">inativo</option>
                    </select>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="d-flex justify-content-between">
                    <button wire:click type="submit" class="btn btn-success"
                        wire:confirm = "Tem certeza que deseja cadastrar?">
                        <div>
                        <i class="bi bi-check-circle"></i> Cadastrar
                        </div>

                    </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
