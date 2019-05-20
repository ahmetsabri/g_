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

     <!-- export-form -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12 col-xs-12 text-center mb60">
                    <p class="lead">We would be happy to hear from you if you had a finance question which you would like some help with. We have a panel of local fiancial <strong>experts from local banks / accountancy</strong> branches who kindly support in providing this services.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12 ">
                    <div class="box bg-light">
                        <h5 class="export-form-title">Fill The Below Form</h5>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopr">
                                    <div class="form-group">
                                        <label class="control-label sr-only "></label>
                                        <input id="name" type="text" placeholder="Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopl">
                                    <div class="form-group">
                                        <label class="control-label sr-only "></label>
                                        <input type="text" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopr">
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>
                                        <input id="phone" type="text" placeholder="Phone" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopl">
                                    <div class="form-group">
                                        <label class="control-label required sr-only"></label>
                                        <select id="select" name="select" class="form-control">
                                            <option value="">Services</option>
                                            <option value="">Bokerage</option>
                                            <option value="">Mutual Fund</option>
                                            <option value="">Insurance</option>
                                            <option value="">Valuable Service</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="textarea"></label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder="Messages"></textarea>
                                    </div>
                                    <button type="submit" name="singlebutton" class="btn btn-default btn-block ">Submit</button>
                                </div>
                                <!-- /.form-section -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="feature-left">
                        <div class="feature-icon">
                            <i class=" icon-speech-bubble-1"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Free Advice</h4>
                            <p>Expert guidance on personal finance questions for free. Yes, really.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="feature-left">
                        <div class="feature-icon">
                            <i class="icon-padlock-1"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Safe & Secure</h4>
                            <p>It's anonymous – and we never share your information without your permission.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="feature-left">
                        <div class="feature-icon">
                            <i class="icon-group"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Answers You Can Trust</h4>
                            <p>Our curated network of financial experts can help you with all of life’s financial decisions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. export-form -->


@endsection