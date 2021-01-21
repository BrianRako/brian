<?php
include('session.php');

// verifie si l'utilisateurs est bien admin pour avoir accees a cette page
if (isset($_SESSION['user_role']) && !empty($_SESSION['user_role']) == 'Administrateur') { ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <title>Utlisateurs</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oxygen:400,700">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/layout.css">
        <script charset="utf-8" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script charset="utf-8" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
        <script charset="utf-8" src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
        <script charset="utf-8" src="js/webapp.js"></script>
    </head>

    <body>
        <!-- Preloader -->
        <?php include('header.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Utilisateurs</h4>
                        <ol class="breadcrumb">
                            <li><a href="https://rakowitsch-brian.go.yj.fr/admin/">Dashboard</a></li>
                            <li class="active">Utilisateurs</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">

                                <table class="datatable" id="table_user">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Mail</th>
                                            <th>Role</th>
                                            <th>Date inscription</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                                <div class="lightbox_bg"></div>

                                <div class="lightbox_container">
                                    <div class="lightbox_close"></div>
                                    <div class="lightbox_content">

                                        <h2>Add company</h2>
                                        <form class="form add" id="form_company" data-id="" novalidate>
                                            <div class="input_container">
                                                <label for="rank">Rank: <span class="required">*</span></label>
                                                <div class="field_container">
                                                    <input type="number" step="1" min="0" class="text" name="rank" id="rank" value="" required>
                                                </div>
                                            </div>
                                            <div class="input_container">
                                                <label for="company_name">Company name: <span class="required">*</span></label>
                                                <div class="field_container">
                                                    <input type="text" class="text" name="company_name" id="company_name" value="" required>
                                                </div>
                                            </div>
                                            <div class="input_container">
                                                <label for="industries">Industries: <span class="required">*</span></label>
                                                <div class="field_container">
                                                    <input type="text" class="text" name="industries" id="industries" value="" required>
                                                </div>
                                            </div>
                                            <div class="input_container">
                                                <label for="revenue">Revenue: <span class="required">*</span></label>
                                                <div class="field_container">
                                                    <input type="number" step="1" min="0" class="text" name="revenue" id="revenue" value="" required>
                                                </div>
                                            </div>
                                            <div class="input_container">
                                                <label for="fiscal_year">Fiscal year: <span class="required">*</span></label>
                                                <div class="field_container">
                                                    <input type="number" min="0" class="text" name="fiscal_year" id="fiscal_year" value="" required>
                                                </div>
                                            </div>
                                            <div class="input_container">
                                                <label for="employees">Employees: <span class="required">*</span></label>
                                                <div class="field_container">
                                                    <input type="number" min="0" class="text" name="employees" id="employees" value="" required>
                                                </div>
                                            </div>
                                            <div class="input_container">
                                                <label for="market_cap">Market cap: <span class="required">*</span></label>
                                                <div class="field_container">
                                                    <input type="number" step="1" min="0" class="text" name="market_cap" id="market_cap" value="" required>
                                                </div>
                                            </div>
                                            <div class="input_container">
                                                <label for="headquarters">Headquarters: <span class="required">*</span></label>
                                                <div class="field_container">
                                                    <input type="text" class="text" name="headquarters" id="headquarters" value="" required>
                                                </div>
                                            </div>
                                            <div class="button_container">
                                                <button type="submit">Add company</button>
                                            </div>
                                        </form>

                                    </div>

                                    <div class="lightbox_bg"></div>



                                    <noscript id="noscript_container">
                                        <div id="noscript" class="error">
                                            <p>JavaScript support is needed to use this page.</p>
                                        </div>
                                    </noscript>

                                    <div id="message_container">
                                        <div id="message" class="success">
                                            <p>This is a success message.</p>
                                        </div>
                                    </div>

                                    <div id="loading_container">
                                        <div id="loading_container2">
                                            <div id="loading_container3">
                                                <div id="loading_container4">
                                                    Loading, please wait...
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <!-- /.container-fluid -->



            </div>
            <?php include('footer.php') ?>






    </body>

    </html>
<?php } else {
    header('location:https://rakowitsch-brian.go.yj.fr/404');
} ?>