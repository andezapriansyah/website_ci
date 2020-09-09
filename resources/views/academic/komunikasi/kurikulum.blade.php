@extends('layouts.komunikasi-page')

@section('title')
Kurikulum
@endsection

@section('prodi')
Komunikasi
@endsection

@section('contentBox')
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-6 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>KURIKULUM BERBASIS KPT-KKNI level 6</h4>
            </div>
            <div class="widget-inner">
                <p style="text-align: justify">Dengan penerapan KPT-KKNI level 6, Penyiaran dan Komunikasi Digital  telah merancang SKPI (Surat Keterangan Pendamping Ijazah) yang menerangkan jenjang pencapaian learning outcome lulusan. Selain itu, SKPI dirancang sebagai recognition of competence outside the running curricula, artinya kompetensi yang dicapai oleh peserta didik akan diakui oleh Asia Cyber Universitysebagai pelengkap pencapaian learning outcome. Sistem recognition atau pengakuan kompetensi yang dicapai oleh peserta didik adalah meliputi 3 komponen utama yakni kompetensi pendukung professional, kompetensi pendukung soft skill, dan kompetensi pendukung talenta/jalur bakat. Dengan demikian, penerapan KPT-KKNI level 6 di Penyiaran dan Komunikasi Digital  berupaya konsisten dalam membangun mutu lulusan di bidang komunikasi</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>SEBARAN MATA KULIAH PROGRAM STUDI KOMUNIKASI 2020</h4>
            </div>
            <div class="widget-inner">
                <p>Jumlah sks Program Studi (minimum untuk kelulusan) : 144 sks yang tersusun
                    sebagai berikut:</p>
                <a href="{{ asset('homepages/documents/Kurikulum Prodi Penyiaran dan Komunikasi Digital.pdf') }}" class="btn btn-primary">KURIKULUM</a>
                                    <a href="{{ asset('homepages/documents/Distribusi Mata Kuliah Penyiaran dan Komunikasi Digital.xlsx') }}" class="btn btn-success">DISTRIBUSI MATA KULIAH</a>
            </div>
        </div>
    </div>
</div>

</main>
<div class="ttr-overlay"></div>
@endsection