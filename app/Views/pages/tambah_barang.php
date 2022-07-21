<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Barang
                            </h4>

                            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('pesan'); ?>
                                </div>
                        </div>
                    <?php endif; ?>
                    </div>


                    <form action="/barang" method="POST" enctype='multipart/form-data'>
                        <?php csrf_field(); ?>
                        <div class="card-body">
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Kode Barang
                                    </label>
                                    <input required type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" placeholder="Kode Barang">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input required type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Volume</label>
                                    <input required type="number" name="volume" class="form-control" id="exampleInputEmail1" placeholder="Volume">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Satuan</label>
                                    <input required type="text" name="satuan" class="form-control" id="exampleInputEmail1" placeholder="Satuan">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input required type="number" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Harga">
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</div>

</section>
</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 1000);
</script>

<?= $this->endSection(); ?>