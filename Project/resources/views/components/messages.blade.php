<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session()->has('message'))
<script>
  swal('{{ session('message') }}')
</script>
@endif