<?php $__env->startSection('content'); ?>
    <h1 class="text-center pt-3">
        <b>A ti állataitok</b>
    </h1>
    <form action="/AddAnimal" >
        <div class="row">
            <div class="col-6">
                <div class="rotating-border">
                    <button class="Button"><img class="Buttonimg" src="../assets/img/add-button.png" alt=""></button>
                </div>
            </div>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6">
                    <div class="row animalCard">
                        <div class="col">
                            <div class="">
                                <h2>A nevem: <?php echo e($row->name); ?></h4><hr>
                                <h4>Az állatfajom: <?php echo e($row->animal); ?></h4><hr>
                                <h4>A fajtám: <?php echo e($row->species); ?></h4><hr>
                                <h4>A korom: <?php echo e($row->age); ?> Év</h4><hr>
                                <h4><?php echo e($row->color); ?> színű vagyok</h4><hr>
                            </div>
                        </div>
                        <div class="col">
                            <img style="width: 100%" src="<?php echo e(asset('storage/'.$row->imgId)); ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\boton\Desktop\progi\laravell\gridAddDb\resources\views/welcome.blade.php ENDPATH**/ ?>