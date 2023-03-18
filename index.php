<?php include 'crud.php'?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>Temorubun</title>
    
        <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    
        <link rel="stylesheet" href="vendors/jvectormap/jquery-jvectormap.css">
    
        <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    
        <link rel="stylesheet" href="vendors/owl-carousel-2/owl.carousel.min.css">
    
        <link rel="stylesheet" href="vendors/owl-carousel-2/owl.theme.default.min.css">
    
        <link rel="stylesheet" href="css/style.css">
    
        <link rel="shortcut icon" href="img/Logo1.png" />

    </head>

    <body>

        <div class="container-scroller">

            <nav class="sidebar sidebar-offcanvas" id="sidebar">

                <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

                    <a class="sidebar-brand brand-logo" href="../../"><img src="img/Logo2.png" alt="logo" /></a>

                    <a class="sidebar-brand brand-logo-mini" href="../../"><img src="img/Logo.png" alt="logo" /></a>

                </div>

                <ul class="nav">
          
                    <li class="nav-item profile">
            
                        <div class="profile-desc">
              
                            <div class="profile-pic">
                
                                <div class="count-indicator">
                  
                                    <img class="img-xs rounded-circle " src="../../index/dashboard/img/Agung.jpeg" alt="">
                  
                                    <span class="count bg-success"></span>
                
                                </div>
                    
                                <div class="profile-name">
                  
                                    <h5 class="mb-0 font-weight-normal">Agung Temorubun</h5>
                  
                                    <span>PRAKTIKUM PEMOGRAMAN</span>
                
                                </div>
                    
                            </div>
              
                            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              
                            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                
                                <a href="https://wa.me/085230047347" class="dropdown-item preview-item">
                  
                                    <div class="preview-thumbnail">
                    
                                        <div class="preview-icon bg-dark rounded-circle">
                      
                                            <i class="mdi mdi-whatsapp text-primary"></i>
                    
                                        </div>
                  
                                    </div>
                  
                                    <div class="preview-item-content">
                    
                                        <p class="preview-subject ellipsis mb-1 text-small">WhatsApp Me</p>
                            
                                    </div>
                
                                </a>
                
                                <div class="dropdown-divider"></div>
                
                                <a href="https://www.instagram.com/p/CU1C1uyJ7sl/?utm_source=ig_web_copy_link" class="dropdown-item preview-item">
                  
                                    <div class="preview-thumbnail">
                        
                                        <div class="preview-icon bg-dark rounded-circle">
                          
                                            <i class="mdi mdi-instagram  text-info"></i>
                        
                                        </div>
                      
                                    </div>
                      
                                    <div class="preview-item-content">
                        
                                        <p class="preview-subject ellipsis mb-1 text-small">Instagram Me</p>
                      
                                    </div>
                
                                </a>
                
                                <div class="dropdown-divider"></div>
                
                                <a href="mailto:agunghenditemorubun@gmail.com" class="dropdown-item preview-item">
                  
                                    <div class="preview-thumbnail">
                    
                                        <div class="preview-icon bg-dark rounded-circle">
                      
                                            <i class="mdi mdi-email text-success"></i>
                    
                                        </div>
                  
                                    </div>
                  
                                    <div class="preview-item-content">
                    
                                        <p class="preview-subject ellipsis mb-1 text-small">Email Me</p>
                  
                                    </div>
                
                                </a>
   
                            </div>
   
                        </div>
   
                    </li>
   
                    <li class="nav-item nav-category">
           
                        <span class="nav-link">Navigation</span>
           
                    </li>
   
                    <li class="nav-item menu-items">
               
                        <a class="nav-link" href="../../">
               
                            <span class="menu-icon">
               
                                <i class="mdi mdi-speedometer"></i>
               
                            </span>
               
                            <span class="menu-title">Dashboard</span>
               
                        </a>
               
                    </li>
   
                    <li class="nav-item menu-items">
               
                        <a class="nav-link" data-toggle="collapse" href="#kuliah" aria-expanded="false" aria-controls="ui-basic">
               
                            <span class="menu-icon"><i class="mdi mdi-laptop"></i></span>
               
                            <span class="menu-title">Kuliah</span>
               
                            <i class="menu-arrow"></i>
               
                        </a>
               
                        <div class="collapse" id="kuliah">
               
                            <ul class="nav flex-column sub-menu">
               
                                <li class="nav-item"> <a class="nav-link" href="../../index/semester1/">Semester 1</a></li>
               
                                <li class="nav-item"> <a class="nav-link" href="../../index/semester2/">Semester 2</a></li>
               
                                <li class="nav-item"> <a class="nav-link" href="../../index/semester3/">Semester 3</a></li>
               
                            </ul>
               
                        </div>
               
                    </li>
                    
                    <li class="nav-item menu-items">
               
                        <a class="nav-link" data-toggle="collapse" href="#javascript" aria-expanded="false" aria-controls="ui-basic">
               
                            <span class="menu-icon"><i class="mdi mdi-language-javascript"></i></span>
               
                            <span class="menu-title">JavaScript</span>
               
                            <i class="menu-arrow"></i>
               
                        </a>
               
                        <div class="collapse" id="javascript">
               
                            <ul class="nav flex-column sub-menu">
               
                                <li class="nav-item"> <a class="nav-link" href="../../index/javascript1/">Faktorial & Deret</a></li>
              
                                <li class="nav-item"> <a class="nav-link" href="../../index/javascript2/">Saldo Akhir</a></li>
                                
                                <li class="nav-item"> <a class="nav-link" href="../../index/javascript3/">Persamaan</a></li>
               
                            </ul>
               
                        </div>
               
                    </li>
                    
                    <li class="nav-item menu-items">
               
                        <a class="nav-link" data-toggle="collapse" href="#php" aria-expanded="false" aria-controls="ui-basic">
               
                            <span class="menu-icon"><i class="mdi mdi mdi-evernote"></i></span>
               
                            <span class="menu-title">PHP</span>
               
                            <i class="menu-arrow"></i>
               
                        </a>
               
                        <div class="collapse" id="php">
               
                            <ul class="nav flex-column sub-menu">
               
                                <li class="nav-item"> <a class="nav-link" href="../../index/php1/">Tugas PHP 1</a></li>
               
                                <li class="nav-item"> <a class="nav-link" href="../../index/php2/">Tugas PHP 2</a></li>
               
                                <li class="nav-item"> <a class="nav-link" href="../../index/php3/">Tugas PHP 3</a></li>
               
                            </ul>
               
                        </div>
               
                    </li>

                    <li class="nav-item menu-items">
            
                        <a class="nav-link" href="https://github.com/temorubun">
            
                            <span class="menu-icon">
            
                                <i class="mdi mdi-github-circle"></i>
            
                            </span>
            
                            <span class="menu-title">Github</span>
            
                        </a>
            
                    </li>

                    <li class="nav-item menu-items">
            
                        <a class="nav-link" href="http://syawal.web.id/login">
            
                            <span class="menu-icon">
                
                                <i class="mdi mdi-laptop-chromebook"></i>
            
                            </span>
            
                            <span class="menu-title">Syawal.web.id</span>
            
                        </a>
            
                    </li>

                    <li class="nav-item menu-items">
            
                        <a class="nav-link" href="http://siakad.pat.ac.id/">
            
                            <span class="menu-icon">
            
                                <i class="mdi mdi-laptop-windows"></i>
            
                            </span>
            
                            <span class="menu-title">Siakad.pat.ac.id</span>
                          
                        </a>
                        
                    </li>
        
                </ul>

            </nav>

            <div class="container-fluid page-body-wrapper">

                <nav class="navbar p-0 fixed-top d-flex flex-row">

                    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">

                        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">

                            <span class="mdi mdi-menu"></span>

                        </button>

                        <ul class="navbar-nav w-100">

                            <li class="nav-item w-100">

                                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                
                                    <input type="text" class="form-control" placeholder="Search">
                
                                </form>

                            </li>

                        </ul>

                        <ul class="navbar-nav navbar-nav-right">

                            <li class="nav-item dropdown d-none d-lg-block">

                                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">Register</a>

                            </li>

                        </ul>

                        <ul class="navbar-nav navbar-nav-right">

                            <li class="nav-item dropdown d-none d-lg-block">

                                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">Login</a>

                            </li>

                        </ul>

                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">

                            <span class="mdi mdi-format-line-spacing"></span>

                        </button>

                    </div>

                </nav>

                <div class="main-panel">

                    <div class="content-wrapper">
            
                        <div class="page-header">
              
                            <h3 class="page-title"> PHP - CRUD  </h3>
                
                            <nav aria-label="breadcrumb">
                        
                                <ol class="breadcrumb">
                    
                                    <li class="breadcrumb-item"><a href="https://github.com/temorubun/Buat-Switch-Statement-Dengan-PHP.git">https://github.com/temorubun/Buat-Switch-Statement-Dengan-PHP-.git</a></li>
                    
                                </ol>
              
                            </nav>
            
                        </div>
            

                        <div class="row">
                    
                            <div class="col-12 grid-margin">
                    
                                <div class="card">
                    
                                    <div class="card-body">
                    
                                        <h4 class="card-title">Data Mahasiswa</h4>
                                        
                                        <div class="table-responsive">
                    
                                            <table class="table">
                    
                                                <thead>
                    
                                                    <tr>
                    
                                                        <th></th>
                                                        
                                                        <th class="text-center"> Nama </th>
                    
                                                        <th class="text-center"> Nim </th>
                    
                                                        <th class="text-center"> Prodi </th>
                    
                                                        <th class="text-center"> Tombol </th>
                    
                                                    </tr>
                    
                                                </thead>
                    
                                                <tbody>
                                                    
                                                    <?php foreach($ambil as $data): ?>
                                                    
                                                        <tr data-bs-toggle="modal" data-bs-target="#3829812956<?= $data['id'] ?>735824">
                        
                                                            <td>
                        
                                                                <img src="<?= $data['img'] ?>" alt="image" />
                        
                                                            </td>
                                                            
                                                            <td>
                        
                                                                <span class="pl-2"><?= $data['Nama'] ?></span>
                        
                                                            </td>
                        
                                                            <td class="text-center"> 
                                                            
                                                                <?= $data['Nim'] ?> 
                                                                
                                                            </td>
                        
                                                            <td> 
                                                            
                                                                <?= $data['Prodi'] ?> 
                                                                
                                                            </td>
                                                            
                                                            <td class="text-center">
                                                                
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#3829712986<?= $data['id'] ?>735824">
                                                                
                                                                    Edit
                                                            
                                                                </button>
                                                            
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#3829712986<?= $data['id'] ?>7135824">
                                                            
                                                                    Hapus
                                                            
                                                                </button>
                                                            
                                                            </td>
                        
                                                        </tr>
                                                        
                                                    <?php endforeach; ?>
                    
                                                </tbody>
                    
                                            </table>
                                            
                                            <div class="m-1">
                                  
                                                <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#3829812956735824">
                                        
                                                    Tambah Data Mahasiswa
                                    
                                                </button>
                                
                                            </div>
                                            
                                            <div class="modal fade" id="3829812956735824" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                              
                                                <div class="modal-dialog modal-dialog-centered">
                                                
                                                    <div class="modal-content">
                                                    
                                                        <div class="card">
                                                        
                                                            <div class=" modal-header">
                                                            
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Register</h1>
                                                        
                                                            </div>
                                                        
                                                        </div>
                                                    
                                                    <div class="card">
                                                        
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            
                                                            <div class="modal-body">
                                                                
                                                                <div class="form-group">
                                                    
                                                                    <label for="nama">Nama</label>
                                                    
                                                                    <input type="text" name="nama" id="nama" class="form-control p_input" style="color: white;" required>
                                                
                                                                </div>
                                                
                                                                <div class="form-group">
                                                    
                                                                    <label for="nim">Nim</label>
                                                    
                                                                    <input type="number" name="nim" id="nim" class="form-control p_input" style="color: white;" required>
                                                    
                                                                </div>
                                                
                                                                <div class="form-group">
                                                    
                                                                    <label for="prodi">Prodi</label>
                                                    
                                                                    <select id="prodi" name="prodi" class="form-control p_input" style="color: white;" required>
                                                
                                                                        <option value=""></option>
                                                
                                                                        <option value="Teknologi Rekayasa Internet">Teknologi Rekayasa Internet</option>
                                                
                                                                        <option value="Teknik Listrik">Teknik Listrik</option>
                                                
                                                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                                
                                                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                                
                                                                        <option value="Teknik Tambang">Teknik Tambang</option>
                                                
                                                                    </select>
                                                
                                                                </div>
                                                
                                                                <div class="form-group">
                                                    
                                                                    <label for="file">Select image:</label>
                                                    
                                                                    <input type="file" name="file" id="file" class="form-control p_input" required>
                                                
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="card">
                                                              
                                                                <div class="modal-footer">
                                                                
                                                                    <input type="submit" name="submit" value="Tambah Data" class="btn btn-primary">
                                                                
                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                                                                
                                                                </div>
                                                            
                                                            </div>
                                            
                                                        </form>
                                            
                                                    </div>

                                                </div>
                                                
                                              </div>
                                              
                                            </div>
                                            
                                            <?php foreach($ambil as $data1): ?>
                                            
                                                <div class="modal fade" id="3829812956<?= $data1['id'] ?>735824"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                  
                                                    <div class="modal-dialog">
                                                    
                                                        <div class="card">
                                                            
                                                            <div class="text-center">
                                                                
                                                                <div class="text-center" >
                                                                
                                                                    <br><img src="<?= $data1['img'] ?>"style="width: 200px;" class="rounded" alt="..."><br><br><br>
                                                                
                                                                    <h4><?= $data1['Nama'] ?></h4><br>
                                                                    
                                                                    <h4><?= $data1['Nim'] ?></h4><br>
                                                                    
                                                                    <h4><?= $data1['Prodi'] ?></h4><br>
                                                                    
                                                                </div>
                            
                                                            </div>
                                              
                                                        </div>
    
                                                    </div>
                                                    
                                                 </div>
                                                  
                                            <?php endforeach; ?>
                                            
                                            <?php foreach($ambil as $data2): ?>
                                            
                                                <div class="modal fade" id="3829712986<?= $data2['id'] ?>735824" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                  
                                                    <div class="modal-dialog">
                                                    
                                                        <div class="modal-content">
                                                        
                                                            <div class="card">
                                                            
                                                                <div class=" modal-header">
                                                                
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                                                            
                                                                </div>
                                                            
                                                            </div>
                                                        
                                                        <div class="card">
                                                            
                                                            <div class="text-center">
                                                                
                                                                <div class="text-center" >
                                                                
                                                                    <br><img src="<?= $data2['img'] ?>"style="width: 200px;" class="rounded" alt="...">
                                                                
                                                                </div>
                            
                                                            </div>
                                                            
                                                            <form action="" method="post" enctype="multipart/form-data">
                                                                
                                                                <div class="modal-body">
                                                                    
                                                                    <div class="form-group">
                                                        
                                                                        <input type="text" name="nama" value="<?= $data2['Nama'] ?>" class="form-control p_input" style="color: white;" required>
                                                    
                                                                    </div>
                                                    
                                                                    <div class="form-group">
                                                        
                                                                        <input type="number" name="nim" value="<?= $data2['Nim'] ?>" class="form-control p_input" style="color: white;" required>
                                                        
                                                                    </div>
                                                    
                                                                    <div class="form-group">
                                                        
                                                                        <select name="prodi" class="form-control p_input" style="color: white;" required>
                                                    
                                                                            <option value="<?= $data2['Prodi'] ?>"><?= $data2['Prodi'] ?></option>
                                                    
                                                                            <option value="Teknologi Rekayasa Internet">Teknologi Rekayasa Internet</option>
                                                    
                                                                            <option value="Teknik Listrik">Teknik Listrik</option>
                                                    
                                                                            <option value="Teknik Mesin">Teknik Mesin</option>
                                                    
                                                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                                    
                                                                            <option value="Teknik Tambang">Teknik Tambang</option>
                                                    
                                                                        </select>
                                                    
                                                                    </div>
                                                    
                                                                    <div class="form-group">
                                                                        
                                                                        <input type="number" value="<?= $data2['id'] ?>" name="MasukanNim" placeholder="Masukan Nim" class="form-control" hidden>
                                                        
                                                                        <input type="file" name="file" class="form-control p_input" required>
                                                    
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                <div class="card">
                                                                  
                                                                    <div class="modal-footer">
                                                                    
                                                                        <input type="submit"  name="edit" value="Edit Data" class="btn btn-primary">
                                                                    
                                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                                                                    
                                                                    </div>
                                                                
                                                                </div>
                                                
                                                            </form>
                                                
                                                        </div>
    
                                                    </div>
                                                    
                                                  </div>
                                                  
                                                </div>
                                            
                                            <?php endforeach; ?>
                                            
                                            <?php foreach($ambil as $data3): ?>
                                                
                                                <div class="modal fade" id="3829712986<?= $data3['id'] ?>7135824" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                  
                                                    <div class="modal-dialog modal-dialog-centered">
                                                    
                                                        <div class="modal-content">
                                                        
                                                            <div class="card">
                                                            
                                                                <div class=" modal-header">
                                                                
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                                                            
                                                                </div>
                                                            
                                                            </div>
                                                        
                                                        <div class="card">
                                                            
                                                            <div class="modal-body">
                                        
                                                                <div class="row g-0">
                                                                    
                                                                    <div class="col-md-4">
                                                                    
                                                                        <img src="<?= $data3['img'] ?>" class="img-fluid rounded-start" alt="...">
                                                                    
                                                                    </div>
                                                                    
                                                                    <div class="col-md-8">
                                                                    
                                                                        <div class="card-body">
                                
                                                                            <h5 class="card-title"><?= $data3['Nama'] ?></h5>
                                                                            
                                                                            <p class="card-text"><?= $data3['Nim'] ?></p>
                                                                            
                                                                            <p class="card-text"><?= $data3['Prodi'] ?></p>
                                                                        
                                                                        </div>
                                
                                                                    </div>
                                
                                                                </div>
                        
                                                            </div>
                                                        
                                                        </div>
                                                        
                                                        <div class="card">
                                                                  
                                                            <div class="modal-footer">
                                                            
                                                                <a href="index.php?id=<?= $data3['id'] ?>" class="m-1 btn btn-primary">Hapus</a>
                        
                                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                                                            
                                                            </div>
                                                        
                                                        </div>
    
                                                    </div>
                                                    
                                                  </div>
                                                  
                                                </div>
                                            
                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                </div>
                    
                            </div>
                    
                        </div>
                        
                    </div>

                    <footer class="footer">
                    
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Agung Temorubun 2023</span>
                    
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">PRAKTIKUM KONSEP PEMOGRAMAN</span>
                    
                        </div>
                    
                    </footer>

                </div>

            </div>

        </div>
    
        <script src="vendors/js/vendor.bundle.base.js"></script>
        
        <script src="vendors/chart.js/Chart.min.js"></script>
        
        <script src="vendors/progressbar.js/progressbar.min.js"></script>
        
        <script src="vendors/jvectormap/jquery-jvectormap.min.js"></script>
        
        <script src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        
        <script src="vendors/owl-carousel-2/owl.carousel.min.js"></script>
        
        <script src="js/off-canvas.js"></script>
        
        <script src="js/hoverable-collapse.js"></script>
        
        <script src="js/misc.js"></script>
        
        <script src="js/js/bootstrap.bundle.js"></script>
        
        <script src="js/settings.js"></script>
        
        <script src="js/todolist.js"></script>
        
        <script src="js/faktorial.js"></script>
        
        <script src="js/dashboard.js"></script>
        
    </body>

</html>