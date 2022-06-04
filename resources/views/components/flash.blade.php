@if (session()->has('message'))

  
      <div x-data="{show:true}" x-init="setTimeout(()=> show = false,9000)" x-show="false"  class="alert text-center alert-primary" role="alert">
        {{ session('message') }}
      </div>
@endif