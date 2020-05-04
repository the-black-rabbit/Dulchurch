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
										<h2>Waumini</h2>
										<p>Waumini wote wa parokia</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal">Sajili Muumini</button>
                                </div>
                                <div class="modal fade" id="addModal" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Ingiza Taarifa za Muumini</h2>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-support"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="fname" value="" required placeholder="Jina Kamili">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-mail"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="email" value="" required placeholder="Barua Pepe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-phone"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" data-mask="(999) 999-9999" name="main_contact" value="" required class="form-control" placeholder="Namba ya Simu">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int nk-datapk-ctm form-elet-mg" id="data_3">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <div class="nk-int-st input-group date nk-int-st">
                                                                      <span class="input-group-addon"></span>
                                                                     <input type="text" class="form-control" name="main_contact" value="" required placeholder="Tarehe ya Kuzaliwa">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <label>Male<input type="radio" class="form-control" name="gender" value="Male" placeholder=""></label>&nbsp &nbsp &nbsp
                                                                    <label>Female <input type="radio" class="form-control" name="gender" value="Female" placeholder=""></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-support"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="marital_status" required>
                                                                            <option selected disabled>Hali ya Ndoa</option>
                                                                            <option value="Hajaoa/Kuolewa">Hajaoa/Kuolewa</option>
                                                                            <option value="Kaoa/Kaolewa">Kaoa/Kaolewa</option>
                                                                            <option value="Mjane">Mjane</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="seniority">
                                                                            <option selected disabled>Nafasi ya Familia</option>
                                                                            <option value="Baba">Baba</option>
                                                                            <option value="Mama">Mama</option>
                                                                            <option value="Mtoto">Mtoto</option>
                                                                            <option value="Wengine">Wengine</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-phone"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" data-mask="(999) 999-9999" class="form-control" name="alternative_number" placeholder="Namba ya Dharura">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-group"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="jumuiya">
                                                                            <option selected disabled>Jumuiya</option>
                                                                            <option value="">Mt. Baltazari</option>
                                                                            <option value="">Mt. Yohane</option>
                                                                            <option value="">Mt. Paulo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-user-plus"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="role">
                                                                            <option selected disabled>Nafasi/Cheo</option>
                                                                            <option value="Muumini">Muumini</option>
                                                                            <option value="">M/kiti</option>
                                                                            <option value="">M/kiti Msaidizi</option>
                                                                            <option value="">Katibu</option>
                                                                            <option value="">Katibu Msaidizi</option>
                                                                            <option value="">M/hazina</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>                                                      
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="" data-dismiss="modal">Sitisha</a>
                                                <button type="submit" class="btn btn-default" name="submit" data-dismiss="modal">Hifadhi taarifa</button>
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
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Taarifa za Waumini</h2>
                       </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Jina</th>
                                        <th>Jumuiya</th>
                                        <th>Jinsia</th>
                                        <th>Umri</th>
                                        <th>Hali ya Ndoa</th>
                                        <th>Nafasi</th>
                                        <th>Mawasiliano</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <td class="td-info" data-toggle="modal" data-target="#viewModal">Agnes Mashuma</td>
                                        <td>Mt. Baltazari</td>
                                        <td>Ke</td>
                                        <td>61</td>
                                        <td>Kaolewa</td>
                                        <td>M/Kiti Jumuiya</td>
                                        <td>0756 789012</td>
                                        <td>
                                            <span data-toggle="modal" data-target="#editModal"><button data-toggle="tooltip" data-placement="left" title="Badili Taarifa" class="btn"><i class="fa fa-pencil"></i></button></span>
                                            <span data-toggle="modal" data-target="#deleteModal"><button data-toggle="tooltip" data-placement="left" title="Futa Taarifa" class="btn"><i class="fa fa-trash-o"></i></button></span>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="td-info" data-toggle="modal" data-target="#viewModal">Salva Mayono</td>
                                        <td>Mt. Gasper</td>
                                        <td>Me</td>
                                        <td>23</td>
                                        <td>Hajaoa</td>
                                        <td>Muumini</td>
                                        <td>0712 789012</td>
                                        <td>
                                        <span data-toggle="modal" data-target="#editModal"><button data-toggle="tooltip" data-placement="left" title="Badili Taarifa" class="btn"><i class="fa fa-pencil"></i></button></span>
                                        <span data-toggle="modal" data-target="#deleteModal"><button data-toggle="tooltip" data-placement="left" title="Futa Taarifa" class="btn"><i class="fa fa-trash-o"></i></button></span>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td class="td-info" data-toggle="modal" data-target="#viewModal">Moses Mushi</td>
                                        <td>Mt. Joseph</td>
                                        <td>Me</td>
                                        <td>46</td>
                                        <td>Kaoa</td>
                                        <td>M/kiti Kigango</td>
                                        <td>0683 784012</td>
                                        <td>
                                            <span data-toggle="modal" data-target="#editModal"><button data-toggle="tooltip" data-placement="left" title="Badili Taarifa" class="btn"><i class="fa fa-pencil"></i></button></span>
                                            <span data-toggle="modal" data-target="#deleteModal"><button data-toggle="tooltip" data-placement="left" title="Futa Taarifa" class="btn"><i class="fa fa-trash-o"></i></button></span>
                                       </td>
                                    </tr>
                                    <tr>
                                        <td class="td-info" data-toggle="modal" data-target="#viewModal">Cecilia Karuna</td>
                                        <td>Mt. Maria Magdalena</td>
                                        <td>Ke</td>
                                        <td>32</td>
                                        <td>Kaolewa</td>
                                        <td>M/hazina Jumuiya</td>
                                        <td>0659 439201</td>
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
    <div class="modal fade" id="viewModal" role="dialog">
                                    <div class="modal-dialog modal-large">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Taarifa za Muumini</h2>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Jina: <strong>Agnes Mashuma</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Barua Pepe: <strong>Agnesm@dul.com</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Namba ya simu: <strong>0765 234420</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int nk-datapk-ctm form-elet-mg" id="data_3">
                                                            <div class="nk-int-st">
                                                                    <p>Tarehe ya Kuzaliwa: <strong>03/12/1987</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Jinsia: <strong>Ke</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Jumuiya: <strong>Mt. Baltazari</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Hali ya Ndoa: <strong>kaolewa</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Nafasi katika familia: <strong>Mama</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Namba ya Dharura: <strong>0634295231</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Vyama vya Kitume: <strong>WAWATA</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Nafasi/Cheo: <strong>M/kiti </strong></p>
                                                                </div>
                                                            </div>
                                                        </div>                                                      
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <p>Ripoti ya Matoleo: <strong><a href="">Fungua</a></strong></p>
                                                                </div>
                                                            </div>
                                                        </div>                                                      
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="" data-dismiss="modal">Funga</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    <div class="modal fade" id="editModal" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Badilisha Taarifa za Muumini</h2>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-support"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="fname" value="" required placeholder="Jina Kamili">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-mail"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" name="email" value="" required placeholder="Barua Pepe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-phone"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" data-mask="(999) 999-9999" name="main_contact" value="" required class="form-control" placeholder="Namba ya Simu">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int nk-datapk-ctm form-elet-mg" id="data_3">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <div class="nk-int-st input-group date nk-int-st">
                                                                      <span class="input-group-addon"></span>
                                                                     <input type="text" class="form-control" name="main_contact" value="" required placeholder="Tarehe ya Kuzaliwa">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <label>Male<input type="radio" class="form-control" name="gender" value="Male" placeholder=""></label>&nbsp &nbsp &nbsp
                                                                    <label>Female <input type="radio" class="form-control" name="gender" value="Female" placeholder=""></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-support"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="marital_status" required>
                                                                            <option selected disabled>Hali ya Ndoa</option>
                                                                            <option value="Hajaoa/Kuolewa">Hajaoa/Kuolewa</option>
                                                                            <option value="Kaoa/Kaolewa">Kaoa/Kaolewa</option>
                                                                            <option value="Mjane">Mjane</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="seniority">
                                                                            <option selected disabled>Nafasi ya Familia</option>
                                                                            <option value="Baba">Baba</option>
                                                                            <option value="Mama">Mama</option>
                                                                            <option value="Mtoto">Mtoto</option>
                                                                            <option value="Wengine">Wengine</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-phone"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" data-mask="(999) 999-9999" class="form-control" name="alternative_number" placeholder="Namba ya Dharura">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-group"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="jumuiya">
                                                                            <option selected disabled>Jumuiya</option>
                                                                            <option value="">Mt. Baltazari</option>
                                                                            <option value="">Mt. Yohane</option>
                                                                            <option value="">Mt. Paulo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-user-plus"></i>
                                                                </div>
                                                                <div class="nk-int-st bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="role">
                                                                            <option selected disabled>Nafasi/Cheo</option>
                                                                            <option value="Muumini">Muumini</option>
                                                                            <option value="">M/kiti</option>
                                                                            <option value="">M/kiti Msaidizi</option>
                                                                            <option value="">Katibu</option>
                                                                            <option value="">Katibu Msaidizi</option>
                                                                            <option value="">M/hazina</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>                                                      
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="" data-dismiss="modal">Sitisha</a>
                                                <button type="submit" class="btn btn-default" name="submit" data-dismiss="modal">Badili</button>
                                            </div>
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
                                                <h2 class="alert alert-danger">Unakaribia kufuta taarifa za muumini!</h2>
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