<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kedai Sambal Zombie </title>
    <link rel="stylesheet" href="{{ asset('polished/polished.min.css') }}">
    <link rel="stylesheet" href="{{ asset('polished/iconic/css/open-iconic-bootstrap.min.css') }}">

    <style>
        .grid-highlight {
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: #5c6ac4;
            border: 1px solid #202e78;
            color: #fff;
        }

        hr {
            margin: 6rem 0;
        }

        hr+.display-3,
        hr+.display-2+.display-3 {
            margin-bottom: 2rem;
        }

    </style>
    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js') + (document
            .implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1") ? ' svg' : ' no-svg');
    </script>
</head>

<body>

    <nav class="navbar navbar-expand p-0">
        <a class="navbar-brand text-center col-xs-12 col-md-5 col-lg-2 mr-0" href="index.html">Kedai Sambal Zombie</a>
        <button class="btn btn-link d-block d-md-none" data-toggle="collapse" data-target="#sidebar-nav" role="button">
            <span class="oi oi-menu"></span>
        </button>

        <input class="border-dark bg-primary-darkest form-control d-none d-md-block w-50 ml-3 mr-2" type="text"
            placeholder="Search" aria-label="Search">
        <div class="dropdown d-none d-md-block">
            <img class="d-none d-lg-inline rounded-circle ml-1" width="32px" src="assets/azamuddin.jpg" alt="MA" />
            <button class="btn btn-link btn-link-primary dropdown-toggle" id="navbar-dropdown" data-toggle="dropdown">
                Kelompok 4
            </button>
            <div class="dropdown-menu dropdown-menu-right" id="navbar-dropdown">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Setting</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Sign Out</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid h-100 p-0">
        <div style="min-height: 100%" class="flex-row d-flex align-items-stretch m-0">
            <div class="polished-sidebar bg-light col-12 col-md-3 col-lg-2 p-0 collapse d-md-inline" id="sidebar-nav">

                <ul class="polished-sidebar-menu ml-0 pt-4 p-0 d-md-block">
                    <input class="border-dark form-control d-block d-md-none mb-4" type="text" placeholder="Search"
                        aria-label="Search" />
                    <li><a href="home.html"><span class="oi oi-home"></span> Home</a></li>
                    <li><a href="dashboard.html"><span class="oi oi-dashboard"></span> Manage Menu</a></li>
                    <li><a href="charts.html"><span class="oi oi-pie-chart"></span> Manage User</a></li>
                    <li><a href="widgets.html"><span class="oi oi-puzzle-piece"></span></span> Riwayat Transaksi</a>
                    </li>
                    <li><a href="forms.html"><span class="oi oi-browser"></span> Laporan</a></li>

                    <div class="d-block d-md-none">
                        <div class="dropdown-divider"></div>
                        <li><a href="#"> Profile</a></li>
                        <li><a href="#"> Setting</a></li>
                        <li><a href="#"> Sign Out</a></li>
                    </div>
                </ul>

            </div>
            <div class="col-lg-10 col-md-9">

                <div class="row h-100">

                    <div class="col-lg-7 pl-3 pt-2 pb-2 pr-2">
                        <div class="greeting mt-4 pl-4">
                            <h3>
                                Menu
                            </h3>
                            <h4 class="text-muted w-50 fw-normal">
                                Menu Makanan
                            </h4>
                        </div>

                    </div>


                    <div class=" col-lg-5 pt-2 pb-2 bg-white shadow-sm border-left border-white">
                        <div class="row p-4">
                            <span class="text-dark">
                                Checkout
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

</body>

</html>
