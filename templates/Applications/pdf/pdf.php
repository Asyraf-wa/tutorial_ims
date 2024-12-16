<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <style>
        @page {
            margin: 0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important;
        }

        .right {
            text-align: right;
            padding-right: 50px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

        .content {
            margin-left: 70px;
            margin-right: 70px;
        }

        .capital {
            text-transform: uppercase;
        }

        .justify {
            text-align: justify;
        }

        .top {
            width: 100%;
            margin: auto;
            background: #912890;
        }

        .one {
            width: 70%;
            height: 22px;
            background: #292983;
            float: left;
        }

        .two {
            margin-left: 15%;
            height: 22px;
            background: #912890;
        }

        .qr {
            width: 100px;
        }
    </style>
</head>

<body>
    <section class="top">
        <div class="one"></div>
        <div class="two"></div>
    </section>
    <br />
    <div class="right">
        <?php echo $this->Html->image('../img/surat/LogoUiTM.png', ['width' => '180px', 'fullBase' => true]) ?>
    </div>
    <br />

    <div class="content">
        <table width="320px" align="right">
            <tr>
                <td width="70px">Surat Kami</td>
                <td>:</td>
                <td>UiTM-<?= $application->branch->code; ?> (HEA-<?= $application->faculty->code; ?>.<?= $application->program->code; ?>/<?= h($application->id) ?>)</td>
            </tr>
            <tr>
                <td>Tarikh</td>
                <td>:</td>
                <td><?php echo date('d F Y', strtotime($application->created)); ?></td>
            </tr>
        </table>

        <?= h($application->company_name) ?>
        <br />
        <?= h($application->company_street_1) ?>
        <br />
        <?= h($application->company_street_2) ?>
        <br />
        <?= h($application->company_postcode) ?>,
        <?= h($application->company_city) ?>
        <br />
        <strong><?= h($application->company_state) ?></strong>
        <br /><br />
        <b>Untuk Perhatian: <?= h($application->pic_name) ?> (<?= h($application->pic_email) ?>)</b>
        <br /><br />
        Tuan/Puan
        <br /><br />
        <strong>PERMOHONAN PENEMPATAN LATIHAN PRAKTIKAL</strong>
        <br /><br />
        <table class="table table-bordered table-sm table_transparent capital">
            <tr>
                <td>NAMA PELAJAR</td>
                <td>:</td>
                <td><?= $application->user->fullname ?></td>
            </tr>
            <tr>
                <td>NO. K/P</td>
                <td>:</td>
                <td><?= h($application->nric) ?></td>
            </tr>
            <tr>
                <td>NO. PELAJAR</td>
                <td>:</td>
                <td><?= h($application->matrix) ?></td>
            </tr>
            <tr>
                <td>PROGRAM</td>
                <td>:</td>
                <td><?= $application->program->name ?></td>
            </tr>
            <tr>
                <td>FAKULTI</td>
                <td>:</td>
                <td><?= $application->faculty->name ?></td>
            </tr>
            <tr>
                <td>NO. TELEFON</td>
                <td>:</td>
                <td><?= h($application->phone) ?></td>
            </tr>
        </table>
        <br />
        <div class="justify">
            Dengan hormatnya dimaklumkan bahawa penama di atas adalah pelajar yang berdaftar di <?= $application->branch->name ?>.
            <br><br>
            2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan rekod kami, beliau akan menjalani latihan praktik mengikut keperluan silibus yang dijangka akan bermula pada <b><?php echo date('d F Y', strtotime($application->start_date)); ?></b> hingga <b><?php echo date('d F Y', strtotime($application->end_date)); ?></b> (tertakluk kepada perubahan dan cuti mingguan organisasi). Latihan ini bertujuan untuk memenuhi syarat kelayakan penganugerahan <?= $application->program->name ?> serta membolehkan pelajar mempraktikkan teori yang dipelajari serta memberi pendedahan awal kepada pelajar di dalam persekitaran alam pekerjaan.
            <br><br>
            3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan itu, pihak kami amat berbesar hati sekiranya pelajar kami diterima untuk menjalani latihan praktik di organisasi tuan/puan. Kami percaya organisasi tuan/puan menepati ciri-ciri organisasi yang mampu menyediakan latihan yang berkualiti dalam bidang yang berkaitan. Bersama ini, disertakan dokumen-dokumen berikut untuk rujukan dan tindakan pihak tuan/puan:
            <br><br>
            <ol type="a">
                <li>&nbsp;&nbsp;&nbsp;&nbsp;Resume Pelajar - <b class="text-danger">https://<?php echo $_SERVER['SERVER_NAME']; ?>/<?= h($application->matrix) ?></b></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;Garis Panduan Latihan Industri - <b>https://<?php echo $_SERVER['SERVER_NAME']; ?>/li</b></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;BLI-01 Borang Jawapan - <b>https://<?php echo $_SERVER['SERVER_NAME']; ?>/verify</b></li>
            </ol>
            4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diharapkan permohonan ini akan mendapat pertimbangan sewajarnya dan memaklumkan kepada pihak kami melalui emel li@uitm.edu.my. Sekiranya tiada jawapan diterima dari pihak tuan/puan selepas 2 minggu dari tarikh surat ini, permohonan ini dianggap tidak berjaya. Segala sokongan dan kerjasama didahului dengan ucapan terima kasih.
            <br><br>
            <table width="100%">
                <tr>
                    <td width="85%" style="vertical-align: top;">
                        Sekian, terima kasih.
                        <br><br>
                        Jabatan Hal Ehwal Akademik, UiTM
                        <br><br>
                        <strong>CETAKAN BERKOMPUTER. TIDAK PERLU TANDATANGAN.</strong>
                    </td>
                    <td width="5%" class="right">
                        <img src="http://localhost/internms/qr/qrcode.php?s=qrh&d=<?php echo $this->request->getUri(); ?>" class="qr">
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <br /><br />
    <div class="right">
        <?php echo $this->Html->image('../img/surat/ISO.png', ['width' => '170px', 'fullBase' => true]) ?><br />
        <?php echo $this->Html->image('../img/surat/uitmdihatiku.png', ['width' => '170px', 'fullBase' => true]) ?>
    </div>
</body>

</html>