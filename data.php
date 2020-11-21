<?php
function Tampil($n){
    $nama="";
    $gambar="";
    $penjelasan="";
    $kelebihan="";
    $kekurangan="";

    if($n=="Incremental"){
        $gambar="incremental.jpg";
        $penjelasan="Model pengembangan sistem pada software engineering
        berdasarkan requirement software yang dipecah menjadi
        beberapa fungsi atau bagian sehingga model
        pengembangannya secara bertahap. Model ini digunakan untuk membuat perangkat lunak dalam
        waktu yang lama dengan system requirement tidak harus
        lengkap.
        <br><br>Incremental mempunyai beberapa tahapan, yaitu : <br>
        <ul class='circle'>
        <li><b>Requirement</b>, proses tahapan awal yang dilakukan pada incremental model adalah
        penentuan kebutuhan atau analisis kebutuhan.</li>
        <li><b>Specification</b>, proses spesifikasi dimana menggunakan analisis kebutuhan sebagai acuannya.</li>
        <li><b>Architecture Design</b>, perancangan software yang terbuka agar dapat
        diterapkan sistem pembangunan per-bagian pada
        tahapan selanjutnya.</li>
        <li><b>Code</b>, setelah melakukan proses desain selanjutnya ada
        pengkodean.</li>
        <li><b>Test</b>, tahap pengujian dalam model ini.</li>
        </ul>";
        $kelebihan=array(
            'Model dengan manajemen yang sederhana',
            'Pengguna tidak perlu menunggu sampai seluruh sistem dikirim untuk mengambil keuntungan dari sistem
            tersebut',
            'Resiko untuk kegagalan proyek secara keseluruhan lebih rendah. Walaupun masalah masih dapat ditemukan pada
            beberapa increment',
            'Nilai penggunaan dapat ditentukan pada setiap increment sehingga fungsionalitas sistem disediakan lebih
            awal',
            'Memiliki risiko lebih rendah terhadap keseluruhan pengembagan sistem',
            'Prioritas tertinggi pada pelayanan sistem adalah yang
            paling diuji'
        );
        $kekurangan=array(
            'Kemungkinan tiap bagian tidak dapat diintegrasikan',
            'Dapat menjadi build and Fix Model, karena kemampuannya untuk selalu mendapat perubahan
            selama proses rekayasa berlangsung',
            'Harus Open Architecture',
            'Mungkin terjadi kesulitan untuk memetakan kebutuhan pengguna ke dalam rencana spesifikasi masing-masing
            hasil increment.'
        );
    }else if($n=="VShaped Model"){
        $gambar="vshaped.png";
        $penjelasan="Model SDLC dimana pelaksanaan proses yang terjadi secara
        berurutan dalam bentuk-V. Dikenal juga sebagai model
        Verifikasi dan Validasi. The V-Model merupakan perluasan dari waterfall model dan
        didasarkan pada asosiasi dari fase pengujian untuk setiap
        tahap pengembangan yang sesuai. Ini berarti bahwa untuk
        setiap fase tunggal dalam siklus pengembangan, ada tahap
        pengujian terkait langsung. Ini adalah model yang sangat
        disiplin dan tahap berikutnya dimulai setelah selesainya
        tahap sebelumnya. Model V – Shape ini cocok digunakan untuk projek kecil
        dengan pengerjaan waktu yang cukup lama.
        <br><br>VShaped Model mempunyai beberapa tahapan, yaitu : <br>
        <ul class='circle'>
        <li><b>Business Requirement Analysis</b>, tahap pertama dalam
        siklus pengembangan di mana persyaratan produk
        dipahami dari perspektif pelanggan. Fase ini melibatkan
        komunikasi rinci dengan pelanggan untuk memahami
        harapan dan kebutuhan yang tepat.</li>
        <li><b>System Design</b>, setelah memiliki persyaratan produk
        yang jelas dan rinci, sekarang saatnya untuk merancang
        sistem yang lengkap. Desain sistem akan memiliki
        pemahaman dan merinci hardware lengkap dan setup
        komunikasi untuk produk dalam pengembangan.</li>
        <li><b>Architecture Design</b>, spesifikasi arsitektur dipahami dan
        dirancang dalam fase ini. Biasanya lebih dari satu
        pendekatan teknis diusulkan dan berdasarkan kelayakan
        teknis dan finansial keputusan akhir diambil. Desain
        sistem dipecah lebih jauh ke dalam modul mengambil
        fungsi yang berbeda. Hal ini juga disebut sebagai “Desain
        Tingkat Tinggi”.</li>
        <li><b>Module Design</b>, pada fase ini, desain internal rinci untuk
        semua modul sistem yang ditentukan, disebut “Desain
        Tingkat Rendah”. Penting bahwa desain tersebut
        kompatibel dengan modul lain dalam arsitektur sistem
        dan sistem eksternal lainnya.</li>
        <li><b>Coding Phase</b>, bahasa pemrograman yang paling cocok
        ditentukan berdasarkan sistem dan persyaratan
        arsitektur.</li>
        </ul>";
        $kelebihan=array(
            'Ini adalah model yang sangat-disiplin dan Tahapan selesai satu per satu',
            'Bekerja dengan baik untuk proyek-proyek yang lebih kecil dimana persyaratan dipahami dengan baik',
            'Sederhana dan mudah dimengerti dan digunakan',
            'Mudah dikelola karena setiap fase memiliki spesifik
            kiriman dan proses review.'
        );
        $kekurangan=array(
            'Berisiko tinggi dan ketidakpastian',
            'Tidak cocok untuk proyek-proyek yang kompleks dan berorientasi objek.',
            'Tidak cocok untuk proyek-proyek
            dimana persyaratan beresiko tinggi',
            'Tidak cocok untuk proyek-proyek yang lama dan berkelanjutan',
            'Setelah aplikasi dalam tahap pengujian, sulit untuk kembali dan mengubah fungsionalitas.'
        );
    }else if($n=="Spiral"){
        $gambar="spiral.jpg";
        $penjelasan="Gabungan antara Iterative Model dengan Waterfall Model
        dengan penekanan yang tinggi pada analisis resiko yang akan
        di hadapi. Spiral model bertujuan untuk meningkatkan
        tingkat keberhasilan pada saat pengembangan suatu
        sistem. Cocok digunakan untuk projek besar dan tidak memerlukan
        system requirement yang lengkap sebab pengerjaannya
        dapat dipantau oleh user dan developer sehingga mereka
        dapat mengerti dengan baik mengenai software ini begitu
        juga dengan resiko yang mungkin didapat pada setiap
        aktivitas yang dilakukan.
        <br><br>Spiral mempunyai beberapa tahapan, yaitu : <br>
        <ul class='circle'>
        <li><b>Identification</b>, mengumpulkan kebutuhan bisnis di dasar
        spiral. Dalam spiral berikutnya disebut sebagai produk
        dewasa. Identifikasi persyaratan sistem, persyaratan
        subsistem, persyaratan unit dilakukan pada fase ini.
        Fase ini juga mencakup komunikasi antar sistem analis
        dengan klien.</li>
        <li><b>Design</b>, pada fase ini dimulai dengan desain konseptual di
        dasar spiral dan melibatkan desain arsitektur, desain
        logis dari modul, desain produk fisik dan desain akhir
        dalam spiral berikutnya.</li>
        <li><b>Construct or Build</b>, pada fase ini mengacu produksi
        produk perangkat lunak yang sebenarnya di setiap spiral.</li>
        <li><b>Evaluation and Risk Analysis</b>,  mengidentifikasi,
        memperkirakan dan memantau kelayakan teknis dan
        risiko manajemen, seperti jadwal selip dan biaya lebih.
        Setelah pengujian sistem, akhir dari iterasi klien akan
        mengevaluasi produk yang sudah dibangun dan akan
        memberikan feedback.</li>
        </ul>";
        $kelebihan=array(
            'Perubahan kebutuhan dapat diakomodir',
            'Persyaratan dapat diketahui lebih akurat',
            'Pengguna dapat melihat sistem awal',
            'Pembangunan dapat dibagi menjadi bagian-bagian yang lebih kecil dan bagian-bagian yang berisiko dapat
            dikembangkan sebelumnya yang membantu dalam
            manajemen risiko yang lebih baik'
        );
        $kekurangan=array(
            'Manajemen lebih kompleks',
            'Akhir proyek mungkin tidak diketahui di awal',
            'Tidak cocok untuk proyek-proyek berisiko kecil atau
            rendah dan bisa menjadi mahal untuk proyek-proyek kecil',
            'Proses yang kompleks',
            'Spiral mungkin berlangsung tanpa batas'
        );
    }else if($n=="Rapid Application Development"){
        $gambar="rad.png";
        $penjelasan="Pengabungan antara Prototype Model dengan Iterative
        Model. Dalam model RAD, modul fungsional dikembangkan
        secara paralel sebagai prototype dan terintegrasi untuk
        membuat produk yang lengkap untuk pengiriman produk
        yang lebih cepat. Dikarenakan tidak ada rincian planning yang detail, maka
        memudahkan untuk melakukan perubahan pada saat
        development berjalan.
        <br><br>RAD Model mempunyai beberapa tahapan, yaitu : <br>
        <ul class='circle'>
        <li><b>Business Modeling</b>, fase ini untuk
        perancangan dasar dari pengembangan produk
        berdasarkan informasi dan distribusi informasi antar
        saluran bisnis.</li>
        <li><b>Data Modeling</b>, fase ini untuk menganalisa
        informasi yang sudah dikumpulan dari fase Business
        Modeling. Semua kumpulan data diidentifikasi dan
        didefinisikan secara rinci untuk mencari model bisnis yang
        tepat.</li>
        <li><b>Process Modeling</b>, fase ini untuk
        untuk menetapkan arus informasi bisnis yang diperlukan
        untuk mencapai tujuan bisnis yang spesifik sesuai model
        bisnis. perubahan atau penyempurnaan pada kumpulan
        objek data didefinisikan dalam fase ini.</li>
        <li><b>Application Generation</b>, fase ini untuk
        Sistem yang sebenarnya dibangun dan pengkodean
        dilakukan dengan menggunakan automatic tools untuk
        mengubah model proses dan data menjadi prototype
        yang aktual.</li>
        <li><b>Testing and Turnover</b>, fase ini untuk pengujian
        keseluruhan sistem yang dibangun semua komponen
        perlu diuji secara menyeluruh dengan cakupan uji yang
        lengkap. Dengan pengujian yang lengkap dapat
        mengurangi risiko cacat sistem.</li>
        </ul>";
        $kelebihan=array(
            'Mudah mengakomodasi peruabahan sistem',
            'Progress development bisa di ukur',
            'Waktu iterasi bisa di perpendek menggunakan RAD Tools',
            'Mengurangi waktu development',
            'Mudah dalam menentukan dasar sistem',
            'Mempermudah feedback customer',
            'Cocok untuk proyek yang membutuhkan waktu
            pengembangan yang lebih pendek',
            'Cocok untuk sistem yang berbasis komponen dan
            terukur'
        );
        $kekurangan=array(
            'Ketergantungan pada anggota bisnis tim untuk mengidentifikasi persyaratan bisnis',
            'Hanya sistem yang bisa di modularized yang bisa dibangun menggunakan RAD',
            'Membutuhkan developer/designer yang berpengalaman',
            'Ketergantungan pada keterampilan model',
            'Kompleksitas manajemen',
            'Tidak dapat diterapkan pada proyek yang kecil / murah'
        );
    }else if($n=="Prototyping"){
        $gambar="prototyping.JPG";
        $penjelasan="Model prototype merupakan model pengembangan
        software yang mengijinkan pengguna atau user memiliki
        gambaran awal tentang program yang akan dikembangkan
        serta melakukan pengujian awal. Model prototype juga memberi fasilitas bagi pengembangn
        dan user untuk saling terkait dan berinteraksi. Pada model prototype biasa digunakan ketika system
        requirement yang tidak terlalu lengkap dan projek yang
        dikerjakan kecil.
        <br><br>Prototyping mempunyai beberapa tahapan, yaitu : <br>
        <ul class='circle'>
        <li><b>Mengidentifikasi Kebutuhan Dasar</b>, fase ini untuk
        pemahaman kebutuhan dasar produk terutama dalam
        hal user interface.</li>
        <li><b>Develop Prototype Awal</b>, fase ini untuk mengembangkan
        prototype awal dimana persyaratan yang sangat
        mendasar dipamerkan dan user interface selesai di
        buat.</li>
        <li><b>Review & Penyempurnaan Prototype</b>,  fase ini diawali
        dengan user/client melakukan review prototype yang
        sudah dirancang oleh developer untuk memberikan
        feedback terhadap software yang sedang dikembangkan.
        Kemudian siklus development pun kembali dilanjutkan
        sesuai dengan revisi dan client agar ekpektasi client
        terpenuhi.</li>
        </ul>
        ";
        $kelebihan=array(
            'Meningkatnya keterlibatan pengguna dalam produk bahkan sebelum diimplementasi',
            'Karena model sistem yang di bangun di share ke user, maka user mendapatkan pemahaman yang lebih baik
            tentang sistem yang sedang dikembangkan',
            'Mengurangi waktu dan biaya karena cacat dapat dideteksi jauh lebih awal',
            'Feedback user yang cepat di awal dapat memberikan solusi yang lebih baik',
            'Fungsi yang tidak ada dapat diidentifikasi dengan mudah dan cepat',
            'Fungsi yang membingungkan dapat dihilangkan'
        );
        $kekurangan=array(
            'Risiko analisis kebutuhan yang tidak mencukupi karena terlalu banyak ketergantungan pada Prototipe',
            'Pengguna mungkin bingung dalam prototipe dan sistem sebenarnya',
            'Upaya yang diinvestasikan dalam membangun prototip mungkin terlalu banyak jika tidak dipantau tepat',
            'Pengembang dapat mencoba untuk menggunakan kembali prototipe yang ada untuk membangun sistem
            yang sebenarnya'
        );
    }else if($n=="Scrum"){
        $gambar="scrum.png";
        $penjelasan="Scrum Pada dasarnya merupakan salah satu komponen
        dari metodologi pengembangan sistem Agile. Akhir-akhir ini
        scrum mulai marak di implemntasikan di perusahaan IT di
        Indonesia, dikarenakan maraknya perusahaan IT
        mengimplementasikan agile development. 
        
        <br><br>Scrum menguraikan proses untuk mengidentifikasi dan
        katalogisasi pekerjaan yang perlu dilakukan,
        memprioritaskan yang bekerja dengan berkomunikasi dengan
        pelanggan / wakil pelanggan, dan pelaksanaan yang bekerja
        menggunakan rilis iterative dan memiliki tujuan utama untuk
        mendapatkan perkiraan berapa lama development akan
        dilakukan. 
        
        <br><br>Scrum merupakan suatu kerangka kerja. Jadi, bukannya
        menyediakan deskripsi rinci tentang bagaimana segala
        sesuatu yang harus dilakukan pada proyek seperti diserahkan
        kepada tim pengembangan perangkat lunak pada umumnya.
        Hal ini dilakukan supaya tim akan tahu bagaimana cara
        terbaik untuk memecahkan masalah.
        
        <br><br><b>3 elemen SCRUM :</b>
        <ul class='circle'>
        <li><b>Product Owner</b>, mewakili bisnis, pelanggan atau pengguna dan
        memandu tim ke arah pegembangan produk yang tepat.</li>
        <li><b>Scrum Master</b>, dapat dianggap sebagai pemersatu bagi
        product owner dan scrum team, membantu anggota
        tim menggunakan kerangka Scrum untuk menyelesaikan
        suatu project berdasarkan timeline yang ditentukan di
        awal.</li>
        <li><b>Scrum Team</b>, merupakan grup pengembang kecil
        biasanya terdiri dari 5-9 orang. Untuk projek yang sangat
        besar, pekerjaan biasanya dibagi dan didelegasikan ke grup - grup kecil</li>
        </ul>";
        $kelebihan=array(
            'Keperluan berubah dengan cepat
            Tim berukuran kecil sehingga melancarkan komunikasi,
            mengurangi biaya dan memberdayakan satu sama lain',
            'Pekerjaan terbagi-bagi sehingga dapat diselesaikan dengan cepat',
            'Dokumentasi dan pengujian terus menerus dilakukan setelah software dibangun',
            'Proses Scrum mampu menyatakan bahwa produk selesai kapanpun diperlukan'
        );
        $kekurangan=array(
            'Developer harus selalu siap dengan perubahan karena
            perubahan akan selalu diterima'
        );
    }else if($n=='Extreme Programming'){
        $gambar="xp.png";
        $penjelasan="Extreme Programming (XP) merupakan suatu pendekatan
        yang paling banyak digunakan untuk pengembangan perangkat
        lunak cepat. Alasan menggunakan metode XP karena sifat
        dari aplikasi yang di kembangkan dengan cepat. Pada model ini biasanya cocok digunakan untuk projek besar
        dan dana yang cukup besar dengan waktu yang cukup lama.
        <br><br>Extreme Programming (XP) mempunyai beberapa tahapan, yaitu :
        <ul class='circle'>
        <li><b>Planning</b>, pada tahap perencanaan ini dimulai
        dari pengumpulan kebutuhan yang membantu tim teknikal
        untuk memahami konteks bisnis dari sebuah aplikasi. Selain
        itu pada tahap ini juga mendefinisikan output yang akan
        dihasilkan, fitur yang dimiliki oleh aplikasi dan fungsi dari aplikasi
        yang dikembangkan.</li>
        <li><b>Design</b>,  metode ini menekankan desain
        aplikasi yang sederhana, untuk mendesain aplikasi dapat
        menggunakan Class-Responsibility-Collaborator (CRC)
        cards yang mengidentifikasi dan mengatur class pada
        object-oriented.</li>
        <li><b>Coding</b>, konsep utama dari tahapan
        pengkodean pada extreme programming adalah pair
        programming, melibatkan lebih dari satu orang untuk
        menyusun kode.</li>
        <li><b>Testing</b>, pada tahapan ini lebih fokus pada
        pengujian fitur dan fungsionalitas dari aplikasi.</li>
        </ul>
        ";
        $kelebihan=array(
            'Komunikasi dalam XP dibangun dengan melakukan
            pemrograman berpasangan (pair programming).
            Developer didampingi oleh pihak clien dalam melakukan
            coding dan unit testing sehingga klien bisa terlibat
            langsung dalam pemrograman sambil berkomunikasi
            dengan developer',
            'Setiap feed back ditanggapi dengan melakukan tes, unit
            test atau system integration dan jangan menunda
            karena biaya akan membengkak (uang, tenaga, waktu)',
            'Banyak ide baru dan berani mencobanya, berani
            mengerjakan kembali dan setiap kali kesalahan
            ditemukan, langsung diperbaiki'
        );
        $kekurangan=array(
            'Developer harus selalu siap dengan perubahan karena
            perubahan akan selalu diterima'
        );
    }else if($n=="Iterative"){
        $gambar="iterative.png";
        $penjelasan="Iterative Merupakan model pengembangan sistem yang bersifat dinamis dalam artian setiap tahapan proses pengembangan 
        sistem dapat diulang jika terdapat kekurangan atau kesalahan. Setiap tahapan pengembangan system dapat 
        dikerjakan berupa ringkasan dan tidak lengkap, namun pada akhir pengembangan akan 
        didapatkan sistem yang lengkap pada pengembangan system.
        <br><br>Iterative Development berarti menciptakan versi yang lebih fungsional dari sebuah system 
        dalam siklus pembangunan pendek. Setiap versi ditinjau dengan klien untuk menghasilkan 
        persyaratan untuk membuat versi berikutnya. Proses ini diulang sampai semua fungsionalitas 
        telah dikembangkan. Panjang ideal iterasi adalah antara satu hari (yang lebih dekat dengan Metodologi Agile) 
        dan tiga minggu. Setiap siklus pengembangan memberikan pengguna kesempatan untuk memberikan umpan balik, 
        memperbaiki persyaratan, dan kemajuan melihat (dalam pertemuan sesi fokus grup).";
        $kelebihan=array(
            'Beberapa fungsi dapat di kembangkan dengan cepat di awal pembuatan versi baru',
            'Hasil yang di peroleh secara berkala',
            'Kemajuan sebuah sistem dapat di ukur',
            'Development software mudah di rencanakan',
            'Biaya yang dikeluarkan kecil apabila ingin merubah requirement',
            'Testing dan debugging selama proses iterasi lebih mudah',
            'Analisis resiko yang lebih baik',
            'Mendukung perubahan requirement',
            'Waktu operasional yang lebih singkat',
            'Cocok untuk project besar'
        );
        $kekurangan=array(
            'Membutuhkan resource yang cukup banyak',
            'Meski biaya perubahan rendah, tetapi sangat tidak cocok untuk mengubah persayaratan',
            'Memerlukan Perhatian manajemen',
            'Permasalahan sistem arsitektur dan desain mungkin akan timbul, karena tidak semua
            persyaratan di tentukan di awal pengambangan sistem',
            'Tidak cocok untuk project kecil',
            'Kompleksitas manajemen',
            'Membutuhkan tenaga ahli untuk analisis resiko yang timbul'
        );
    }else if($n=="Rational Unified Process"){
        $gambar="rup.jpeg";
        $penjelasan="Metodologi pengembangan sistem berbasis objek. Metode ini sudah menjadi salah satu 
        metode yang banyak digunakan dalam pengembangan sistem berorientasi objek. UP memperkenalkan 
        pendekatan baru untuk siklus hidup pengembangan sistem yang menggabungkan perulangan 
        (iterations) dan tahapan (phases) yang disebut dengan siklus hidup UP (UP life cycle). 
        UP mendefinisikan empat tahapan siklus hidup yaitu inception, elaboration, construction, dan transition.
        <br><br>RUP mempunyai beberapa tahapan, yaitu :
        <ul class='circle'>
        <li><b>Inception</b>, merupakan tahap untuk mengidentifikasi sistem yang akan dikembangkan yaitu analisis
        sistem existing, perumusan sistem target, penentuan arsitektur global target, identifikasi
        kebutuhan, perumusan persyaratan (fungsional, performansi, keamanan, GUI, dll),
        perumusan kebutuhan pengujian (level unit, integrasi, sistem, performansi, fungsionalitas,
        keamanan, dll), UML diagram, dan pembuatan dokumentasi.</li>
        <li><b>Elaboration</b>, merupakan tahap untuk melakukan pembuatan desain arsitektur subsistem (architecture
        pattern), desain komponen sistem, desain format data (protokol komunikasi), desain
        database, desain user interface, pemodelan diagram UML (diagram sequence, class,
        component, deployment, dll.), dan pembuatan dokumentasi</li>
        <li><b>Construction</b>, merupakan tahap untuk mengimplementasikan hasil desain dan melakukan pengujian hasil
        implementasi. </li>
        <li><b>Transition</b>, merupakan tahap untuk menyerahkan sistem aplikasi kepada user (roll-out), yang umumnya
        mencakup pelatihan dan beta testing aplikasi</li>
        </ul>";
        $kelebihan=array(
            'Menyediakan akses yang mudah terhadap pengetahuan dasar bagi anggota tim',
            'Menyediakan petunjuk bagaimana menggunakan UML secara efektif',
            'Mendukung proses pengulangan dalam pengembangan software',
            'Memungkinkan adanya penambahan-penambahan pada proses',
            'Memungkinkan untuk secara sistematis mengontrol perubahan - perubahan yang terjadi
            pada software selama proses pengembangannya. Memungkinkan untuk menjalankan
            test case dengan menggunakan Rational Test Manager Tool '
        );
        $kekurangan=array(
            'Metodologi ini hanya dapat digunakan pada pengembangan perangkat lunak yang
            berorientasi objek dengan berfokus pada UML (Unified Modeling Language)'
        );
    }else{
        echo "<script>alert('Analisis Gagal');
        document.location='index.php';</script>";
       
    }
    
    $hasil = array("nama"=>$nama, "gambar"=>$gambar, "penjelasan"=>$penjelasan, "kelebihan"=>$kelebihan, "kekurangan"=>$kekurangan);
    return $hasil;
}
?>