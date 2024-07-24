
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman Kamar</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <div class="card-body">
                      <h3><?php echo e($kamar->nama_kamar); ?></h3>
                      <p><?php echo e($kamar->jenis_kamar); ?></p>
                      <p><?php echo e($kamar->ukuran_kamar); ?></p>
                      <p><?php echo e($kamar->harga); ?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Downloads\pemesananHotel\resources\views/levelAdmin/kamar/show.blade.php ENDPATH**/ ?>