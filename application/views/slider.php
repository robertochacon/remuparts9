<?php $this->load->view('layout/header_inside');?>



<div class="col-md-12 grafica">

<h1>Subir imagen</h1><h4>Tamaño: 1900X1080</h4>

<form action="<?php echo base_url().'home/guardarImg';?>" class="mb-3" method="post" enctype="multipart/form-data">
  <input id="archivos" name="images" type="file" multiple=true class="file-loading">
  <input class="btn btn-primary" type="submit" name="" value="Guardar">
</form>

<hr>

<div class="row mb-3">
<?php foreach ($images as $img => $value) { //var_dump($images[0]);?>
<div class="col-sm-12 col-md-6 col-lg-4 mt-2">
<div class="card" style="">
  <img class="card-img-top" src="<?= base_url()?>assets/img/slider/<?=$value?>" alt="Card image cap">
  <div class="card-body text-right">
    <a href="<?= base_url()?>home/eliminarImg?delete=<?=$value?>" class="btn btn-danger text-white">Eliminar</a>
  </div>
</div>
</div>
<?php } ?>
</div>



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
    <?php foreach ($images as $img => $value) { //var_dump($images[0]);?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$img?>" class="<?= ($img == 0) ? 'active' : '' ?>"></li>
    <?php } ?>
  </ol>
  <div class="carousel-inner">
<!--     <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/img/slider/4.jpg" alt="First slide">
    </div> -->
    <?php foreach ($images as $img => $value) {?>
    <div class="carousel-item <?= ($img == 0) ? 'active' : '' ?>">
      <img class="d-block w-100" src="<?= base_url()?>assets/img/slider/<?=$value?>" alt="First slide">
    </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<script>
$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>



</div>

</div>
</body>
</html>