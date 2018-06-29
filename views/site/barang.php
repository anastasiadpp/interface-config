<?php

$this->title = 'Barang';
?>


<section class="content-header">
    <h1>
        Data Barang Apotik
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="#">Barang</a></li>
    </ol>
</section>
<!-- Content Header (Page header) -->
<section class="content">

    <!-- /.search form -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div id="button"><a href="#popup">Tambah_Barang</a></div>
                    <h3 class="box-title"> </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Cari Barang">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <style type="text/css">
                        * {margin:0; padding: 0;}

                        body {font-family: Arial, Helvetica, sans-serif;}

                        /* Tombol Button Pesan */
                        #button {margin-left: :   width: 0px; text-align: left;}
                        #button a {
                            width: 100px;
                            height: 10px;
                            vertical-align: left;
                            background-color: #F00;
                            color: #fff;
                            text-decoration: none;
                            padding: 8px;
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
                            height: 400PX;
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
                                    <h3 class="box-title">Tambahkan Barang</h3>
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
                                            <label for="inputEmail3" class="col-sm-2 control-label">ID</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Kode</label>

                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Id Pesanan">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Id Barang">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>

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
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Nomer</th>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Harga</th>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>183</td>
                            <td>001</td>
                            <td>Amocilin</td>
                            <td><span class="label label-success">Tersedia</span></td>
                            <td>Rp. 10.000,00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>219</td>
                            <td>002</td>
                            <td>Ramaflu</td>
                            <td><span class="label label-warning">Inden</span></td>
                            <td>Rp. 26.000,00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>219</td>
                            <td>003</td>
                            <td>Betadine</td>
                            <td><span class="label label-success">Tersedia</span></td>
                            <td>Rp. 16.000,00</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>175</td>
                            <td>004</td>
                            <td>Paramex</td>
                            <td><span class="label label-danger">Habis</span></td>
                            <td>Rp. -</td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
