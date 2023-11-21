@if (session()->has('message'))
<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Massprofit</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        {{ session('message') }}
    </div>
  </div>
@endif
