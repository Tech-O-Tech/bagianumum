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
                            <h4>Pemeliharaan Kendaraan
                            </h4>


                        </div>
                        <div class="card-body">

                            <section class="section">
                                <div class="card">
                                    <div class="card-body">


                                        <div class="col-6 col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body px-3 py-4-5">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="stats-icon blue">
                                                                <i class="iconly-boldProfile"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h6 class="text-muted font-semibold">Data Servis Mobil Tahun 2022</h6>

                                                            <h6 class="font-extrabold mb-0"> <a href="<?php base_url(); ?>/assets/images/Servis Mobil 2022.xlsx"> Download</a></h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </section>

                        </div>
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