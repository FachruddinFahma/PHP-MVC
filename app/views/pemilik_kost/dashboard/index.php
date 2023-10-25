<section id="home" class="content">
    <div class="container p-4">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon purple">
                                    <i class="iconly-boldShow"></i>
                                    <!-- icon -->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Rating Kost</h6>
                                <h6 class="font-extrabold mb-0">4,5</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon blue">
                                    <i class="iconly-boldProfile"></i>
                                    <!-- icon -->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Jumlah Penghuni</h6>
                                <h6 class="font-extrabold mb-0">64</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon green">
                                    <i class="iconly-boldAdd-User"></i>
                                    <!-- icon -->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Jumlah Kamar</h6>
                                <h6 class="font-extrabold mb-0">20</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon red">
                                    <i class="iconly-boldBookmark"></i>
                                    <!-- icon -->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Total Pendapatan</h6>
                                <h6 class="font-extrabold mb-0">Rp. 6.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-container">

            <div name="chart_card" class="card mt-4">
                <div class="card-body px-3 py-4-5 ms-2 mt-2">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Grafik Pendapatan</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div name="history_card" class="card mt-4">
                <div class="card-body px-3 py-4-5 ms-2 mt-2">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>History Pembayaran</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .card {
        box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .card-container {
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .card-container [name="chart_card"],
    .card-container [name="history_card"] {
        flex: 1;
    }
</style>