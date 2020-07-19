<?php
function linkAssign($curLang, $button){
  if ($curLang === $button){
    return "#page-top";
  } elseif ($button === "es"){
    return "https://pablotorrubiano.xyz/es/";
  } elseif ($button === "en"){
    return "https://pablotorrubiano.xyz/en/";
  }
}
?>


    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Homepage - Pablo J Torrubiano</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Pablo J Torrubiano</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../assets/img/profile.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about"><?=$text[$lang]["index"]["about"]?></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience-i"><?=$text[$lang]["index"]["experience-i"]?></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience-ii"><?=$text[$lang]["index"]["experience-ii"]?></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education"><?=$text[$lang]["index"]["education"]?></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio"><?=$text[$lang]["index"]["portfolio"]?></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests"><?=$text[$lang]["index"]["interests"]?></a></li>
                    <li hidden class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards"><?=$text[$lang]["index"]["awards"]?></a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">

                    <!-- Language Selector-->
                    <div class="dropdown text-right">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?=ucfirst($lang)?>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href=<?=linkAssign($lang,"en")?>>English</a>
                        <a class="dropdown-item" href=<?=linkAssign($lang,"es")?>>Español</a>
                      </div>
                    </div>

                    <h1 class="mb-0">
                        Pablo J
                        <span class="text-primary">Torrubiano</span>
                    </h1>
                    <div class="subheading mb-5">
                        Ciudad de Mendoza · Mendoza · Arg · +54 911 2455-8306 ·
                        <a href=<?="mailto:" . $text[$lang]["contact"]["mail"]?>>
                          <?=$text[$lang]["contact"]["mail"]?></a>
                    </div>
                    <p class="lead mb-5"><?=$text[$lang]["about"]?></p>
                    <div class="social-icons">
                        <a class="social-icon" target="_blank" href="https://www.linkedin.com/in/pablo-javier-torrubiano-7907b395/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" target="_blank" href="https://wa.me/5491124558306"><i class="fab fa-whatsapp"></i></a>
                        <a class="social-icon" target="_blank" href="https://github.com/pablotor"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-I-->
            <section class="resume-section" id="experience-i">
                <div class="resume-section-content">
                    <h2 class="mb-5"><?=$text[$lang]["index"]["experience-i"]?></h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$text[$lang]["experience-i"]["joblist"][2]["title"]?></h3>
                            <div class="subheading mb-3"><?=$text[$lang]["experience-i"]["joblist"][2]["place"]?></div>
                            <p><?=$text[$lang]["experience-i"]["qual"]?>
                              <ul>
                                <?php foreach ($text[$lang]["experience-i"]["joblist"][2]["qual"] as $item): ?>
                                  <li><?=$item?></li>
                                <?php endforeach; ?>
                              </ul>
                            </p>
                            <p><?=$text[$lang]["experience-i"]["achi"]?>
                              <ul>
                                <?php foreach ($text[$lang]["experience-i"]["joblist"][2]["achi"] as $item): ?>
                                  <li><?=$item?></li>
                                <?php endforeach; ?>
                              </ul>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$text[$lang]["experience-i"]["joblist"][2]["date"]?></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$text[$lang]["experience-i"]["joblist"][1]["title"]?></h3>
                            <div class="subheading mb-3"><?=$text[$lang]["experience-i"]["joblist"][1]["place"]?></div>
                            <p><?=$text[$lang]["experience-i"]["qual"]?>
                              <ul>
                                <?php foreach ($text[$lang]["experience-i"]["joblist"][2]["qual"] as $item): ?>
                                  <li><?=$item?></li>
                                <?php endforeach; ?>
                              </ul>
                            </p>
                            <p><?=$text[$lang]["experience-i"]["achi"]?>
                              <ul>
                                <?php foreach ($text[$lang]["experience-i"]["joblist"][2]["achi"] as $item): ?>
                                  <li><?=$item?></li>
                                <?php endforeach; ?>
                              </ul>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$text[$lang]["experience-i"]["joblist"][1]["date"]?></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$text[$lang]["experience-i"]["joblist"][0]["title"]?></h3>
                            <div class="subheading mb-3"><?=$text[$lang]["experience-i"]["joblist"][0]["place"]?></div>
                            <p><?=$text[$lang]["experience-i"]["joblist"][0]["description"]?>
                              <ul>
                                <li><?=$text[$lang]["experience-i"]["joblist"][0]["list"][0]?></li>
                                <li><?=$text[$lang]["experience-i"]["joblist"][0]["list"][1]?></li>
                                <li><?=$text[$lang]["experience-i"]["joblist"][0]["list"][2]?></li>
                              </ul>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$text[$lang]["experience-i"]["joblist"][0]["date"]?></span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-II-->
            <section class="resume-section" id="experience-ii">
                <div class="resume-section-content">
                    <h2 class="mb-3"><?=$text[$lang]["index"]["expericence-ii"]?></h2>
                    <div class="subheading mb-3">
                        <?=$text[$lang]["experience-ii"]["subheading"]?>
                    </div>
                    <div class="row">
                      <div class="col-md-6 p-3 p-md-5 p-sm-5">
                        <img src="../assets/logos/00_Cognizant_g.svg" class="img-fluid mx-auto d-block big-company" alt="Cognizant">
                      </div>
                      <div class="col-md-6 p-3 p-md-5 p-sm-5 mb-3">
                        <img src="../assets/logos/01_FirstData_g.svg" class="img-fluid mx-auto d-block big-company" alt="First Data">
                      </div>
                    </div>

                  <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-3 my-auto">
                      <img src="../assets/logos/02_Bancolombia_g.svg" class="img-fluid mx-auto d-block small-company" alt="Bancolombia">
                    </div>
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-3 my-auto">
                      <img src="../assets/logos/06_BancoDeOccidente_g.svg" class="img-fluid mx-auto d-block small-company" alt="Banco de Occidente">
                    </div>
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-3 my-auto">
                      <img src="../assets/logos/04_GrupoExito_g.svg" class="img-fluid mx-auto d-block small-company" alt="Grupo Éxito">
                    </div>
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-3 my-auto">
                      <img src="../assets/logos/03_BancoDeBogota_g.svg" class="img-fluid mx-auto d-block small-company" alt="Banco De Bogotá">
                    </div>
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-3 my-auto">
                      <img src="../assets/logos/05_BancoPopular_g.svg" class="img-fluid mx-auto d-block small-company" alt="Banco Popular">
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-4 my-auto">
                      <img src="../assets/logos/07_Mastercard_g.svg" class="img-fluid mx-auto d-block small-company" alt="MasterCard">
                    </div>
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-3 my-auto">
                      <img src="../assets/logos/08_Visa_g.svg" class="img-fluid mx-auto d-block small-company" alt="Visa">
                    </div>
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-4 my-auto">
                      <img src="../assets/logos/09_AmericanExpress_g.svg" class="img-fluid mx-auto d-block small-company p-md-3" alt="American Express">
                    </div>
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-3 my-auto">
                      <img src="../assets/logos/10_Credibanco_g.svg" class="img-fluid mx-auto d-block small-company" alt="Credibanco">
                    </div>
                    <div class="col-sm-6 col-md-2 mw50 p-md-3 p-3 my-auto">
                      <img src="../assets/logos/11_Redeban_g.svg" class="img-fluid mx-auto d-block small-company" alt="Redeban">
                    </div>
                  </div>
                  <div class="row align-text-bottom mt-5">
                  <?=$text[$lang]["experience-ii"]["disclaimer"]?>
                  </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5"><?=$text[$lang]["index"]["education"]?></h2>
                    <?php foreach ($text[$lang]["education"]["list"] as $edu):?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$edu["inst"]?></h3>
                            <div class="subheading"><?=$edu["title"]?></div>
                            <?php if (edu["subtitle"] !== ""){
                              echo '<p class="mb-3">' . $edu["subtitle"] . '</p>';
                            } ?>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$edu["date"]?></span></div>
                    </div>
                    <?php endforeach;?>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Portfolio-->
            <section class="resume-section portfolio" id="portfolio">
                <div class="resume-section-content">
                    <h2 class="mb-5"><?=$text[$lang]["index"]["portfolio"]?></h2>
                    <div class="subheading mb-3"><?=$text[$lang]["portfolio"]["subheading"]?></div>
                    <!-- Portfolio Grid Items-->
                    <div class="row">
                      <?php
                      $i = 1;
                      foreach ($text[$lang]["portfolio"]["list"] as $key => $value):
                        ?>
                        <!-- Portfolio Items-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target=<?="#portfolioModal" . $i++?>>
                                <div class="portfolio-item-caption d-flex align-items-end justify-content-end h-100 w-100">
                                    <div class="portfolio-item-caption-content mb-3 mr-3"><h2 class="text-white"><?=$key?></h2></div>
                                </div>
                                <img class="img-fluid" src=<?=$value["image"]?> alt="" />
                            </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5"><?=$text[$lang]["index"]["interests"]?></h2>
                    <p class="lead mb-5"><?=$text[$lang]["interests"]["paragraphs"][0]?></p>
                    <p class="lead mb-0"><?=$text[$lang]["interests"]["paragraphs"][1]?></p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section hidden class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5"><?=$text[$lang]["index"]["awards"][0]?></h2>
                </div>
            </section>
        </div>
        <!-- Portfolio Modals-->
        <?php
        $i = 1;
        foreach ($text[$lang]["portfolio"]["list"] as $key => $value):
          ?>
        <div class="portfolio-modal modal fade" id=<?="portfolioModal" . $i?> tabindex="-1" role="dialog" aria-labelledby=<?="portfolioModal" . $i . "Label"?> aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-5 mt-5" id=<?="portfolioModal" . $i++ . "Label"?>><?=$key?></h2>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src=<?=$value["image"]?> alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p><?=$value["description"]?></p>
                                    <p class="mb-5 text-uppercase"><?=$text[$lang]["portfolio"]["comingsoon"]?></p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        <?=$text[$lang]["portfolio"]["close"]?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
