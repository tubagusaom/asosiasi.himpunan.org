<style>
    .nav-sidebar {
        width: 100%;
        padding: 8px 0;
        border-right: 1px solid #ddd;
    }
    .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
        border-radius: 0;
    }
    .nav-sidebar .active a {
        cursor: default;
        background-color: #428bca;
        color: #fff;
        text-shadow: 1px 1px 1px #666;
    }
    .nav-sidebar .active a:hover {
        background-color: #428bca;
    }
    .nav-sidebar .text-overflow a,
    .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
    }
    .box-categories .fa-ul > li > * {
        line-height: inherit;
        margin: 0;
    }
</style>


<div class="col-md-12" style="padding-top: 15px;">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li class="active">Kontak Kami</li>
        </ol>
    </div>
    <div class="col-md-12">

        <iframe src="https://www.google.com/maps/embed?pb=" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
    <div class="col-md-12">
        <h2><i class="fa fa-comments-o"></i> Kritik &amp; Saran pengembangan</h2>
        <p>Kirimkan saran dan kritik membangun agar pelayanan <?= $aplikasi->singkatan_unit ?> menjadi lebih baik. Silahkan email kami di :</p>
        <p><strong><a href="mailto:<?= $aplikasi->alamat_email ?>"><?= $aplikasi->alamat_email ?></a></strong></p>
        <h2><i class="fa fa-support"></i> Perlu bantuan</h2>
        <p>Dengan senang hati kami akan membantu anda apabila ada kesulitan dalam pengoperasian aplikasi ini. Temukan FAQ di <a href="<?= base_url() . 'faq-lsp' ?>">Halaman ini</a>. Jika anda masih kesulitan, hubungi kami di WA:</p>
        <p><strong><?= $aplikasi->sms_center?></strong></p>
    </div>
</div>
