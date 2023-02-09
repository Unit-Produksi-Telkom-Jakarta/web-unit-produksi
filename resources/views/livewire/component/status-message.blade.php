{{-- ModalMessageStatus --}}
@if(session('success'))
  <input type="checkbox" id="success" class="modal-toggle" />
  <label for="success" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <div class="flex justify-center">
          <svg class="text-green-500 w-28 h-28 animate-fade-in-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h1 class="flex justify-center font-bold text-2xl">{{session('success')}}</h1>
    </label>
  </label>

  <script>
      document.getElementById("success").checked = true;
  </script>

@elseif(session('error'))
<input type="checkbox" id="error" class="modal-toggle" />
  <label for="error" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <div class="flex justify-center">
          <svg class="text-red-500 w-28 h-28 animate-fade-in-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h1 class="flex justify-center font-bold text-2xl">{{session('error')}}</h1>
    </label>
  </label>

  <script>
      document.getElementById("success").checked = true;
  </script>
@endif
{{-- endModalMessageStatus --}}
