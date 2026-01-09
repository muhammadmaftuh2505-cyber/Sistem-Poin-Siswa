

<?php $__env->startSection('content'); ?>
    <div class="mb-6">
        <a href="<?php echo e(route('admin.siswa.index')); ?>" class="text-indigo-600 hover:text-indigo-800">&larr; Kembali</a>
    </div>

    <div class="w-full max-w-lg mx-auto bg-white p-6 rounded-md shadow-md">
        <h3 class="text-2xl font-bold text-gray-700 mb-6">Tambah Siswa Baru</h3>

        <form action="<?php echo e(route('admin.siswa.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">NIS</label>
                <input type="text" name="nis"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                <input type="text" name="nama"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Kelas</label>
                <input type="text" name="kelas"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Contoh: VII-A" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email (untuk Login)</label>
                <input type="email" name="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:shadow-outline">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Maftuh\laravel-app\resources\views/admin/siswa/create.blade.php ENDPATH**/ ?>