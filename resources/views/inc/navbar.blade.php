<nav class="pasca-nav" role="navigation">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <ul class="pasca-social">
                        <li class="has-dropdown">
                            <a href="#">UNESA</a>
                            <ul class="dropdown">
                                <li>
                                    <h5>Fakultas</h5>
                                    <a href="/#">Fak. Ilmu Pendidikan</a>
                                    <a href="/#">Fak. Bahasa dan Seni</a>
                                    <a href="/#">Fak. Matematika dan IPA</a>
                                    <a href="/#">Fak. Ilmu Keolahragaan</a>
                                    <a href="/#">Fak. Ekonomi</a>
                                    <a href="/#">Fak. Teknik</a>
                                    <a href="/#">PascaSarjana</a>
                                </li>
                                <li>
                                    <h5>Layanan</h5>
                                    <a href="/#">E-Learning</a>
                                    <a href="/#">Asrama Putri</a>
                                    <a href="/#">Web Mail</a>
                                </li>
                                <li>
                                    <h5>UPT</h5>
                                    <a href="/#">Perpustakaan</a>
                                    <a href="/#">Pusat Komputer</a>
                                    <a href="/#">Pusat Bahasa</a>
                                    <a href="/#">UPT P4</a>
                                    <a href="/#">Humas</a>
                                    <a href="/#">Unipress</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Info Beasiswa</a>
                            <ul class="dropdown">
                                <li>
                                    <h5>studi.dikti.go.id</h5>
                                    <a href="studi.dikti.go.id">Home</a>
                                    <a href="/#">Daftar Perguruan Tinggi</a>
                                    <a href="/#">Daftar Penerima</a>
                                </li>
                                <li>
                                    <h5>Beasiswa BPPDN 2015</h5>
                                    <a href="/#">Pendaftaran BPP-DN</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="https://vi-learn.unesa.ac.id/">eLearning</a></li>
                        <li><a href="https://siakadu.unesa.ac.id/">SIAKAD</a></li>
                        <li><a href="https://sipenmaru.unesa.ac.id/">SIPENMARU</a></li>
                        <li><a href="http://mail.unesa.ac.id" title="WebMail"><i class="icon-mail"></i></a></li>
                        <li><a href="#" title="Campus Map"><i class="icon-map"></i></a></li>
                       @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><i class="icon-user"></i>Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/dashboard">Dashboard</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-xs-6">
                    <div id="pasca-logo">{{ Html::image('images/unesa.jpg', 'Pasca Unesa', array('class' => 'thumb')) }}</div>
                </div>
                <div class="col-md-9 col-sm-7 col-xs-6 text-center menu-1 pull-right">
                    <ul>
                        <li class="active"><a href="/">BERANDA</a></li>
                        <li class="has-dropdown">
                            <a href="#">Tentang Kami</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="/berita_blog/program-pascasarjana-universitas-negeri-surabaya">Profil Pascasarjana Unesa</a>
                                    <a href="/berita_blog/riwayat-program-pascasarjana-universitas-negeri-surabaya">Sejarah Pascasarjana Unesa</a>
                                    <a href="/profile_detail">Pimpinan Pascasarjana Unesa</a>
                                    <a href="/berita_blog/visi-misi-dan-tujuan-pascasarjana">Visi Misi dan Tujuan Pascasarjana Unesa</a>
                                </li>                                                
                            </ul>
                        </li>
                        
                        <li class="has-dropdown">
                            <a href="#">Akademik</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="/#pasca-download">Pusat Download</a>
                                    <a href="/#">Perpustakaan</a>
                                    <a href="/#">Lab Komputer</a>
                                </li>
                            </ul>                             
                        </li>

                        <li class="has-dropdown">
                            <a href="#">Program Studi</a>
                            <ul class="dropdown">
                                <li>
                                    <h5>Jenjang S3</h5>
                                    <a href="/#">S-3 Pendidikan Matematika</a>
                                    <a href="/#">S-3 Ilmu Keolahragaan</a>
                                    <a href="/#">S-3 Pendidikan Bahasa dan Sastra</a>
                                    <a href="/#">S3 Pendidikan Sains</a>
                                    <a href="/#">S-3 Teknologi Pendidikan</a>
                                    <a href="/#">S3 Manajemen Pendidikan</a>
                                    <a href="/#">S3 Pendidikan Vokasi</a>
                                </li>
                                <li>
                                    <h5>Jenjang S2</h5>
                                    <a href="/#">S-2 Pendidikan Matematika</a>
                                    <a href="/#">S-2 Manajemen Pendidikan</a>
                                    <a href="/#">S-2 Pendidikan Bahasa</a>
                                    <a href="/#">S-2 Pendidikan Olahraga</a>
                                    <a href="/#">S-2 Pendidikan Sains</a>
                                    <a href="/#">S-2 Pendidikan Dasar</a>
                                    <a href="/#">S-2 Pendidikan Teknologi dan Kejuruan</a>
                                    <a href="/#">S-2 Teknologi Pendidikan</a>
                                    <a href="/#">S-2 Pendidikan Ips</a>
                                    <a href="/#">S-2 Pendidikan Seni Budaya</a>
                                    <a href="/#">S-2 Pendidikan Luar Biasa</a>
                                    <a href="/#">S-2 Pendidikan Ekonomi</a>
                                    <a href="/#">S2 Pendidikan Luar Sekolah</a>
                                    <a href="/#">S2 Ilmu Manajemen</a>
                                    <a href="/#">S2 Pendidikan Geografi</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="http://jurnalmahasiswa.unesa.ac.id/">JURNAL ILMIAH</a></li>
                        <li><a href="/gallery_detail">GALERI</a></li>
                        <li class="btn-cta pull-right"><a href="https://siakadu.unesa.ac.id/" data-toggle="modal" data-target="#signin"><span>LOGIN SIAKAD</span></a></li>
                    </ul>

                    <!-- Modal SIAKAD Start -->
                    {{-- <div class="modal fade" id="signin" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-center">Login SIAKAD</h4>
                                </div>

                                <div class="modal-body">
                                    <form action="" method="POST" role="form">
                                        <div class="row">
                                            <i>&nbsp;</i>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="text" name="username" class="form-control" placeholder="Username"/>
                                            <span class="icon icon-user-outline form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                                            <span class="icon icon-lock3 form-control-feedback"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4 col-xs-push-4">
                                            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                                            </div><!-- /.col -->
                                        </div>
                                        <div class="row">
                                            <i>&nbsp;</i>
                                        </div>
                                    </form>              
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Modal SIAKAD End -->                      

                </div>
            </div>
            
        </div>
    </div>
</nav>