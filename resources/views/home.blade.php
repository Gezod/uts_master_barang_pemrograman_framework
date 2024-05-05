@extends('layout.layout')
@section('content')
<style>

/* Styling untuk box biodata */
.box {
    width: 60%;
    margin: 0 auto;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Styling untuk bagian header box */
.box-header {
    background-color: #896937;
    color: #ffffff;
    padding: 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

/* Styling untuk konten dalam box */
.box-content {
    padding: 20px;
}

/* Styling untuk gambar profil */
.profile-picture img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    display: block;
    margin: 0 auto 20px;
}

/* Styling untuk detail biodata */
.profile-details p {
    margin-bottom: 10px;
}

</style>
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <div class="content-body">
                <div class="row page-titles mx-0">
                    <div class="col p-md-0">
                        <div class="box">
                            <div class="box-header">
                                <h2 class="text-center">Biodata Diri</h2>
                            </div>
                            <div class="box-content">
                                <div class="profile-picture">
                                    <img src="/images/angga.jpg" alt="Profile Picture">
                                </div>
                                <div class="profile-details">
                                    <p><strong>Nama Lengkap:</strong> Refangga Lintar Prayoga</p>
                                    <p><strong>Tempat, Tanggal Lahir:</strong> Surabaya, 8 Juni 2001</p>
                                    <p><strong>Usia:</strong> 23 Tahun</p>
                                    <p><strong>Jenis Kelamin: </strong> Pria</p>
                                    <p><strong>Jurusan </strong> Sistem Informasi</p>
                                    <p><strong>NIM </strong> 1204220137</p>
                                    <p><strong>Alamat Email: </strong> refanggalintar@student.telkomuniversity.ac.id</p>
                                    <p><strong>Motto: </strong> Saya adalah orang yang sangat disiplin dan fokus terhadap hasil kerja hingga cenderung idealis. Namun, saya juga bisa realistis saat menentukan target atau tujuan dan selalu berupaya keras untuk bisa mencapai tujuan tersebut dengan cara yang baik dan efisien</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
