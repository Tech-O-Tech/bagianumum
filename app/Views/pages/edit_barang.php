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
                            <h4>Edit Data Barang
                            </h4>


                        </div>

                    </div>


                    <form action="/barang/<?= $product->id_barang; ?>" method="POST">
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
                                    <input type="hidden" value="<?= $product->id_barang; ?>" name="id_barang" class="form-control" id="exampleInputEmail1" placeholder="Kode Barang">
                                    <input type="hidden" name="_method" value="PUT">
                                    <label for="exampleInputEmail1">Kode Barang
                                    </label>
                                    <input required type="text" value="<?= $product->kode_barang; ?>" name="kode_barang" class="form-control" id="exampleInputEmail1" placeholder="Kode Barang">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input required type="text" value="<?= $product->nama; ?>" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Volume</label>
                                    <input required type="number" value="<?= $product->volume; ?>" name="volume" class="form-control" id="exampleInputEmail1" placeholder="Volume">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Satuan</label>
                                    <input required type="text" value="<?= $product->satuan; ?>" name="satuan" class="form-control" id="exampleInputEmail1" placeholder="Satuan">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input required type="number" value="<?= $product->harga; ?>" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Harga">
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