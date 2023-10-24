<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/content-8.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Equipment List</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Equipment List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- <div class="container-xxl py-5" style="border-radius: 30px;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-2">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Dry Rental</h5>
                            <p>Equipment rental service without operator for more flexible usage and needs</p>
                        </div>
                    </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 bg-white wow fadeInUp" data-wow-delay="0.5s"">
                    <div class="d-flex py-5 px-4 ">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0" ></i>
                        <div class="ps-4">
                            <h5 class="mb-3 text-dark">All in one rental solution</h5>
                            <p>We provide you comprehensive rental service from equipment mobilization, on-site-ready mechanic for service, and digital data recording for equipment monitoring</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Wet Rental</h5>
                            <p>Equipment rental service including our certified and highly professional operator</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div> -->

    <!-- table equipment -->
    <div class="container">
        <table class="table table-responsive text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">No</th>    
                    <th scope="col">Equipment</th>
                    <th scope="col">Type</th>
                    <th scope="col">Specification</th>
                </tr>
            </thead>
            <tbody>
                <tr>                    
                    <th scope="row">1</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Crawler Crane</a></td>
                    <td>Crawler Crane</td>
                    <td>
                        <a href="pdf/crawlercrane.pdf" class="shadow btn btn-primary" style="border-radius: 20px;" download><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample1">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/CRAWLER CRANE/KOBELCO 55T 7055-3F.jpg" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>55 Ton</td>
                                            <td>7055-3F</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>80 Ton</td>
                                            <td>CKS800</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>90 Ton</td>
                                            <td>CKS900</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>135 Ton</td>
                                            <td>CKS1350</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>180 Ton</td>
                                            <td>CKE1800-1F</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>250 Ton</td>
                                            <td>CKS2500</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>250 Ton</td>
                                            <td>CKE2500-2</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>250 Ton</td>
                                            <td>7250-2F</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">2</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">All Terrain Crane</a></td>
                    <td>All Terrain Crane</td>
                    <td>
                        <a href="pdf/067f6-all-traine-craine.pdf" class="shadow btn btn-primary" style="border-radius: 20px;" download><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample2">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/All Terrain Crane/TADANO AC 160T ATF160G-5_02.png" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>60 Ton</td>
                                            <td>ATF60-3</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>160 Ton</td>
                                            <td>ATF160G-5</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Liebherr</th>                 
                                            <td>200 Ton</td>
                                            <td>LTM1200.5.1</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>220 Ton</td>
                                            <td>ATF220G-5</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">3</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Rough Terrain Crane</a></td>
                    <td>Rough Terrain Crane</td>
                    <td>
                        <a href="pdf/1e49c-gr250n02-merged.pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample3">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/Rough Terrain Crane/TADANO 25T GR-250N.png" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>25 Ton</td>
                                            <td>GR-250N</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kato</th>                 
                                            <td>25 Ton</td>
                                            <td>KR-25H</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>25 Ton</td>
                                            <td>RK250-5</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>30 Ton</td>
                                            <td>GR-300EX</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>50 Ton</td>
                                            <td>GR-500EXL</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>60 Ton</td>
                                            <td>GR-600EX</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>80 Ton</td>
                                            <td>GR-800EX</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">4</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">Boomlift</a></td>
                    <td>Boomlift</td>
                    <td>
                        <a href="pdf/16f29-bl26m_4401_s-85xc-merged.pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample4">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/BOOM LIFT/GENIE 18M-227 KG Z62-40.png" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Genie</th>                 
                                            <td>18 m</td>
                                            <td>Z62/40</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Genie</th>                 
                                            <td>20 m</td>
                                            <td>S-65</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Aichi</th>                 
                                            <td>21 m</td>
                                            <td>SP21-A</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Genie</th>                 
                                            <td>28 m</td>
                                            <td>Z80/60</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Aichi</th>                 
                                            <td>25 m</td>
                                            <td>SP25A</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Genie</th>                 
                                            <td>26 m</td>
                                            <td>S-85XC</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Genie</th>                 
                                            <td>26 m</td>
                                            <td>S-85</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Aichi</th>                 
                                            <td>30 m</td>
                                            <td>SP300</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Genie</th>                 
                                            <td>38 m</td>
                                            <td>SX125XC</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">5</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5">Vibro Roller</a></td>
                    <td>Vibro Roller</td>
                    <td>
                        <a href="pdf/5809a-brosur_sv526.pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample5">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/VIBRO ROLLER SAKAI 10T SV526D.png" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Sakai</th>                 
                                            <td>10 Ton</td>
                                            <td>SV526D</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">6</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample6">Bulldozzer</a></td>
                    <td>Bulldozzer</td>
                    <td>
                        <a href="pdf/81109-d6r2-xl.pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample6">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/BULLDOZER CAT 15T D6R2 XL.jpg" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">CAT</th>                 
                                            <td>15 Ton</td>
                                            <td>D6R2 XL	</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">7</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample7" role="button" aria-expanded="false" aria-controls="multiCollapseExample7">Motor Grader</a></td>
                    <td>Motor Grader</td>
                    <td>
                        <a href="pdf/40cd8-120k.pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample7">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/MOTOR GRADER CAT 3M 120.jpeg" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">CAT</th>                 
                                            <td>3 m</td>
                                            <td>120K</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">8</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample8" role="button" aria-expanded="false" aria-controls="multiCollapseExample8">Telehandler</a></td>
                    <td>Telehandler</td>
                    <td>
                        <a href="pdf/d4979-jcb-loadall-construction_-attachment-(1).pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample8">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/TELEHANDLER JCB 4T 17M 540-170.png" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">JCB</th>                 
                                            <td>4t/7m</td>
                                            <td>TH540-170</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">JCB</th>                 
                                            <td>4t/17m</td>
                                            <td>TH541-70</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">JCB</th>                 
                                            <td>6t/8m</td>
                                            <td>TH560-80</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">9</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample9" role="button" aria-expanded="false" aria-controls="multiCollapseExample9">Excavator</a></td>
                    <td>Excavator</td>
                    <td>
                        <a href="pdf/Excavator Cat.pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample9">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/EXCAVATOR/KOMATSU 20T PC200-8MO.jpeg" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>3.5 Ton</td>
                                            <td>SK35SR</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Kobelco</th>                 
                                            <td>20 Ton</td>
                                            <td>SK200</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Komatsu</th>                 
                                            <td>20 Ton</td>
                                            <td>PC200</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">CAT</th>                 
                                            <td>20 Ton</td>
                                            <td>320D2</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">10</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample10" role="button" aria-expanded="false" aria-controls="multiCollapseExample10">Truck Mounted Crane</a></td>
                    <td>Truck Mounted Crane</td>
                    <td>
                        <a href="pdf/1b6d2-tm-zr865rs-merged.pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample10">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/TMC TADANO 15T 8M 6x4 TM-ZT1505HRS.png" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>5 t / 5.5 m (4x2)</td>
                                            <td>TM-ZT505H/FM517HL</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>5 t / 8 m (6x4)</td>
                                            <td>TM-ZT503H/FVZ34T</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>5 t / 8 m (6x4)</td>
                                            <td>TM-ZE553HRS-2/FVZ34T</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>8 t / 8 m (6x4)</td>
                                            <td>TM-ZT825H/FM260JW (FM8JW1A-EGJ1)</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>8 t / 8 m (6x4)	</td>
                                            <td>TM-ZR865RS/FVZ34T</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>8 t / 8 m (6x4)</td>
                                            <td>TM-ZR865RS/FVZ34U</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>10 t / 8 m (6x4)</td>
                                            <td>TM-ZT1005H/FVZ34T</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Tadano</th>                 
                                            <td>15 t / 8 m (6x4)</td>
                                            <td>TM-ZT1505HRS/CWE28064R</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">11</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample11" role="button" aria-expanded="false" aria-controls="multiCollapseExample11">Scissor Lift</a></td>
                    <td>Scissor Lift</td>
                    <td>
                        <a href="pdf/684bc-scissorliftsfamily (1).pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample11">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/SCISSOR LIFT HAULOTTE 12M COMPACT 14.jpeg" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Genie</th>                 
                                            <td>9.8 m</td>
                                            <td>GS3246</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Houlotte</th>                 
                                            <td>9.8 m</td>
                                            <td>Compact 12</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Compact 14</th>                 
                                            <td>12 m</td>
                                            <td>Compact 14</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">CAT</th>                 
                                            <td>20 Ton</td>
                                            <td>320D2</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>                    
                    <th scope="row">12</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample12" role="button" aria-expanded="false" aria-controls="multiCollapseExample12">Forklift</a></td>
                    <td>Forklift</td>
                    <td>
                        <a href="pdf/0fa2d-forklift (1).pdf" target="_blank" class="shadow btn btn-primary" style="border-radius: 20px;"><i class="fa fa-download"></i></a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample12">
                    <td colspan="4" class="active">
                        <div class="row g-2 text-center">
                            <div class="col-lg-6 my-5 col-sm-8">
                                <div class="position-relative align-items-center ">
                                    <img src="img/Complete Equipment/FORKLIFT MITSUBISHI 5T FD50N-2SP30-SPEUD.jpg" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-responsive table-striped">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="row">Brand</th>    
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">TCM</th>                 
                                            <td>5 Ton</td>
                                            <td>FD50T9 VM400 LF122 TJW TJR 2SV</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Mitsubishi</th>                 
                                            <td>5 Ton</td>
                                            <td>FD50NT-3FP37-US/US</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Mitsubishi</th>                 
                                            <td>5 Ton</td>
                                            <td>FD50N-2SP30-SPEUD</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Mitsubishi</th>                 
                                            <td>5 Ton</td>
                                            <td>FD50NT-2SP30-US/US</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Mitsubishi</th>                 
                                            <td>7 Ton</td>
                                            <td>FD70NM-2SP30-UD/US</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Mitsubishi</th>                 
                                            <td>15 Ton</td>
                                            <td>FD150ANM1-2SP40-PD/PS</td>
                                            <td>
                                                <a href="" class="btn btn-primary rounded-pill shadow">Detail</a>
                                            </td>        
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Equipment Start -->
        <!-- <div class="container">
            <img src="" alt="">
            <div class="row g-3">
                <?php foreach ($equipment as $e) : ?>
                    <div class="card-body m-3" style="width: 18rem;">
                        <div class="panel-body bg-white m-2 p-2" style="text-align: center; overflow:hidden; padding:0; height:220px">

                            <img style="" class="card-img-top" src="img/<?= $e['sampul']; ?>" alt="Card image cap">
                        </div>
                        <div class="card-body bg-light text-center" >
                            <h5 class="card-title mb-3"><?= $e['nama_alat']; ?></h5>
                            <p class="card-text mb-1">Brand : <?= $e['brand']; ?></p>
                            <p class="card-text">Capacity : <?= $e['capacity']; ?></p>
                            <a href="/katalog/<?= $e['slug']; ?>" class=" shadow btn btn-primary" style="border-radius: 10px;">Detail</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div> -->

        <!-- <button onclick="myFunction()">Try it</button>

        <div id="myDIV">
        This is a DIV element.
        </div> -->
    


<?= $this->endSection() ?>
