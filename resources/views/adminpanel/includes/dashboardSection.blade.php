<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
            {{-- <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> --}}
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>

            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
     <!-- .row -->
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Visit</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Page Views</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash2"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Unique Visitor</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash3"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Bounce Rate</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash4"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">18%</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.row -->



    <!-- ============================================================== -->
    <!-- Recent comment, table & feed widgets -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-6 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Recent sales
                      <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                          <option>March 2017</option>
                          <option>April 2017</option>
                          <option>May 2017</option>
                          <option>June 2017</option>
                          <option>July 2017</option>
                        </select>
                      </div>
                </h3>
                <div class="row sales-report">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h2>March 2017</h2>
                        <p>SALES REPORT</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 ">
                        <h1 class="text-right text-info m-t-20">$3,690</h1> </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="txt-oflo">Elite admin</td>
                                <td><span class="label label-success label-rouded">SALE</span> </td>
                                <td class="txt-oflo">April 18, 2017</td>
                                <td><span class="text-success">$24</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="txt-oflo">Real Homes WP Theme</td>
                                <td><span class="label label-info label-rouded">EXTENDED</span></td>
                                <td class="txt-oflo">April 19, 2017</td>
                                <td><span class="text-info">$1250</span></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td class="txt-oflo">Ample Admin</td>
                                <td><span class="label label-info label-rouded">EXTENDED</span></td>
                                <td class="txt-oflo">April 19, 2017</td>
                                <td><span class="text-info">$1250</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="txt-oflo">Medical Pro WP Theme</td>
                                <td><span class="label label-danger label-rouded">TAX</span></td>
                                <td class="txt-oflo">April 20, 2017</td>
                                <td><span class="text-danger">-$24</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="txt-oflo">Hosting press html</td>
                                <td><span class="label label-warning label-rouded">SALE</span></td>
                                <td class="txt-oflo">April 21, 2017</td>
                                <td><span class="text-success">$24</span></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td class="txt-oflo">Digital Agency PSD</td>
                                <td><span class="label label-success label-rouded">SALE</span> </td>
                                <td class="txt-oflo">April 23, 2017</td>
                                <td><span class="text-danger">-$14</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="txt-oflo">Helping Hands WP Theme</td>
                                <td><span class="label label-warning label-rouded">member</span></td>
                                <td class="txt-oflo">April 22, 2017</td>
                                <td><span class="text-success">$64</span></td>
                            </tr>
                        </tbody>
                    </table>  </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Recent Comments</h3>
                <div class="comment-center p-t-10">
                    <div class="comment-body">
                        <div class="user-img"> <img src="{{asset('admin/plugins/images/user-dummy.jpg')}}" alt="user" class="img-circle"></div>
                        <div class="mail-contnet">
                            <h5>Pavan kumar</h5><span class="time">10:20 AM   20  may 2016</span> <span class="label label-rouded label-info">PENDING</span>
                            <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> <a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Approve</a><a href="javacript:void(0)" class="btn-rounded btn btn-default btn-outline"><i class="ti-close text-danger m-r-5"></i> Reject</a> </div>
                    </div>
                    <div class="comment-body">
                        <div class="user-img"> <img src="{{asset('admin/plugins/images/user-dummy.jpg')}}"alt="user" class="img-circle"> </div>
                        <div class="mail-contnet">
                            <h5>Sonu Nigam</h5><span class="time">10:20 AM   20  may 2016</span> <span class="label label-rouded label-success">APPROVED</span>
                            <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> </div>
                    </div>
                    <div class="comment-body b-none">
                        <div class="user-img"> <img src="{{asset('admin/plugins/images/user-dummy.jpg')}}" alt="user" class="img-circle"> </div>
                        <div class="mail-contnet">
                            <h5>Arijit singh</h5><span class="time">10:20 AM   20  may 2016</span> <span class="label label-rouded label-danger">REJECTED</span>
                            <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> </div>
                    </div>

                </div>
            </div>
        </div>


    </div>



</div>
