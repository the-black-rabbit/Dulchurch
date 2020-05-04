<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DulChurch</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <?php include("header.html")?>
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-ctn">
										<h2>Sadaka</h2>
										<p>Sadaka za Misa</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal">Ongeza misa</button>
                                </div>
                                <div class="modal fade" id="addModal" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Ingiza Taarifa za Sadaka</h2>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-tag"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="mass_name" value="" required placeholder="Misa ya">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="mass_type" required>
                                                                            <option selected disabled>Sababu ya Ibada</option>
                                                                            <option value="Ibada ya Jumapili">Ibada ya Jumapili</option>
                                                                            <option value="Ibada ya wiki">Ibada ya wiki</option>
                                                                            <option value="Ibada ya Sikukuu">Ibada ya Sikukuu</option>
                                                                            <option value="Ibada ya ndoa">Ibada ya ndoa</option>
                                                                            <option value="Ibada ya maalumu">Ibada ya maalumu</option>
                                                                            <option value="Ibada ya nyingine">Ibada ya nyingine</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int nk-datapk-ctm form-elet-mg" id="data_1">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <div class="nk-int-st input-group date nk-int-st">
                                                                      <span class="input-group-addon"></span>
                                                                     <input type="text" class="form-control" name="mass_date" value="" required placeholder="Tarehe ya Ibada">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-money"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="amount" value="" required placeholder="Sadaka ya Misa">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="mass_priest" value="" required placeholder="Aliyeadhimisha Misa">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="" data-dismiss="modal">Sitisha</a>
                                                <button type="submit" class="btn btn-default" name="submit" data-dismiss="modal">Hifadhi taarifa</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Taarifa za Sadaka</h2>
                            <p><span  class="faded">Salio la Mfuko wa sadaka:</span> 12,000,000/= </p>
                       </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sadaka ya Ibada</th>
                                        <th>Jina la Misa</th>
                                        <th>Aina ya Ibada</th>
                                        <th>Tarehe ya Ibada</th>
                                        <th>Kigango</th>
                                        <th>Aliyeadhimisha</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <td class="td-info">500,000/=</td>
                                        <td>Misa ya Kwanza</td>
                                        <td>Ibada ya Jumapili</td>
                                        <td>03/04/2020</td>
                                        <td>Mt. Antonia</td>
                                        <td>Padre Michael Butigi</td>
                                        <td>
                                            <span data-toggle="modal" data-target="#editModal"><button data-toggle="tooltip" data-placement="left" title="Badili Taarifa" class="btn"><i class="fa fa-pencil"></i></button></span>
                                            <span data-toggle="modal" data-target="#deleteModal"><button data-toggle="tooltip" data-placement="left" title="Futa Taarifa" class="btn"><i class="fa fa-trash-o"></i></button></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-info">56,000/=</td>
                                        <td>Ndoa ya A na B</td>
                                        <td>Ibada ya Ndoa</td>
                                        <td>05/01/2020</td>
                                        <td>Mt. Gasper</td>
                                        <td>Padre Lonroe Kimuso</td>
                                        <td>
                                            <span data-toggle="modal" data-target="#editModal"><button data-toggle="tooltip" data-placement="left" title="Badili Taarifa" class="btn"><i class="fa fa-pencil"></i></button></span>
                                            <span data-toggle="modal" data-target="#deleteModal"><button data-toggle="tooltip" data-placement="left" title="Futa Taarifa" class="btn"><i class="fa fa-trash-o"></i></button></span>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020 
                            . All rights reserved. License Under <a href="https://www.johnsonscodes.com">Dulcet Co LTD</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    
    <div class="modal fade" id="editModal" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Badilisha Taarifa za Kigango</h2>
                                                <form>
                                                <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-tag"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="mass_name" value="" required placeholder="Misa ya">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="mass_type" required>
                                                                            <option selected disabled>Sababu ya Ibada</option>
                                                                            <option value="Ibada ya Jumapili">Ibada ya Jumapili</option>
                                                                            <option value="Ibada ya wiki">Ibada ya wiki</option>
                                                                            <option value="Ibada ya Sikukuu">Ibada ya Sikukuu</option>
                                                                            <option value="Ibada ya ndoa">Ibada ya ndoa</option>
                                                                            <option value="Ibada ya maalumu">Ibada ya maalumu</option>
                                                                            <option value="Ibada ya nyingine">Ibada ya nyingine</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int nk-datapk-ctm form-elet-mg" id="data_1">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <div class="nk-int-st input-group date nk-int-st">
                                                                      <span class="input-group-addon"></span>
                                                                     <input type="text" class="form-control" name="mass_date" value="" required placeholder="Tarehe ya Ibada">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-money"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="amount" value="" required placeholder="Sadaka ya Misa">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="mass_priest" value="" required placeholder="Aliyeadhimisha Misa">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="" data-dismiss="modal">Sitisha</a>
                                                <button type="submit" class="btn btn-default" name="submit" data-dismiss="modal">Hifadhi taarifa</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
    <div class="modal fade" id="deleteModal" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="alert alert-danger">Unakaribia kufuta taarifa za Misa!</h2>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="" data-dismiss="modal">Futa Taarifa</a>
                                                <button type="submit" class="btn btn-default" name="submit" data-dismiss="modal">Sitisha</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>