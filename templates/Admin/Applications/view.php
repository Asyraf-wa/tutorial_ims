<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
 */
echo $this->Html->script('qr-code-styling-1-5-0.min.js');
?>
<!--Header-->
<div class="row text-body-secondary">
    <div class="col-10">
        <h1 class="my-0 page_title"><?php echo $title; ?></h1>
        <h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
    </div>
    <div class="col-2 text-end">
        <div class="dropdown mx-3 mt-2">
            <button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-bars text-primary"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                <li><?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
                <li><?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><?= $this->Html->link(__('Download PDF'), ['action' => 'pdf', $application->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
                <li><?= $this->Html->link(__('New Application'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
            </div>
        </div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
    <div class="col-md-9">
        <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">
                <style>
                    .capital {
                        text-transform: uppercase;
                    }

                    .justify {
                        text-align: justify;
                    }

                    .top {
                        width: 100%;
                        margin: auto;
                    }

                    .one {
                        width: 72%;
                        height: 25px;
                        background: #292983;
                        float: left;
                    }

                    .two {
                        margin-left: 15%;
                        height: 25px;
                        background: #912890;
                    }
                </style>


                <section class="top">
                    <div class="one"></div>
                    <div class="two"></div>
                </section>

                <div class="text-end my-4 me-5">
                    <?php echo $this->Html->image('../img/surat/LogoUiTM.png', ['width' => '220px']) ?>
                </div>
                <hr />
                <table width="100%">
                    <tr>
                        <td width="78%" class="text-end">Surat Kami &nbsp;: &nbsp;</td>
                        <td>UiTM-<?= $application->branch->code; ?> (HEA-<?= $application->faculty->code; ?>.<?= $application->program->code; ?>/<?= h($application->id) ?>)</td>
                    </tr>
                    <tr>
                        <td class="text-end">Tarikh &nbsp;: &nbsp;</td>
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
                            <td width="80%" style="vertical-align: top;">
                                Sekian, terima kasih.
                                <br><br>
                                Jabatan Hal Ehwal Akademik, UiTM
                                <br><br>
                                <strong>CETAKAN BERKOMPUTER. TIDAK PERLU TANDATANGAN.</strong>
                            </td>
                            <td class="text-end">
                                <div id="qr" align="center"></div>
                                <script type="text/javascript">
                                    const qrCode = new QRCodeStyling({
                                        width: 130,
                                        height: 130,
                                        margin: 0,
                                        //type: "svg",
                                        data: "<?php echo $this->request->getUri(); ?>",
                                        dotsOptions: {
                                            //color: "#4267b2",
                                            type: "dots"
                                        },
                                        cornersSquareOptions: {
                                            type: "dots",
                                            color: "#007bff",
                                        },
                                        cornersDotOptions: {
                                            type: "dots"
                                        },
                                        backgroundOptions: {
                                            //color: "#ffffff",
                                        },
                                        imageOptions: {
                                            crossOrigin: "anonymous",
                                            margin: 20
                                        }
                                    });

                                    qrCode.append(document.getElementById("qr"));
                                    //qrCode.download({ name: "qr", extension: "png" });
                                </script>
                            </td>
                        </tr>
                    </table>
                    <hr />
                    <div class="text-end my-4 me-5">
                        <?php echo $this->Html->image('../img/surat/ISO.png', ['width' => '170px']) ?><br />
                        <?php echo $this->Html->image('../img/surat/uitmdihatiku.png', ['width' => '170px']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body">
                <div class="card-title mb-0">Application Data</div>
                <div class="tricolor_line mb-3"></div>
                <div class="table-responsive">
                    <table class="table tabe-sm table-hover">
                        <tr>
                            <td>Application Date</td>
                            <td><?php echo date('M d, Y (h:i A)', strtotime($application->created)); ?></td>
                        </tr>
                        <tr>
                            <td>Approval Date</td>
                            <td><?php echo date('M d, Y (h:i A)', strtotime($application->modified)); ?></td>
                        </tr>
                    </table>
                </div>
                <?= $this->Form->create($application) ?>
                <?php echo $this->Form->control('approval_status', ['options' => ['1' => 'Approved', '2' => 'Reject'], 'class' => 'form-select', 'empty' => 'Select Action']); ?>
                <div class="text-end">
                    <?php if ($application->approval_status == 1) { ?>
                        <?= $this->Html->link(__('Download PDF'), ['action' => 'pdf', $application->id], ['class' => 'btn btn-outline-primary', 'escapeTitle' => false]) ?>
                    <?php } ?>
                    <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
                    <?= $this->Form->button(__('Submit'), ['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>