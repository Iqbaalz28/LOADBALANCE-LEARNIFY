<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2 data-aos="fade-up" data-aos-duration="1600">Tentang Learnify</h2>
                <div data-aos="fade-up" data-aos-duration="1800" class="page_link">
                    <a href="<?= base_url('welcome') ?>">Beranda</a>
                    <a href="">Tentang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================About Area =================-->
<section class="about_area p_60">
    <div class="container">
        <div class="main_title">
            <h2 data-aos="fade-up" data-aos-duration="1600" style="font-size: 33px !important;">Tentang Learnify</h2>
            <p data-aos="fade-up" data-aos-duration="1800">Learnify adalah Web Edukasi
                pembelajaran dimana para siswa dapat belajar dimana saja dan kapan saja.
                Guru dapat mengupload video dirinya sendiri sedang mengajar, sehingga tanpa takut adanya jam
                kosong atau pun keadaan yang tidak terduga apapun karena Learnify dapat diakses dimana saja dan
                kapan saja.
            </p>
        </div>
        <div class="row about_inner">
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Visi
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            Terwujudnya pendidikan yang unggul dan berakhlaq mulia, berbudaya kerja, berjiwa technopreuneurship serta berwawasan global sesuai tuntutan industri dan masyarakat.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Misi
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            Menumbuh kembangkan literasi, penguasaan perkembangan teknologi, informasi, memahami keberagaman sosial budaya dan kultur.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tujuan
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                            Meningkatkan pelayanan pendidikan dan pengelolaan sekolah melalui optimalisasi penjaminan mutu pendidikan.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfour">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Manfaat
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                            Menghasilkan peserta didik yang unggul, beriman dan bertakwa kepada Tuhan Yang Maha Esa, berakhlak mulia, berkebinekaan, mandiri, bergotong royong, bernalar kritis, kreatif.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video_area" id="video">
                    <img class="img-fluid" src="<?= base_url('assets/') ?>img/video-2.jpg" alt="" />
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=leesOLdlJM0">
                        <img src="<?= base_url('assets/') ?>img/icon/video-icon-1.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="main_title">
                <h2 data-aos="fade-up" data-aos-duration="1600" style="font-size: 33px !important; margin-top: 45px; margin-bottom: -35px;">Learnify Chart</h2>
            </div>
            <style>
               .iframe-container {
                position: relative;
                width: 100%;
                padding-bottom: 56.25%; /* mengatur aspek rasio sesuai kebutuhan Anda */
                height: 0;
                overflow: hidden;
            }
              .iframe-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            </style>
            <iframe width="600" height="450" src="https://lookerstudio.google.com/embed/reporting/1f544832-3fb9-4296-b6d7-ece8d02fc2cb/page/wNeLD" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>    
        </div>
    </div>
</section>
<!--================End About Area =================-->

<!--================Team Area =================-->
<section class="team_area p_20">
    <div class="container">
        <div class="main_title">
            <h2 data-aos="fade-up" data-aos-duration="1800">Testimonial Para Siswa Learnify</h2>
            <p data-aos="fade-up" data-aos-duration="2000"></p>
        </div>
        <section class="testimonials_area p_20">
            <div class="container">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/sidiq.png" alt="">
                            <h4>Sidiq Dadi Pratama</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Sebagai pelajar, e-learning ini memudahkan saya dalam belajar. Sistem pembelajaran yang disediakan sangat modern dan mudah digunakan. Materi yang disajikan sangat komprehensif dan disertai dengan visual yang menarik. Saya sangat merekomendasikan e-learning ini bagi pelajar yang ingin belajar dengan cara yang lebih efisien dan memyenangkan.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/zaidan.png" alt="">
                            <h4>Muhammad Zaidan</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Saya sangat terkesan dengan sistem e-learning yang digunakan, dengan menggunakan e-learning ini saya mendapatkan fleksibilitas waktu dan lokasi. Saya bisa belajar kapan saja dan di mana saja, tanpa terikat dengan jadwal kelas yang ketat.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/vicky.png" alt="">
                            <h4>Vicky Ananda</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Sebagai seorang pelajar, saya merasa sangat beruntung dapat mengikuti pendidikan melalui sistem e-learning. Kelebihan utama yang paling saya rasakan adalah adanya akses mudah dan cepat ke materi belajar. Saya bisa membuka materi dan melihat video tutorial kapan saja dan di mana saja, tanpa harus menunggu kelas berikutnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!--================End Team Area =================-->

<!--================Impress Area =================-->
<section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <h2 data-aos="fade-up" data-aos-duration="1800">LOGIN SEBAGAI GURU DAN UPLOAD MATERI & VIDEO SEKARANG</h2>
            <p data-aos="fade-up" data-aos-duration="2000">Kami sangat menghargai kontribusi Anda dalam dunia pendidikan dan kami ingin mengundang Anda untuk bergabung dengan komunitas kami sebagai guru. Dengan bergabung sebagai guru, Anda akan memiliki kesempatan untuk membagikan ilmu dan pengetahuan Anda dengan pelajar di seluruh dunia dengan menciptakan video pembelajaran yang menarik dan efektif.
            </p>
            <a data-aos="fade-up" data-aos-duration="2200" class="main_btn" href="<?= base_url('welcome/guru') ?>">Login Sebagai Guru <span class="lnr lnr-arrow-right text-black"></span></a>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->