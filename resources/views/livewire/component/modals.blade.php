<input type="checkbox" id="modal" class="modal-toggle" />
<label for="modal" class="modal cursor-pointer">
  <label class="modal-box relative" for="">
    <main>
        
    </main>
  </label>
</label>

@if ($open_value)
    <script>
        document.getElementById("modal").checked = true;
    </script>
@endif
