@extends('layouts.frontend')
@section('content')

 <div class="page-header" style="background-image: url('{{asset('images/page3_header.png')}} " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->

        <!-- contact us -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-4 col-sm-4 col-xs-12 mb60">
                    <h2>Drop Us a Line So That We Can Hear From You</h2>
                    <p>Contactus about anything related to our company or services. We’ll do our best to get back to you as son as possible.</p>
                </div>
                <div class="col-lg-8 col-lg-8 col-sm-8 col-xs-12">
                    <div class="box bg-light">
                        <h5 class="export-form-title">Fill The Below Form</h5>
                        <form action="{{route('contact_us')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopr">
                                    <div class="form-group">
                                        <label class="control-label sr-only "></label>
                                        <input id="name" type="text" placeholder="Name" class="form-control" required name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopl">
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>
                                        <input type="text" placeholder="Email" class="form-control" required name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopr">
                                    <div class="form-group">
                                        <label class="control-label sr-only "></label>
                                        <input id="phone" type="text" placeholder="Phone" class="form-control" required name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopl">
                                    <div class="form-group">
                                        <label class="control-label sr-only "></label>
                                        <input id="subject" type="text" placeholder="subject" class="form-control" required name="subject">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>
                                        <textarea class="form-control" id="textarea"  rows="4" placeholder="Messages" name="message" required></textarea>
                                    </div>
                                    <button type="submit" name="singlebutton" class="btn btn-default btn-block ">Submit</button>
                                </div>
                                <!-- /.form-section -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="contact-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-block">
                            <div class="contact-info-icon">
                                <i class="icon-placeholder"></i>
                            </div>
                            <div class="contact-info-text">
                                <h5>Address</h5>
                                <p>{{$setting->address}}<br>
                                	1504 Tori Lane Jody lake, 
									Banglor Lake City, Dogwood Road USA 84104</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-block">
                            <div class="contact-info-icon">
                                <i class="icon-telephone"></i>
                            </div>
                            <div class="contact-info-text">
                                <h5>Phone</h5>
                                <p><strong>
                                	{{$setting->contact_phone}}
                                    <br>+180-123-8910</strong></p>
                                	
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-block">
                            <div class="contact-info-icon">
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h5>Email &amp; Fax</h5>
                                <p><strong>{{$setting->contact_email}}
                                    <br>(865)934-1234</strong></p>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection