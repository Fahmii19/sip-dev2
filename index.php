<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Perijinan dan Investasi DKI Jakarta</title>

    <link rel="icon" href="assets/gambar/favicon.ico">


    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">

    <!-- Icon -->
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/remix-icon/remixicon.css">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- MAPBOX -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.2.2/mapbox-gl-draw.css" type="text/css">

    <!-- custom -->
    <link rel="stylesheet" href="assets/css/custom_baru.css">
    <link rel="stylesheet" href="assets/css/data.css">


</head>

<body>


    <!-- hide -->
    <button class="btn btn_hide_side_bar" type="button" id="hide_side_bar">
        <i class="btn_icon_hide ri-arrow-left-s-fill fa-2x"></i>
    </button>

    <!-- show -->
    <button class="btn btn_show_side_bar" type="button" id="show_side_bar">
        <i class="btn_icon_show ri-arrow-right-s-fill fa-2x"></i>
    </button>

    <!-- KONTEN -->
    <div class="pembungkus" id="sidebar">
        <div class="dalam">

            <div class="kotak_judul">
                <div class="dalam_kotakjudul">
                    <div>
                        <div class="text-center pt-2 pb-2">
                            <img src="assets/gambar/logo_jakpintas.png" width="70px">
                        </div>
                    </div>
                    <div>
                        <p><span class="TextHead font-weight-bold">Peta Perijinan dan Investasi</span></p>
                        <div class="name_kotak">
                            <p style="font-size: 15px; color: #FFFFFF;">Smart City, Smart Province</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body color_card_body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="tempat_search searchh">
                            <div class="search_box">
                                <span class="menu">
                                    <button class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="las la-bars"></i>
                                    </button>

                                    <!-- silent dropdown -->
                                    <!-- <div class="dropdown-menu" style="background-color: #117A96; width:870%;">
                                        <a class="dropdown-item" href="#"><i class="las la-link"></i> Bagikan</a>
                                        <a class="dropdown-item" href="#"><i class="las la-expand"></i> Sematkan Peta</a>
                                        <a class="dropdown-item" href="#"><i class="las la-comment"></i> Kirim Masukan</a>
                                        <a class="dropdown-item" href="#"><i class="las la-print"></i> Cetak</a>
                                        <a class="dropdown-item" href="#"><i class="las la-question-circle"></i> Bantuan action</a>
                                    </div> -->
                                </span>

                                <input type="text" class="input" placeholder="Cari kelurahan disini...">

                                <span class="btn-search">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Checkbox -->
                <div class="layout_checkbox">

                    <div class="form-check">
                        <ul class="list-group list-group-flush">
                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                <input type="checkbox" class="form-check-input" id="checkbox1">
                                <label style="margin-top: 5px;" class="form-check-label text_checkbox text_all" for="checkbox1">Wilayah</label>
                            </li>
                        </ul>
                    </div>

                    <div class="form-check">
                        <ul class="list-group list-group-flush">
                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                <input type="checkbox" class="form-check-input" id="checkbox2">
                                <label style="margin-top: 5px;" class="form-check-label text_checkbox text_all" for="checkbox2">Total Omzet Per Kelurahan</label>
                            </li>
                        </ul>
                    </div>

                    <div class="form-check">
                        <ul class="list-group list-group-flush">
                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                <input type="checkbox" class="form-check-input" id="checkbox3">
                                <label style="margin-top: 5px;" class="form-check-label text_checkbox text_all" for="checkbox3">Rencana Kota</label>
                            </li>
                        </ul>
                    </div>

                    <div class="form-check">
                        <ul class="list-group list-group-flush">
                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                <input type="checkbox" class="form-check-input" id="checkbox4">
                                <label style="margin-top: 5px;" class="form-check-label text_checkbox text_all" for="checkbox4">Sebaran Usaha Mikro Kecil</label>
                            </li>
                        </ul>
                    </div>

                    <div class="form-check mb-2">
                        <ul class="list-group list-group-flush">
                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                <input type="checkbox" class="form-check-input" id="checkbox4">
                                <label style="margin-top: 5px;" class="form-check-label text_checkbox text_all" for="checkbox4">Harga Sewa Kantor</label>
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- Range Inputs -->
                <div class="form-group w-100 mt-3 mb-0 ml-2" id="radiusSlide">
                    <label style="font-size: 13px; color: #FFFFFF;" for="formControlRange">Radius</label>
                    <label style="font-size: 13px; color: #FFFFFF;" id="OutputControlRange">0 Km</label>

                    <input type="range" style="height: 6px;" class="form-control-range" id="ControlRange" min="500" max="3000" step="500" value="1000">

                </div>

                <div class="text-right pos_lang text_all">
                    <a href="#" class="languange" title="Menggunakan Bahasa Indonesia">Bahasa</a> | <a href="#" class="languange" title="Menggunakan Bahasa Inggris">English</a>
                </div>

                <hr>

                <!-- Menu -->
                <div class="container pos_container_menu">
                    <div class="flex-container">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">

                            <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:7px;" class="btn active btn-outline-light btn-md tombol_menu" id="lokasi-tab" data-toggle="pill" href="#pills-lokasi" role="tab" aria-controls="pills-lokasi" aria-selected="true"><i class="fa fa-map-marker"></i></a>
                                <br>
                                <label class="size_menu">Lokasi</label>
                            </li>

                            <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:7px;" class="btn  btn-outline-light btn-md tombol_menu" id="ekonomi-tab" data-toggle="pill" href="#pills-ekonomi" role="tab" aria-controls="pills-ekonomi" aria-selected="false"><i class="ri-funds-box-fill"></i></a>
                                <br>
                                <label class="size_menu">Ekonomi</label>
                            </li>

                            <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:9px;" class="btn btn-outline-light btn-md tombol_menu" id="zonasi-tab" data-toggle="pill" href="#pills-zonasi" role="tab" aria-controls="pills-zonasi" aria-selected="false"><i class="ri-map-2-fill"></i></a>
                                <br>
                                <label class="size_menu">Zonasi</label>
                            </li>

                            <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:9px;" class="btn btn-outline-light btn-md tombol_menu" id="persil-tab" data-toggle="pill" href="#pills-persil" role="tab" aria-controls="pills-persil" aria-selected="false"><i class="ri-home-4-fill"></i></a>
                                <br>
                                <label class="size_menu">Persil</label>
                            </li>

                            <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:9px;" class="btn  btn-outline-light btn-md tombol_menu" id="poi-tab" data-toggle="pill" href="#pills-poi" role="tab" aria-controls="pills-poi" aria-selected="false"><i class="fa fa-crosshairs"></i></a>
                                <br>
                                <label class="size_menu">POI</label>
                            </li>

                            <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:9px;" class=" btn btn-outline-light btn-md tombol_menu" id="kblikeg-tab" data-toggle="pill" href="#pills-kblikeg" role="tab" aria-controls="pills-kblikeg" aria-selected="false"><i class="ri-user-search-fill"></i></a>
                                <br>
                                <label style="margin-top: 8px;" class="size_menu">Kode KBLI</label>
                            </li>

                            <!-- <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:9px;" class="btn  btn-outline-primary btn-md tombol_menu" id="kblilok-tab" data-toggle="pill" href="#pills-kblilok" role="tab" aria-controls="pills-kblilok" aria-selected="false"><i class="ri-user-search-fill"></i></a>
                                <br>
                                <label style="margin-top: 8px;" class="size_menu">KBLI Lokasi</label>
                            </li> -->

                            <!-- <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:9px;" class="btn btn-outline-primary btn-md tombol_menu" id="kalkulator-tab" data-toggle="pill" href="#pills-kalkulator" role="tab" aria-controls="pills-kalkulator" aria-selected="false"><i class="ri-calculator-fill"></i></a>
                                <br>
                                <label class="size_menu">Kalkulator</label>
                            </li> -->

                            <!-- <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 p-2 nav-item">
                                <a style="padding:9px;" class="btn btn-outline-primary btn-md tombol_menu" id="hbu-tab" data-toggle="pill" href="#pills-hbu" role="tab" aria-controls="pills-hbu" aria-selected="false"><i class="ri-calculator-fill"></i></a>
                                <br>
                                <label style="margin-top: 8px;" class="size_menu">HBU Analyzer</label>
                            </li> -->

                        </ul>
                    </div>
                </div>

                <hr>

                <!-- Isi Menu -->
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane show active" id="pills-lokasi" role="tabpanel" aria-labelledby="lokasi-tab">
                        <div class="container">
                            <p class="card-title mt-2 text-center judul_isi_menu font-weight-bold">Info Lokasi</p>

                            <div class="row space_judul row_mid_judul">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Koordinat</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>-6427374984, 1009843234a</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Kelurahan</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>Jati Padang</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Kecamatan</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>Pasar Minggu</span></p>
                                </div>
                            </div>


                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Wilayah</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>Jakarta Selatan</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Luas</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>400 hektar</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Kepadatan</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>1500 jiwa/km2</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Rasio Gini</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>0,41</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>UMR</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>Rp 4.300.000</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Tiga Besar KBLI</label></div>
                                <div class="col-xs-7 col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>43210</span></p>
                                    <p style="margin-top: -13px;">43210</span></p>
                                    <p style="margin-top: -13px;">43210</span></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane " id="pills-ekonomi" role="tabpanel" aria-labelledby="ekonomi-tab">
                        <div class="container">
                            <p class="card-title mt-2 judul_isi_menu text-center font-weight-bold">Usaha Mikro Kecil</p>

                            <div class="row space_judul row_mid_judul">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Pelaku Usaha</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>373 <span>orang</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text_all"><label>Total Omset</label></div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text_all">
                                    <p>3.685.675.000 <span>per bulan</span></p>
                                </div>

                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 offset-2">
                                    <p style="font-size: 14px; margin-bottom:-24px; margin-left: -20px; color:#FFFFFF" class="font-weight-bold">Jumlah usaha mikro dikelurahan</p>
                                    <canvas id="pie-chart" width="37" height="50">

                                    </canvas>
                                </div>

                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 offset-2 mt-4">
                                    <canvas id="bar-chart-grouped" width="100" height="150"></canvas>
                                </div>

                            </div>

                            <p class="card-title mb-3 mt-3 judul_isi_menu text-center font-weight-bold">Pendapatan Rata-Rata Per Bulan</p>

                            <div class="row space_judul" style="margin-left:15px;">

                                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                                <div style="margin-left: 10px;" class="col-md-4 text_all"><label>0 - 5 <span>juta</span></label></div>

                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text_all" style="margin-left: 15px;">
                                    <p class="text-right">4.593</p>
                                </div>
                                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text_all">
                                    <span style="margin-left: -18px;">orang</span>
                                </div>

                            </div>

                            <div class="row space_text" style="margin-left:15px; margin-top: -13px;">
                                <div class="col-md-1"></div>
                                <div style="margin-left: 10px;" class="col-lg-4 text_all"><label>6 - 10 <span>juta</span></label></div>
                                <div class="col-lg-2 text_all" style="margin-left: 15px;">
                                    <p class="text-right">2045</p>
                                </div>
                                <div class="col-md-1 text_all">
                                    <span style="margin-left: -18px;">orang</span>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text" style="margin-left:15px;">
                                <div class="col-md-1"></div>
                                <div style="margin-left: 10px;" class="col-lg-4 text_all"><label>11 - 15 <span>juta</span></label></div>
                                <div class="col-lg-2 text_all" style="margin-left: 15px;">
                                    <p class="text-right">1233</p>
                                </div>
                                <div class="col-md-1 text_all">
                                    <span style="margin-left: -18px;">orang</span>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text" style="margin-left:15px;">
                                <div class="col-md-1"></div>
                                <div style="margin-left: 10px;" class="col-lg-4 text_all"><label>16 - 20 <span>juta</span></label></div>

                                <div class="col-lg-2 text_all" style="margin-left: 15px;">
                                    <p class="text-right">497</p>
                                </div>

                                <div class="col-md-1 text_all">
                                    <span style="margin-left: -18px;">orang</span>
                                </div>

                            </div>

                            <div class="row space_text row_mid_text" style="margin-left:15px;">
                                <div class="col-md-1"></div>
                                <div style="margin-left: 10px;" class="col-lg-4 text_all"><label>> 20 <span>juta</span></label></div>
                                <div class="col-lg-2 text_all" style="margin-left: 15px;">
                                    <p class="text-right">124</p>
                                </div>
                                <div class="col-md-1 text_all">
                                    <span style="margin-left: -18px;">orang</span>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text" style="margin-left:15px;">
                                <div class="col-md-1"></div>
                                <div style="margin-left: 10px;" class="col-lg-4 text_all"><label>> N/A</label></div>
                                <div class="col-lg-2 text_all" style="margin-left: 15px;">
                                    <p class="text-right">3.866</p>
                                </div>
                                <div class="col-md-1 text_all">
                                    <span style="margin-left: -18px;">orang</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="pills-zonasi" role="tabpanel" aria-labelledby="zonasi-tab">
                        <div class="container">
                            <p class="card-title mt-2 text-center judul_isi_menu font-weight-bold">Zonasi</p>

                            <div class="row space_judul row_mid_judul">
                                <div class="col-md-5 text_all"><label>Nama Usaha</label></div>
                                <div class="col-md-7 text_all">
                                    <p>LA FROZEN FOOD</p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>Zona</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>Zona Perumahan KDB Sedang-Tinggi</p>
                                    <!-- <p>-6427374984, 1009843234a</p> -->
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>Sub Zona</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>R.5</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane" id="pills-persil" role="tabpanel" aria-labelledby="persil-tab">
                        <div class="container">
                            <p class="card-title mt-2 judul_isi_menu text-center font-weight-bold">Persil</p>

                            <div class="row space_judul row_mid_judul">
                                <div class="col-md-5 text_all"><label>Lahan Eksisting</label></div>
                                <div class="col-md-7 text_all">
                                    <p>Rumah Besar</p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>Perkiraan Harga</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>Rp.5.000.000,- s/d Rp.10.000.000,-&nbsp;&nbsp;<span>/m²</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>Tipe Hak</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>Hak Pakai</p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>Luas</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>11.755<span>/m²</span></p>
                                </div>
                            </div>


                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>Kode Blok</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>43</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>Sub Blok</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>43</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>TPZ</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>43</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>CD TPZ</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>43</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>KDH</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>43</span></p>
                                </div>
                            </div>

                            <div class="row space_text row_mid_text">
                                <div class="col-lg-5 text_all"><label>KLB</label></div>
                                <div class="col-lg-7 text_all">
                                    <p>1,2</span></p>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="tab-pane " id="pills-poi" role="tabpanel" aria-labelledby="poi-tab">
                        <div class="container">
                            <p class="card-title mt-2 text-center judul_isi_menu font-weight-bold">POI</p>

                            <div class="accordion" id="PoiCollabse" style="margin-top: 14px;">
                                <div class="row row_mid_judul2">
                                    <div class="col-md-12 flex-column">
                                        <button type="button" class="btn btn-md btn-block text-left text_all text_poi1 tombol_poi" data-toggle="collapse" data-target="#collapsePoiOne" aria-expanded="true" aria-controls="collapsePoiOne" style="margin-left: -3px;">
                                            <span class="font-weight-bold">Minimarket</span>
                                        </button>
                                    </div>
                                </div>

                                <div id="collapsePoiOne" class="collapse show" aria-labelledby="headingOne" data-parent="#PoiCollabse">
                                    <div class="card-body text_poi2 row_mid_judul">
                                        <ul class="list-group list-group-flush">

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                Alfamidi Siaga
                                                <span>0.185 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                Familymart Pejaten
                                                <span>0.575 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                Alfamart Siaga Raya
                                                <span>0.641 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                Alfamidi Sawo Manilla
                                                <span>0.715 km</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="row row_mid_judul">
                                    <div class="col-md-12 flex-column">
                                        <button type="button" class="btn btn-md btn-block text-left text_all text_poi1 tombol_poi" data-toggle="collapse" data-target="#collapsePoiTwo" aria-expanded="true" aria-controls="collapsePoiTwo" style="margin-left: -3px;">
                                            <span class="font-weight-bold">Sekolah</span>
                                        </button>
                                    </div>
                                </div>

                                <div id="collapsePoiTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#PoiCollabse">
                                    <div class="card-body text_poi2 row_mid_judul">
                                        <ul class="list-group list-group-flush">

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                SMP Siaga
                                                <span>0.185 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                SMP Pejaten
                                                <span>0.575 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                SMA Siaga Raya
                                                <span>0.641 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                SMA Sawo Manilla
                                                <span>0.715 km</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="row row_mid_judul">
                                    <div class="col-md-12 flex-column">
                                        <button type="button" class="btn btn-md btn-block text-left text_all text_poi1 tombol_poi" data-toggle="collapse" data-target="#collapsePoiThre" aria-expanded="true" aria-controls="collapsePoiThre" style="margin-left: -3px;">
                                            <span class="font-weight-bold">Hotel</span>
                                        </button>
                                    </div>
                                </div>

                                <div id="collapsePoiThre" class="collapse show" aria-labelledby="headingOne" data-parent="#PoiCollabse">
                                    <div class="card-body text_poi2 row_mid_judul">
                                        <ul class="list-group list-group-flush">

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                Wisma Siaga
                                                <span>0.185 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                Hotel Pejaten
                                                <span>0.575 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                Hotel Siaga Raya
                                                <span>0.641 km</span>
                                            </li>

                                            <li class="listgroup-cust d-flex justify-content-between align-items-center text_all">
                                                Wisma Sawo Manilla
                                                <span>0.715 km</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane " id="pills-kblikeg" role="tabpanel" aria-labelledby="kblikeg-tab">
                        <div class="container">
                            <p class="card-title  mt-2 text-center judul_isi_menu font-weight-bold">Kode KBLI</p>

                            <div style="margin-top: 15px;" class="row ml-1">
                                <div class="col-md-5 text_all">
                                    <p class="font-weight-bold">cari kbli berdasar</p>
                                </div>
                            </div>


                            <div style="margin-top: -10px; margin-bottom:8px" class="row ml-1">

                                <div class="col-md-7 text_all">

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Kegiatan
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Lokasi
                                        </label>
                                    </div>

                                </div>

                                <div class="col-md-5"></div>

                            </div>


                            <div style="margin-top: 3px;" class="row ml-1">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text_all"><label>Kegiatan</label></div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text_all">
                                    <textarea name="" style="margin-left: 10px;" id="" cols="25" rows="2"></textarea>
                                </div>
                            </div>

                            <div style="margin-top: 4px;" class="row ml-1">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text_all"><label>Sektor</label></div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text_all">
                                    <textarea name="" style="margin-left: 10px;" id="" cols="25" rows="2"></textarea>
                                </div>
                            </div>


                            <div style="margin-top: 5px;" class="row ml-1">
                                <div class="col-md-4 text_all"><label>Lokasi Usaha</label></div>
                                <div class="col-md-8">
                                    <div class="form-group input-group-sm">
                                        <select class="form-control select_kode_kbli">
                                            <option>Skala1</option>
                                            <option>Skala2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-top: -5px;" class="row ml-1">
                                <div class="col-md-4 text_all"><label>Skala Usaha</label></div>
                                <div class="col-md-8">
                                    <div class="form-group input-group-sm">
                                        <select class="form-control select_kode_kbli">
                                            <option>Skala1</option>
                                            <option>Skala2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>





                        </div>

                        <table style="margin:0;" class="table table-borderless mt-4 table-kbli">
                            <thead>
                                <tr>
                                    <th class="text_all text-center" style="width:30%;">Kode KBLI</th>
                                    <th class="text_all text-center">Kegiatan</th>
                                    <th class="text_all text-center">Resiko</th>
                                    <th class="text_all text-center">ITBX</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text_all text-center" style="width:30%;">13472</td>
                                    <td class="text_all text-center">Perdagangan Kue Basah</td>
                                    <td class="text_all text-center">Menengah</td>
                                    <td class="text_all text-center">Bersyarat</td>

                                </tr>
                            </tbody>
                        </table>

                        <p class="card-title judul_isi_menu text-center font-weight-bold mt-2">Keterangan</p>
                    </div>

                    <!-- <div class="tab-pane" id="pills-kblilok" role="tabpanel" aria-labelledby="kblilok-tab">
                        <div class="container">
                            <p style="font-size: 14px;" class="card-title  mt-2 text-center font-weight-bold">KBLI Lokasi</p>

                            <div style="margin-top: 15px;" class="row ml-1">
                                <div class="col-md-4 text_all"><label>Lokasi Usaha</label></div>
                                <div class="col-md-7">
                                    <div class="form-group input-group-sm">
                                        <select class="form-control" style="margin-left: 10px;">
                                            <option>Skala1</option>
                                            <option>Skala2</option>
                                            <option>Skala2</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-top: -3px;" class="row ml-1">
                                <div class="col-md-4 text_all"><label>Kegiatan</label></div>
                                <div class="col-md-7 text_all">
                                    <textarea style="margin-left: 10px;" name="" id="" cols="23" rows="2"></textarea>
                                </div>
                            </div>

                            <div style="margin-top: 3px;" class="row ml-1">
                                <div class="col-md-4 text_all"><label>Sektor Input</label></div>
                                <div class="col-md-7 text_all">
                                    <textarea style="margin-left: 10px;" name="" id="" cols="23" rows="2"></textarea>
                                </div>
                            </div>

                            <div style="margin-top: 5px;" class="row ml-1">
                                <div class="col-md-4 text_all"><label>Skala Usaha</label></div>
                                <div class="col-md-7">
                                    <div class="form-group input-group-sm">
                                        <select style="margin-left: 10px;" class="form-control">
                                            <option>Skala1</option>
                                            <option>Skala2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-top: -5px;" class="row ml-1">
                                <div class="col-md-5 text_all"><label>Cari berdasarkan</label></div>
                                <div class="col-md-7 text_all">
                                    <div class="form-check" style="margin-left: -18px;">
                                        <input class="form-check-input" type="radio" name="kegiatan"  value="Kegiatan" >Kegiatan
                                        <br>
                                        <input class="form-check-input" type="radio" name="lokasi"  value="Lokasi" >Lokasi
                                    </div>
                                </div>
                        </div>

                        </div>

                        <table style="margin:0;" class="table table-borderless mt-4">
                            <thead>
                                <tr>
                                    <th class="text_all text-center" style="width:30%;">Kode KBLI</th>
                                    <th class="text_all text-center">Kegiatan</th>
                                    <th class="text_all text-center">Resiko</th>
                                    <th class="text_all text-center">ITBX</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text_all text-center" style="width:30%;">13472</td>
                                    <td class="text_all text-center">Perdagangan Kue Basah</td>
                                    <td class="text_all text-center">Menengah</td>
                                    <td class="text_all text-center">Bersyarat</td>

                                </tr>
                            </tbody>
                        </table>

                        <p style="font-size: 14px;" class="card-title  mt-2 text-center font-weight-bold">Keterangan</p>
                    </div> -->

                    <!-- <div class="tab-pane" id="pills-kalkulator" role="tabpanel" aria-labelledby="kalkulator-tab">
                        <div class="container">

                            <p style="font-size: 14px;" class="card-title mb-1 mt-2 text-center font-weight-bold">Kalkulator</p>

                            <table style="margin-top: 18px;" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text_all">Kode</th>
                                        <th class="text_all">KBLI</th>
                                        <th class="text_all">ITBX</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text_all">1</td>
                                        <td class="text_all">Example1</td>
                                        <td class="text_all">Example1</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div> -->

                    <!-- <div class="tab-pane" id="pills-hbu" role="tabpanel" aria-labelledby="hbu-tab">
                        <div class="container">

                            <p style="font-size: 14px;" class="card-title mb-1 mt-2 text-center font-weight-bold">HBU Analyzer</p>

                            <table style="margin-top: 18px;" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text_all">Kode</th>
                                        <th class="text_all">KBLI</th>
                                        <th class="text_all">ITBX</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text_all">1</td>
                                        <td class="text_all">Example1</td>
                                        <td class="text_all">Example1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->


                </div>

            </div>

        </div>
    </div>

    <!-- PETA -->
    <div id='map' style='width: 100%; height: 100%; position: absolute;'>

        <!-- Disclaimer -->
        <div id="btn-disclaimer">
            <button class="btn-layer wz-icon icon-top-bar las la-exclamation-circle fa-2x pull-right" type="button" data-toggle="modal" data-target="#disclaimerModal" title="Disclaimer Application">
            </button>
        </div>

        <!-- Modal Disclaimer -->
        <div class="modal fade" id="disclaimerModal" tabindex="-1" aria-labelledby="disclaimerLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title m-auto" id="disclaimerLabel" data-t>front.disclaimer.title</h5>
                        <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pl-0">
                        <div style="font-size: 10pt;text-align: justify;">
                            <ol>
                                <li class="mb-2"><span>JAKPINTAS (Peta Perijinan dan Investasi DKI Jakarta) dikembangkan sebagai hasil kolaborasi antara Dinas Penanaman Modal dan Perizinan Terpadu Satu Pintu Pemerintah Provinsi DKI Jakarta (DPMPTSP DKI Jakarta) dan Ikatan Ahli Perencanaan (IAP) menggunakan peta dasar OpenStreetMap dan MapBox dengan tujuan menjadi panduan bagi masyarakat untuk mengambil keputusan investasi dengan membuka informasi ketataruangan, pertanahan, pembangunan gedung/bangunan, demografi dan perekonomian warga serta data dan informasi lain seluas-luasnya, meliputi:</span>
                                    <ol>
                                        <li>Peta zonasi dalam RDTR beserta PZ</li>
                                        <li>Peta lahan eksisting</li>
                                        <li>Peta persil BPN</li>
                                        <li>Peta interpolasi NJOP 2021</li>
                                        <li>Peta sebaran usaha mikro kecil</li>
                                        <li>Peta sebaran pendapatan rata-rata penduduk berdasar survey Dasa Wisma</li>
                                        <li>Peta sebaran minimarket</li>
                                        <li>Peta sebaran sekolah</li>
                                        <li>Peta sebaran pusat belanja dan makan</li>
                                        <li>Peta sebaran hotel, apartemen, wisma dan penginapan</li>
                                        <li>Peta sebaran tempat ibadah</li>
                                        <li>Peta sebaran rumah sakit, klinik, puskesmas</li>
                                        <li>Peta sebaran halte transit, bandara, pelabuhan, stasiun, terminal, SPBU</li>
                                        <li>Peta sebaran gedung dan perkantoran</li>
                                        <li>Fitur pencarian kode KBLI yang disesuaiakan dengan jenis kegiatan, skala dan zonasi usaha</li>
                                    </ol>
                                </li>
                                <li class="mb-2">DPMPTSP DKI Jakarta dan IAP berkomitmen agar data dan informasi yang ada selalu diperbarui secara periodk, diperkaya dengan informasi terkini, dilengkapi dengan data-data tambahan dari pihak-pihak lain, serta terus disempurnakan akurasi dan ketelitiannya</li>
                                <li class="mb-2">Warga masyarakat dapat berpartisipasi aktif dalam pengayaan sistem dengan cara memberi masukan, perbaikan, usulan, atau keberatan melalui input langsung di dalam sistem.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Base map -->
        <div id="legend">
            <div class="dropdown">
                <button class="btn-layer wz-icon icon-top-bar las la-layer-group fa-2x pull-right" type="button" id="dropdownLayer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <ul class="dropdown-menu keep-open" id="menu" aria-labelledby="dropdownLayer" style="font-size: 12px; margin-top: 5px; border: none; background-color: #117A96;">
                    <li class="text-center" style="margin-bottom:10px; color: #FFFFFF;">Base Map</li>

                    <div class="kotak_base_map">
                        <li>
                            <div class="form-check form-check-inline mr-5">
                                <input style="height:20px;" class="form-check-input" type="radio" name="rtoggle" id="ckp4wrapq11m117pf2lr49l5t" value="ckp4wrapq11m117pf2lr49l5t" checked="checked">
                                <label class="form-check-label pl-1" for="ckp4wrapq11m117pf2lr49l5t">Default</label>
                            </div>
                        </li>
                    </div>

                    <div class="kotak_base_map">
                        <li>
                            <div class="form-check form-check-inline mr-5">
                                <input style="height:20px;" class="form-check-input" type="radio" name="rtoggle" id="ckp6i54ay22u818lrq15ffcnr" value="ckp6i54ay22u818lrq15ffcnr">
                                <label class="form-check-label pl-1" for="ckp6i54ay22u818lrq15ffcnr">Satellite</label>
                            </div>
                        </li>
                    </div>

                    <div class="kotak_base_map">
                        <li>
                            <div class="form-check form-check-inline mr-5">
                                <input style="height:20px;" class="form-check-input" type="radio" name="rtoggle" id="ckp6i6bgp2jn217pfp6wm5syk" value="ckp6i6bgp2jn217pfp6wm5syk">
                                <label class="form-check-label pl-1" for="ckp6i6bgp2jn217pfp6wm5syk">Streets</label>
                            </div>
                        </li>
                    </div>

                </ul>
            </div>
        </div>

        <!--  -->
        <div class="detail_omzet">
            <div class="container">
                <div class="text_all">
                    <div><span class="details_omzet" style="background-color: rgb(255, 237, 160);"></span><span>0-4M</span></div>
                    <div><span class="details_omzet" style="background-color: rgb(255, 230, 117);"></span><span>5M-8M</span></div>
                    <div><span class="details_omzet" style="background-color: rgb(255, 223, 82);"></span><span>9M-12M</span></div>
                    <div><span class="details_omzet" style="background-color: rgb(255, 214, 31);"></span><span>13M-16M</span></div>
                    <div><span class="details_omzet" style="background-color: rgb(224, 183, 0);"></span><span>17M-20M</span></div>
                    <div><span class="details_omzet" style="background-color: rgb(202, 165, 2);"></span><span>&gt; 20M</span></div>
                </div>
            </div>
        </div>

        <div class="detail_jumlah">
            <div class="container">
                <span class="text_all font-weight-bold">Detail Omzet</span>

                <div class="text_all">
                    <div>Kelurahan : Menteng</div>
                    <p class="mb-0">
                        <span><em>Rp 5.110.507.000</em></span>
                    </p>
                </div>

            </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.slim.min.js" rel="preload"></script>

    <!-- <script src="assets/js/popper.min.js" rel="preload"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- <script src="assets/js/bootstrap.min.js" rel="preload"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="assets/js/Chart.min.js"></script>

    <!-- Maps Box -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.2.2/mapbox-gl-draw.js"></script>



    <script>
        var kilometer = $('#ControlRange').val() / 1000;
        $('#OutputControlRange').html(kilometer + ' Km');
        $(document).on('input change', '#ControlRange', function() {
            var kilometer = $(this).val() / 1000;
            $('#OutputControlRange').html(kilometer + ' Km');
        });

        var selector = '.menu_active .tombol_menu';

        $(selector).on('click', function() {
            $(selector).removeClass('active');
            $(this).addClass('active');
        });

        $('#hide_side_bar').click(function() {
            $('#sidebar').hide();
            $('#show_side_bar').css('display', 'block');
            $(this).hide();
        });
        $('#show_side_bar').click(function() {
            $('#sidebar').show();
            $('#hide_side_bar').css('display', 'block');
            $(this).hide();
        });

        // class aktip
        $(document).ready(function() {
            $(".aktip").each(function() {
                $(this).addClass("active");
            })
        });

        function copyText() {
            var copyText = document.getElementById("text-copy");
            copyText.select();
            document.execCommand("copy");
        }
    </script>



    <!-- MAP BOX -->
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibWVudGhvZWxzciIsImEiOiJja3M0MDZiMHMwZW83MnVwaDZ6Z2NhY2JxIn0.vQFxEZsM7Vvr-PX3FMOGiQ';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/menthoelsr/ckp4wrapq11m117pf2lr49l5t',
        });

        map.on('load', () => {
            const layers = map.getStyle().layers;
            // Find the index of the first symbol layer in the map style
            let firstSymbolId;
            for (const layer of layers) {
                if (layer === ' ') {
                    firstSymbolId = layer.id;
                    break;
                }
            }

            map.addSource('wilayah', {
                'type': 'geojson',
                'data': 'http://103.214.112.123:3000/choro'
            });
            map.addLayer({
                    'id': 'wilayah-fill',
                    'type': 'fill',
                    'source': 'wilayah',
                    'paint': {
                        'fill-color': [
                            "interpolate",
                            ["linear"],
                            ["get", "Total omzet"],
                            0,
                            "#ffeda0",
                            5000000000,
                            "#ffe675",
                            9000000000,
                            "#ffdf52",
                            13000000000,
                            "#ffd61f",
                            17000000000,
                            "#e0b700",
                            20396854609,
                            "#caa502"
                        ],
                        'fill-opacity': 0.7,
                        'fill-outline-color': 'red'
                    },
                    'layout': {
                        'visibility': 'visible'
                    }

                },
                firstSymbolId
            );
        });

        const draw = new MapboxDraw({
            displayControlsDefault: false,
            controls: {
                polygon: true,
                trash: true
            }
        });
        map.addControl(new mapboxgl.NavigationControl());

        map.addControl(draw);

        map.on('draw.create');
        map.on('draw.delete');
        map.on('draw.update');
    </script>




    <!-- CHART -->
    <script>
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["Kel A", "Kel B", "Kel C"],
                datasets: [{
                    label: "Kelurahan",
                    backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                    data: [478, 267, 734],
                }]
            },
            options: {
                title: {
                    display: true,
                },
                legend: {
                    labels: {
                        fontColor: 'white'
                    }
                },
            }
        });

        new Chart(document.getElementById("bar-chart-grouped"), {
            type: 'bar',
            data: {
                labels: ["1900", "1950", "1999", "2050"],
                datasets: [{
                    label: "Kecamatan A",
                    backgroundColor: "#3e95cd",
                    data: [133, 221, 783, 478]
                }, {
                    label: "Kecamatan B",
                    backgroundColor: "#8e5ea2",
                    data: [832, 447, 175, 534]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Jumlah',
                    fontColor: 'white'
                },
                legend: {
                    labels: {
                        fontColor: 'white'
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: 'white'
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            fontColor: 'white'
                        }
                    }],
                }
            }
        });
    </script>





</body>

</html>