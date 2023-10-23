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
        <table class="eq-tbl table table-responsive">
            <thead>
                <tr>
                    <th scope="col">No</th>    
                    <th scope="col">Equipment</th>
                    <th scope="col">Type</th>
                    <th scope="col">PDF</th>
                </tr>
            </thead>
            <tbody>
                <tr class="toggle">                    
                    <th scope="row">1</th>                 
                    <td>Crawler Crane</td>
                    <td>Crane</td>
                    <td>
                        <a href="" class="shadow btn btn-primary" style="border-radius: 20px;">Download</a>
                    </td>        
                </tr>
                <tr class="box-det">
                    <td colspan="4">
                        <div class="row g-2">
                            <div class="col-lg-6 my-5">
                                <div class="position-relative col-lg-8 col-md-5">
                                    <img src="img/bulldozer.png" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5 px-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="">
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
                                                <a href="" class="btn btn-info">Detail</a>
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
                    <th scope="row">2</td>                 
                    <td><a data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Bulldozer</a></td>
                    <td>Crane</td>
                    <td>
                        <a href="" class="shadow btn btn-primary" style="border-radius: 20px;">Download</a>
                    </td>        
                </tr>
                <tr class="collapse multi-collapse" id="multiCollapseExample2">
                    <td colspan="4" class="active">
                        <div class="row g-2">
                            <div class="col-lg-6 my-5">
                                <div class="position-relative col-lg-8 col-md-5">
                                    <img src="img/bulldozer.png" class="img-fluid" alt="">    
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="">
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
                                                <a href="" class="btn btn-info">Detail</a>
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
