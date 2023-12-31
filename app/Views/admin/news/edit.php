<?= $this->extend('admin/admin_template'); ?>

<?= $this->section('content'); ?>


<div class="d-sm-flex align-items-center justify-content-between mb-4 m-4">
                <h1 class="h3 mb-0 text-gray-800">Form Ubah Equipment</h1>
            </div>
            <form class="col-lg-4 m-4" action="/content/update/<?= $news['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $news['slug']; ?>">
            <div class="form-group">
                <label for="nama_alat">Equipment Name</label>
                <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Nama equipment" value="<?= $news['nama_alat']; ?>">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" placeholder="Nama brand" value="<?= $news['brand']; ?>">
            </div>
            <div class="form-group">
                <label for="capacity">Capacity</label>
                <input type="text" class="form-control" id="capacity" name="capacity" placeholder="capacity" value="<?= $news['capacity']; ?>">
            </div>
            <!-- <div class="form-group">
                <label for="sampul">Sampul</label>
                <input type="text" class="form-control" id="sampul" name="sampul" onchange="previewImg()" placeholder="img" value="<?= $news['sampul']; ?>">
            </div> -->
            <div class="mt-2">
                <p>Change Image</p>
            </div>
            <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()" value="<?= $news['sampul']; ?>"> 
                    <label class="custom-file-label" for="sampul"><?= $news['sampul']; ?></label>
            </div>
            <div class="col-md-6 mb-3">
                    <img src="/img/<?= $news['sampul']; ?>" class="img-fluid img-thumbnail img-preview" alt="" value="<?= $news['sampul']; ?>">
            </div>
            <div class="form-group">
                <label for="pdf">PDF</label>
                <input type="text" class="form-control" id="pdf" name="pdf" placeholder="pdf file" value="<?= $news['pdf']; ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
            <!-- <div class="custom-file mb-2">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div> -->
            <!-- <div class="form-group mx-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">Double Rental
                    </label>
                </div>
            </div> -->
            
            </form>
            <!-- Form End -->

<?= $this->endSection(); ?>