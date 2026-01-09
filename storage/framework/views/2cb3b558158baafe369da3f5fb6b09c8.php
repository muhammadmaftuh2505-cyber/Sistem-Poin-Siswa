

<?php $__env->startSection('content'); ?>
    <div class="mb-6 flex justify-between items-center">
        <a href="<?php echo e(route('admin.siswa.index')); ?>" class="text-indigo-600 hover:text-indigo-800">&larr; Kembali ke
            Daftar</a>
        <h3 class="text-2xl font-bold text-gray-700">Detail Siswa</h3>
    </div>

    <!-- Info Card -->
    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <div class="flex justify-between">
            <div>
                <h4 class="text-xl font-bold"><?php echo e($siswa->nama); ?></h4>
                <p class="text-gray-500">NIS: <?php echo e($siswa->nis); ?> | Kelas: <?php echo e($siswa->kelas); ?></p>
                <p class="text-gray-500">Email: <?php echo e($siswa->user->email); ?></p>
            </div>
            <div class="text-right">
                <div class="text-sm text-gray-500 mb-1">Total Poin Akhir</div>
                <div class="text-4xl font-bold <?php echo e($siswa->totalPoinAkhir() < 0 ? 'text-red-500' : 'text-blue-500'); ?>">
                    <?php echo e($siswa->totalPoinAkhir()); ?>

                </div>
            </div>
        </div>
        <div class="mt-6 flex space-x-8 border-t pt-4">
            <div>
                <span class="text-gray-500 text-sm">Poin Prestasi:</span>
                <span class="text-green-600 font-bold ml-1">+<?php echo e($siswa->totalPoinPrestasi()); ?></span>
            </div>
            <div>
                <span class="text-gray-500 text-sm">Poin Pelanggaran:</span>
                <span class="text-red-600 font-bold ml-1">-<?php echo e($siswa->totalPoinPelanggaran()); ?></span>
            </div>
        </div>
    </div>

    <!-- History Table -->
    <h4 class="text-xl font-medium text-gray-700 mb-4">Riwayat Poin</h4>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Tanggal</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Jenis</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Kategori</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Poin</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Keterangan</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $riwayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500"><?php echo e($poin->tanggal->format('d/m/Y')); ?>

                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo e($poin->jenis == 'prestasi' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'); ?>">
                                <?php echo e(ucfirst($poin->jenis)); ?>

                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500"><?php echo e($poin->kategori); ?></td>
                        <td
                            class="px-6 py-4 whitespace-no-wrap text-sm font-bold <?php echo e($poin->jenis == 'prestasi' ? 'text-green-600' : 'text-red-600'); ?>">
                            <?php echo e($poin->jenis == 'prestasi' ? '+' : '-'); ?><?php echo e($poin->jumlah); ?>

                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500"><?php echo e($poin->keterangan); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada riwayat.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Maftuh\laravel-app\resources\views/admin/siswa/show.blade.php ENDPATH**/ ?>