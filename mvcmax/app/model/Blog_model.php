<?php
class Blog_model{
    private $blog = [
        [
            "jurusan" => "Teknik Konstruksi dan Perumahan (TKP)",
            "ket" => "Salah satu kompetensi keahlian yang berhubungan dengan pembangunan perumahan, mulai dari perencanaan, pelaksanaan, dan evaluasi kegiatan konstruksi."
        ],
        [
            "jurusan" => "Desain Permodelan dan Informasi Bangunan (DPIB)",
            "ket" => "Salah satu kompetensi keahlian yang mempelajari tentang perencanaan bangunan, pelaksanaan pembuatan gedung dan perbaikan gedung."
        ],
        [
            "jurusan" => "Teknik Pemanasan, Tata Udara dan Pendingin (TPTUP)",
            "ket" => "Salah satu kompetensi keahlian yang mempelajari tentang pengendalian suhu, kelembaban, dan kebersihan udara pada suatu ruangan."
        ],
        [
            "jurusan" => "Teknik Pengelasan (TP)",
            "ket" => "Salah satu kompetensi keahlian yang mempelajari satu bidang kerja saja yaitu bagaimana cara untuk mengelas yang baik, dan teori tentang apa-apa saja bahan untuk proses pengelasan."
        ],
        [
            "jurusan" => "Rekayasa Perangkat Lunak (RPL)",
            "ket" => "Salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer."
        ],
        [
            "jurusan" => "Kuliner",
            "ket" => "Ilmu pengetahuan mengenai seni mengolah makanan, mulai dari persiapan, pengolahan, hingga cara menghidangkan makanan."
        ],
        [
            "jurusan" => "Akuntansi",
            "ket" => "Suatu kegiatan mempelajari ekonomi yang terdiri dari proses pencatatan, peringkasan, klarifikasi, pengolahan, dan penyajian data transaksi dan berbagai kegiatan yang berhubungan dengan keuangan."
        ],
        
    ];
    
    public function getAllBlog(){
        return $this->blog;
    }
}
?>