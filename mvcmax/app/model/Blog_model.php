<?php
class Blog_model{
    private $blog = [
        [
            "jurusan" => "Teknik Konstruksi dan Perumahan (TKP)",
            "ket" => "Secara umum Teknik Konstruksi dan Perumahan atau biasa disebut TKP mempelajari ilmu tentang konstruksi bangunan dan furniture perkayuan, pengukuran tanah, rancangan anggaran biaya (RAB) konstruksi bangunan, laporan pelaksaan konstruksi bangunan, perencanaan bisnis konstruksi dan properti, pelaksanaan dan pengawasan konstruksi, dll."
        ],
        [
            "jurusan" => "Desain Permodelan dan Informasi Bangunan (DPIB)",
            "ket" => "Secara garis besar yang dipelajari di DESAIN PEMODELAN DAN INFORMASI BANGUNAN (DPIB) adalah bagaimana cara menggambar bangunan, menghitung Rencana Anggaran Biaya Bangunan, menghitung kekuatan konstruksi bangunan, menggamabar Eksterior dan Interior bangunan, bagaimana metode untuk melaksanakan pekerjaan bangunan, dan hal-hal lain yang berkaitan dengan bangunan."
        ],
        [
            "jurusan" => "Teknik Pemanasan, Tata Udara dan Pendingin (TPTUP)",
            "ket" => "Teknik pendinginan umumnya digunakan pada peralatan rumah tangga seperti Kulkas dan AC Split, pada bidang yang lebih luas digunakan untuk kegiatan pendinginan komersial dan industrial seperti pengawetan makanan, pengaturan temperatur di gedung, gudang, pabrik dan lain-lain."
        ],
        [
            "jurusan" => "Teknik Pengelasan (TP)",
            "ket" => "Pengelasan (welding) adalah salah satu teknik penyambungan logam dengan cara mencairkan sebagian logam induk dan logam pengisi dengan atau tanpa tekanan dan dengan atau tanpa logam penambah dan menghasilkan sambungan yang kontinu. Lingkup teknik pengelasan dalam kontruksi sangat luas, meliputi perkapalan, jembatan, rangka baja, bejana tekan, pipa pesat, pipa saluran dan sebagainya."
        ],
        [
            "jurusan" => "Rekayasa Perangkat Lunak (RPL)",
            "ket" => "RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas."
        ],
        [
            "jurusan" => "Kuliner",
            "ket" => "Jurusan Bisnis Kuliner merupakan program studi yang menggabungkan ilmu bisnis dengan kuliner dengan fokus pada manajemen bisnis di bidang makanan. Jurusan bisnis kuliner memberikan pengetahuan, keahlian, pengalaman, dan karakter yang diperlukan mahasiswa untuk menjadi Entrepreneur sukses di bidang kuliner."
        ],
        [
            "jurusan" => "Akuntansi",
            "ket" => "Jurusan akuntansi ialah belajar cara memelihara keuangan. Ini mempersiapkan siswa untuk menjadi akuntan dengan mengajar mereka tentang prinsip-prinsip akuntansi seperti audit, pelaporan, penganggaran dan peraturan pajak."
        ],
        
    ];
    
    public function getAllBlog(){
        return $this->blog;
    }
}
?>