
<?php $__env->startSection('title', 'Danh sách danh mục'); ?>
<?php $__env->startSection('main-content'); ?>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Hiển thị menu</th>
        <th>
            <a href="new-cate">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($c->id); ?></td>
                <td class="cate-name"><?php echo e($c->cate_name); ?></td>
                <td><?php echo e($c->desc); ?></td>
                <td><?php echo e($c->show_menu == 1 ? "Có" : "Không"); ?></td>
                <td>
                    <a href="edit-cate?id=<?php echo e($c->id); ?>">Sửa</a>
                    <a href="remove-cate?id=<?php echo e($c->id); ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
<script>
    $('.cate-name').click(function(){
        alert($(this).text());
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\thayThien\buoi5\pt15312-web-php2\mvc\app\views/cate-list.blade.php ENDPATH**/ ?>