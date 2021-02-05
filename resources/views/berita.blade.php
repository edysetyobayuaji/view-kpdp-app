<section class="section-base section-color" id="section">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                             
                            <h2>Berita {{nama_perusahaan()}}</h2>
                            <p>Berita</p>
                                                        
                        </div>
                    </div>
                    <div class="col-lg-6 align-right align-left-md">
                        <hr class="space-sm hidden-md" />
                         
                        <a href="{{url('news_all/')}}" class="btn-text active">Semua Berita</a>
                                                
                    </div>
                </div>
                <hr class="space" />
                <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
                    <div class="grid-box">
                                                    
                         @foreach(new_home() as $new_home)   
                            <div class="grid-item">
                                <div class="cnt-box cnt-box-blog-top" data-href="{{url('news/'.$new_home['link'])}}">
                                    <a href="#" class="img-box">
                                        <div class="blog-date">
                                            <span>{{tgl($new_home['tanggal'])}}</span>
                                            <span style="text-transform:uppercase">{{bulan_tahun($new_home['tanggal'])}}</span>
                                        </div>
                                        <img src="{{link_gambar($new_home['gambar'])}}" class="news-home" alt="" />
                                    </a>
                                    <div class="caption">
                                        <h2>{{$new_home['name']}}</h2>
                                        <ul class="icon-list icon-list-horizontal">
                                            <li><i class="icon-bookmark"></i><a href="#">{{nama_perusahaan()}}</a></li>
                                            <li class="icon-links">
                                                <a href="#" data-social="share-fadebook" data-social-url=""><i class="icon-facebook"></i></a>
                                                <a href="#" data-social="share-twitter" data-social-url=""><i class="icon-twitter"></i></a>
                                                <a href="#" data-social="share-linkedin" data-social-url=""><i class="icon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                        <div style="width:100%;overflow-y:hidden;height:200px">
                                           {!!$new_home['isi']!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                         @endforeach   
                                                    
                            
                            
                                                
                    </div>
                </div>
            </div>
        </section>
        