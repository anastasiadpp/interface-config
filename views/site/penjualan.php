<?php

/* @var $this yii\web\View */

$this->title = 'Penjualan';
?>

<section class="content-header">
    <h1>
        Transaksi Penjualan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Transaksi</a></li>
        <li><a href="#">Penjualan</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Transaksi Penjualan</h3>

                    <div id="button"><a href="#popup">TambahPesanan</a></div>

                    <style type="text/css">
                        * {margin:0; padding: 0;}

                        body {font-family: Arial, Helvetica, sans-serif;}

                        /* Tombol Button Pesan */
                        #button {margin-right:   width: 5px; text-align: right;}
                        #button a {
                            width: 1000px;
                            height: 10px;
                            vertical-align: right;
                            background-color: #F00;
                            color: #fff;
                            text-decoration: none;
                            padding: 10px;
                            border-radius: 10px;
                            border: 1px solid transparent;
                        }

                        /* Jendela Pop Up */
                        #popup {
                            width: 100%;
                            height: 200%;
                            position: fixed;
                            background: rgba(0,0,0,.7);
                            top: 0;
                            left: 0;
                            z-index: 9999;
                            visibility: hidden;
                        }

                        .window {
                            width: 500PX;
                            height: 360PX;
                            background: #fff;
                            border-radius: 0PX;
                            position: relative;
                            padding: 10px;
                            text-align: center;
                            margin: 15% auto;
                        }
                        .box-info {
                            margin: -17px -1px 80px -10px;
                        }

                        /* Button Close */
                        .close-button {
                            width: 10%;
                            height: 6%;
                            line-height: 23px;
                            background: #000;
                            display: block;
                            text-align: center;
                            color: #fff;
                            text-decoration: none;
                            position: absolute;
                            top: -10px;
                            right: -10px;
                        }

                        /* Memunculkan Jendela Pop Up*/
                        #popup:target {
                            visibility: visible;
                        }
                    </style>

                    <div id="popup">
                        <div class="window">
                            <a href="#" class="close-button" title="Close">X</a>


                            <div class="box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Tambahkan Transaksi Penjualan</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Nomer</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Id_Pesanan</label>

                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Id Pesanan">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Id_Barang</label>

                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Id Barang">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>

                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Jumlah">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Harga">
                                            </div>
                                        </div>



                                        <div class="box-footer">

                                            <div class="checkbox">
                                                <!--  <label>
                                                   <input type="checkbox"> Remember me
                                                 </label> -->
                                                <button type="submit" class="btn btn-info pull-right">Tambahkan</button>
                                            </div>

                                        </div>
                                </form>
                            </div>




                        </div>
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nomer</th>
                            <th>Id Transaksi</th>
                            <th>Id Barang</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>11</td>
                            <td> 100 buah </td>
                            <td>Rp. 10.000,00</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>002</td>
                            <td>12</td>
                            <td> 200 buah </td>
                            <td>Rp. 15.000,00</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
