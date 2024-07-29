<x-module.admin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 style="font-weight: bold;">Selamat Datang {{ auth()->user()->nama }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <hr>
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon info-box-icon-custom elevation-1"><i class="fa fa-user-plus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Komisariat Teknik</span>
                            <span class="info-box-number">100</span>

                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon info-box-icon-custom elevation-1"><i class="fa fa-user-plus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Komisariat Pertanian</span>
                            <span class="info-box-number">50</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon info-box-icon-custom elevation-1"><i class="fa fa-user-plus"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Komisariat Tarbiyah</span>
                            <span class="info-box-number">70</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon info-box-icon-custom elevation-1"><i class="fa fa-user-plus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Komisariat Amki</span>
                            <span class="info-box-number">60</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    </x-admin>