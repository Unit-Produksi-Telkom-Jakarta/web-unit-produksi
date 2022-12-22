<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
</head>
   <style>
    @page { size: auto;  margin: 0mm; }
  @import url('https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300;700&family=Poppins:wght@300;400;500;600;700&display=swap'); 
  h3{
    font-family: 'Chivo Mono', monospace;
}
label{
    font-family: 'Chivo Mono', monospace;
}
   </style>
<body>

<nav class="navbar ">
  <div class="container-fluid">
    <img src="{{ asset('/images/gelombang.png')}}" width="200px" alt="">
    <form class="d-flex" role="search">
      <img src="{{ asset('/images/logo.png')}}" width="100px" alt="" srcset="">
    </form>
  </div>
</nav>
<br>
<div class="container ms-5">

<form action="">

    <h3 class="">BUKTI PEMESANAN</h3>
    <br>
    <label cka for="">Nama:</label>
    <label for=""></label>
    <br>
    <label for="">No.Handphone:</label>
    <label for=""></label>
    <br>
    <label for="">Email:</label>
    <label for=""></label>
    <br>
    <label for="">Alamat:</label>
    <label for=""></label>
    <br>
    <br>
    <label for="">Estimasi Mulai:</label>
    <label for=""></label>
    <br>
    <label for="">Estimasi Selesai:</label>
    <label for=""></label>
    <br>
    <label for="">Request:</label>
    <label for=""></label>
    <br>
    <br>
    <br>
    <br>
    <label for="">Kode Invoice:</label>
    <label for=""></label>

</form>
</div>
</body>
</html>