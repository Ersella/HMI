<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SURAT CABANG</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Verdana:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-template/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin-template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-template/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ url('resources/css/output.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-template/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin-template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap 4 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Select2 Bootstrap 4 Theme CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap4-theme/1.1.0/select2-bootstrap4.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: Arial, sans-serif;
            font-family: 'Verdana', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
            margin-right: 20px;
        }

        .footer {
            text-align: center;
            font-size: 14px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 5px;
            /* Adjust the padding value to make the header shorter */
            border: 2px solid black !important;
            /* Ensure borders are visible in PDF */

            border: 2px solid black;
            padding: 5px;
            vertical-align: middle;
        }

        @media print {
            @page {
                size: 8.27in 13in;
                /* F4 size in inches */
                margin: 0.5in;
                /* Adjust margins as needed */
            }

            body {
                width: 8.27in;
                /* Ensure body width matches F4 size */
                height: 13in;
            }
        }

        .custom-hr {
            border: none;
            border-top: 1px solid #000;
            border-bottom: 5px double #000;
            margin-top: 0;
            width: calc(110% - 100px);
            margin-left: 30px;
        }
    </style>
</head>

<body>
    <div align="center">
        <div style="width: 900px;">
            <div align="center">
                <table style="width: 900px; margin-bottom: 0; line-height: 1.15;">
                    <tbody>
                        <tr>
                            <td style="width: 100px; text-align: left; vertical-align: bottom;">
                                <img src="{{ url('/') }}/admin-template/dist/img/logo-hmi.png" width="65" height="175">
                            </td>
                            <td style="width: 744px; text-align: center;">
                                <p class="m-0 mb-0 mt-0" style="font-size: 20pt; font-weight: bold; font-family: 'Verdana', Arial, sans-serif;">PENGURUS</p>
                                <p class="m-0 mb-0 mt-0" style="font-size: 22pt; font-weight: bold; font-family: 'Verdana', 'Times New Roman', Times, serif; color: #009C4B;">HIMPUNAN MAHASISWA ISLAM</p>
                                <p class="m-0 mb-0 mt-0" style="font-style: italic; font-weight: bold; font-size: 11pt; font-family: 'Verdana', 'Times New Roman', Times, serif;">(BRANCH EXECUTIVE OF THE ASSOCIATION OF ISLAMIC UNIVERSITY STUDENTS)</p>
                                <p class="m-0 mb-0 mt-0" style="font-size: 20pt; font-weight: bold; font-family: 'Verdana', 'Times New Roman', Times, serif;">CABANG KETAPANG</p>
                                <p class="m-0 mb-0 mt-0" style="font-size: 11pt; font-family: 'Verdana', 'Times New Roman', Times, serif;">Sekretariat : Jl. Rangga Sentap, Kelurahan Dalong, Kec. Delta Pawan, Kabupaten Ketapang.</p>
                                <p class="m-0 mb-0 mt-0" style="font-size: 11pt; font-family: 'Verdana', 'Times New Roman', Times, serif;">Email: hmi.cabangketapang@gmail.com, Cp. +62 812-5812-6747</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 156px;" align="center">&nbsp;</td>
                            <td style="width: 744px;" align="center">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <hr class="custom-hr">
                <img src="{{ url('/') }}/admin-template/dist/img/bismillah.png" style="margin-bottom: 0;" alt="" width="175" height="65">

                <table align="center" border="0" cellpadding="1" style="margin-left: 30px; width: 900px; margin-top: 0;">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <table border="0" cellpadding="1" style="width: 350px; line-height: 1.15;">
                                    <tbody>
                                        <tr>
                                            <td width="40"><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif; margin:0rem;">Nomor</span></td>
                                            <td width="8"><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif; margin:0rem;">:</span></td>
                                            <td width="180"><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif; margin:0rem;">{{ $sc->no_surat }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">Lamp</span></td>
                                            <td><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">:</span></td>
                                            <td><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">{{ $sc->lampiran }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">Perihal</span></td>
                                            <td><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">:</span></td>
                                            <td><span style="font-weight:bold;text-decoration:underline;font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">{{ $sc->perihal }}</span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td valign="top">
                                <table border="0" style="width: 274px; margin-top: 60px; line-height: 1.15;">
                                    <tbody class="mt-4">
                                        <tr>
                                            <td width="74"><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">Kepada Yang Terhormat</span></td>
                                            <td width="11">
                                            </td>
                                            <td width="5"></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: 12pt; font-weight: bold; font-family: 'Verdana', Arial, sans-serif;">{{ $sc->tujuan }}</span></td>
                                            <td></td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">di-</span></td>
                                            <td></td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: 12pt; font-family: 'Verdana', Arial, sans-serif;">Tempat</span></td>
                                            <td></td>
                                            <td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table align="right" border="0" cellpadding="1" style="width: 780px; margin-top: 0;">
                    <tbody>
                        <tr>
                            <td colspan="3" height="40" valign="top">
                                <div align="justify"><span style="font-size: 13pt; font-style:italic; font-weight: bold; font-family: 'Verdana', Arial, sans-serif;">
                                        Assalamu’alaikum Wr.Wb
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" height="0" valign="top">
                                <div align="justify"><span style=" font-family: 'Verdana', Arial, sans-serif; line-height: 1.15;">
                                        {!! $sc->isi_surat !!}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" height="40" valign="top">
                                <div align="justify"><span style="font-size: 13pt; font-style:italic; font-weight: bold; font-family: 'Verdana', Arial, sans-serif;">
                                        Billahitaufiq wal hidayah
                                        <br>
                                        Wassalamu’alaikum Wr.Wb
                                </div>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%" class="footer-table">
                    <tbody>
                        <tr>
                            <td align="center" width="40%">
                                <br>
                                <br>
                                <br>
                                <div style="width:4cm; height:2cm;">
                                    <img src="{{ url('/') }}/{{ $sc->ttd_kiri }}" alt="Cap" style=" height: auto;" />
                                </div>
                                <br>
                                <br>
                                <br>
                                <b style="font-weight: bold; font-size: 12pt; font-family: 'Verdana', 'Times New Roman', Times, serif; text-decoration:underline;">
                                    {{ $sc->nama_kiri }}
                                </b>
                                <br>
                                <b style="font-weight: bold; font-size: 12pt; font-family: 'Verdana', 'Times New Roman', Times, serif;">
                                    {{ $sc->jabatan_kiri }}
                                </b>
                                <br>
                            </td>
                            <td align="left" width="20%">
                            </td>
                            <td align="left" width="40%" style="margin-left: 100px;">
                                <!-- <p style="text-align: center; margin: 0;">
                                    <span style="">Ketapang, {{ $sc->hijriah }} H</span>
                                </p>
                                <hr style="border: 1px solid #000; width: calc(20px); margin-top: 5px; margin-bottom: 5px;">
                                <p style="text-align: center; margin: 0;">
                                    <span style="">{{ $sc->masehi }} M</span>
                                </p> -->
                                <p style="margin-bottom: 0;">
                                    <span style="font-size: 12pt; font-family: 'Verdana', 'Times New Roman', Times, serif;">Ketapang, <span style="font-size: 12pt; font-family: 'Verdana', 'Times New Roman', Times, serif; text-decoration: underline;">{{ $sc->tanggal_hijriah }}</span></span>
                                </p>
                                <p style="margin-left: 85px;">
                                    <span style="font-size: 12pt; font-family: 'Verdana', 'Times New Roman', Times, serif;">{{ $sc->tanggal_masehi }}</span>
                                </p>
                                <div style="text-align: left;">
                                    <b style="font-weight: bold; font-size: 12pt; font-family: 'Verdana', 'Times New Roman', Times, serif;">
                                        <br>
                                        {{ $sc->pengurus }}
                                    </b>
                                    <br>
                                    <div style="width:3cm; height:1.5cm;">
                                        <img src="{{ url('/') }}/{{ $sc->ttd_kanan }}" alt="Cap" style="width: 4cm; height: auto;" />
                                    </div>
                                    <br>
                                    <br>
                                    <b style="font-weight: bold; text-align:center; font-size: 12pt; font-family: 'Verdana', 'Times New Roman', Times, serif; text-decoration:underline;">
                                        {{ $sc->nama_kanan }}
                                    </b>
                                    <br>
                                    <b style="font-weight: bold; font-size: 12pt; font-family: 'Verdana', 'Times New Roman', Times, serif; ">
                                        {{ $sc->jabatan_kanan }}
                                    </b>
                                    <br><br>

                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <!-- <table width="100%" class="footer-table">
                    <tbody>
                        <tr>
                            <td align="center" width="30%">
    
                            </td>
                            <td align="center" width="40%">
                                Mengetahui
                                <br>
                                Kepala Madrasah
                                <br>
                                <img src="" alt="QR Code" style="width:50%; height:50%;" />
                                <br>
                                <b>Moh Sunja`i, S.Pd.I</b>
                                <br>
                                NIP. 197911132009031002
                            </td>
                            <td align="center" width="40%">
    
                            </td>
                        </tr>
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
</body>

</html>
<!-- <script>
    window.print();
</script> -->
<!-- jQuery -->
<script src="{{ url('/') }}/admin-template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('/') }}/admin-template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('/') }}/admin-template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/admin-template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/admin-template/plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script src="{{ url('/') }}/admin-template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>
<!-- Select2 -->
<script src="{{ url('/') }}/admin-template/plugins/select2/js/select2.full.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap 4 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



<!-- AdminLTE App -->
<script src="{{ url('/') }}/admin-template/dist/js/adminlte.min.js"></script>