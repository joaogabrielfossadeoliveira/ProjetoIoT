<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Painel de Monitoramento</h4>
        <small class="text-muted">Atualizado há 2 minutos</small>
    </div>

   <form wire:submit.prevent="login">   
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" wire:model='email'>
    @error('email')<span class="text-danger">{{$message}}</span>@enderror 
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" wire:model='password'>
        @error('password')<span class="text-danger">{{$message}}</span>@enderror 
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
