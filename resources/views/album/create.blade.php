@extends('layouts.app')
@section('content')

<div class="ms_upload_wrapper marger_top60">
    <div class=" marger_top60">
        <div class="ms_upload_box">
            <div class="ms_heading">
                <h1>Album Information</h1>
            </div>
            {!! Form::open(['action' => 'AlbumController@store', 'method' => 'POST'] ) !!}
            <div class="form-group">
                {{Form::file('album_photo'),['class' => 'form-control']}}
                <br>   
            </div>
            <div class="ms_pro_form">
                <div class="form-group">
                    {{Form::text('album_name', '', ['class' => 'form-control','placeholder' => 'album_name'])}}
<br>    
                </div>
                <div class="form-group">
                    {{Form::text('album_art', '', ['class' => 'form-control','placeholder' => 'album_art'])}}
<br>    
                </div>
                
                
                <div class="pro-form-btn text-center marger_top15">
                    <div class="ms_upload_btn">
                        {{Form::submit('submit',['class' => 'ms_btn'])}}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!---footer section---->
<div class="ms_footer_wrapper">
    <div class="ms_footer_logo">
        <a href="index.html"><img src="images/open_logo.png" alt=""></a>
    </div>
    <div class="ms_footer_inner">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer_box">
                    <h1 class="footer_title">miraculous music stations</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_app">
                    <h1 class="footer_title">Download our App</h1>
                    <p>Go Mobile with our app.<br> Listen to your favourite songs at just one click. Download Now !</p>
                    <a href="#" class="foo_app_btn"><img src="images/google_play.jpg" alt="" class="img-fluid"></a>
                    <a href="#" class="foo_app_btn"><img src="images/app_store.jpg" alt="" class="img-fluid"></a>
                    <a href="#" class="foo_app_btn"><img src="images/windows.jpg" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_subscribe">
                    <h1 class="footer_title">subscribe</h1>
                    <p>Subscribe to our newsletter and get latest updates and offers.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <a href="#" class="ms_btn">sign me up</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_contacts">
                    <h1 class="footer_title">contact us</h1>
                    <ul class="foo_con_info">
                        <li>
                            <div class="foo_con_icon">
                                <img src="images/svg/phone.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">Call us :</span>
                                <span>(+1) 202-555-0176, (+1) 2025-5501</span>
                            </div>
                        </li>
                        <li>
                            <div class="foo_con_icon">
                                <img src="images/svg/message.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">email us :</span>
                                <span><a href="#">demo@mail.com </a>, <a href="#">dummy@mail.com</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="foo_con_icon">
                                <img src="images/svg/add.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">walk in :</span>
                                <span>598 Old House Drive, London</span>
                            </div>
                        </li>
                    </ul>
                    <div class="foo_sharing">
                        <div class="share_title">follow us :</div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Copyright---->
    <div class="col-lg-12">
        <div class="ms_copyright">
            <div class="footer_border"></div>
            <p>Copyright &copy; 2018 <a href="#">The Miraculous Music Template</a>. All Rights Reserved.</p>
        </div>
    </div>
</div>
@endsection
