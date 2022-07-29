<?php 
    if(@isset($_POST['db']))
    {
        file_put_contents('database.json', $_POST['db']);
        die();
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Inezgane Hospital</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/all.css" />
</head>
<body class="">
    <?php $DB = json_decode(file_get_contents("database.json"), true); ?>
    <?php //var_dump($DB); ?>
    <div class="collapse" id="navbarHeader" style="position: fixed;width: 100%;z-index: 2000;top: 63px;padding-top: 15px;background-color: #a0a0a0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                    <table class="table table-bordered table-sm table-striped">
                        <thead data-sticky-header="true">
                            <tr style="background-color: #fff;">
                                <th scope="col" style="width: 40%;">La ville</th>
                                <th scope="col">Cas exclus</th>
                                <th scope="col">Cas confirmés</th>
                                <th scope="col">Cas rétablis</th>
                                <th scope="col">Décès</th>
                            </tr>
                        </thead>
                        <tr class="table-light" id="temsia-tr">
                            <td>Inezgane</td>
                            <td><input type="text" value="<?php echo $DB['inz']['nega'] ?>" data-area="inz" data-as="nega" class="form-control form-control-sm input-nega input-inz-nega" /></td>
                            <td><input type="text" value="<?php echo $DB['inz']['conf'] ?>" data-area="inz" data-as="conf" class="form-control form-control-sm input-conf input-inz-conf" /></td>
                            <td><input type="text" value="<?php echo $DB['inz']['heal'] ?>" data-area="inz" data-as="heal" class="form-control form-control-sm input-inz input-heal input-inz-heal" /></td>
                            <td><input type="text" value="<?php echo $DB['inz']['death'] ?>" data-area="inz" data-as="death" class="form-control form-control-sm input-inz input-death input-inz-death" /></td>
                        </tr>
                        <tr class="table-light" id="oulad-dahou-tr">
                            <td>Dcheira El Jihadia</td>
                            <td><input type="text" value="<?php echo $DB['dch']['nega'] ?>" data-area="dch" data-as="nega" class="form-control form-control-sm input-dch input-nega input-dch-nega" /></td>
                            <td><input type="text" value="<?php echo $DB['dch']['conf'] ?>" data-area="dch" data-as="conf" class="form-control form-control-sm input-dch input-conf input-dch-conf" /></td>
                            <td><input type="text" value="<?php echo $DB['dch']['heal'] ?>" data-area="dch" data-as="heal" class="form-control form-control-sm input-dch input-heal input-dch-heal" /></td>
                            <td><input type="text" value="<?php echo $DB['dch']['death'] ?>" data-area="dch" data-as="death" class="form-control form-control-sm input-dch input-death input-dch-death" /></td>
                        </tr>
                        <tr class="table-light" id="lqliaa-tr">
                            <td>Ait Melloul</td>
                            <td><input type="text" value="<?php echo $DB['ait']['nega'] ?>" data-area="ait" data-as="nega" class="form-control form-control-sm input-ait input-nega input-ait-nega" /></td>
                            <td><input type="text" value="<?php echo $DB['ait']['conf'] ?>" data-area="ait" data-as="conf" class="form-control form-control-sm input-ait input-conf input-ait-conf" /></td>
                            <td><input type="text" value="<?php echo $DB['ait']['heal'] ?>" data-area="ait" data-as="heal" class="form-control form-control-sm input-ait input-heal input-ait-heal" /></td>
                            <td><input type="text" value="<?php echo $DB['ait']['death'] ?>" data-area="ait" data-as="death" class="form-control form-control-sm input-ait input-death input-ait-death" /></td>
                        </tr>
                        <tr class="table-light" id="aitmelloul-tr">
                            <td>Lqliâa</td>
                            <td><input type="text" value="<?php echo $DB['lql']['nega'] ?>" data-area="lql" data-as="nega" class="form-control form-control-sm input-lql input-nega input-lql-nega" /></td>
                            <td><input type="text" value="<?php echo $DB['lql']['conf'] ?>" data-area="lql" data-as="conf" class="form-control form-control-sm input-lql input-conf input-lql-conf" /></td>
                            <td><input type="text" value="<?php echo $DB['lql']['heal'] ?>" data-area="lql" data-as="heal" class="form-control form-control-sm input-lql input-heal input-lql-heal" /></td>
                            <td><input type="text" value="<?php echo $DB['lql']['death'] ?>" data-area="lql" data-as="death" class="form-control form-control-sm input-lql input-death input-lql-death" /></td>
                        </tr>
                        <tr class="table-light" id="dchaeira-al-jihadia-tr">
                            <td>Oulad Dahou</td>
                            <td><input type="text" value="<?php echo $DB['daho']['nega'] ?>" data-area="daho" data-as="nega" class="form-control form-control-sm input-daho input-nega input-daho-nega" /></td>
                            <td><input type="text" value="<?php echo $DB['daho']['conf'] ?>" data-area="daho" data-as="conf" class="form-control form-control-sm input-daho input-conf input-daho-conf" /></td>
                            <td><input type="text" value="<?php echo $DB['daho']['heal'] ?>" data-area="daho" data-as="heal" class="form-control form-control-sm input-daho input-heal input-daho-heal" /></td>
                            <td><input type="text" value="<?php echo $DB['daho']['death'] ?>" data-area="daho" data-as="death" class="form-control form-control-sm input-daho input-death input-daho-death" /></td>
                        </tr>
                        <tr class="table-light" id="inezgane-tr">
                            <td>Temsia</td>
                            <td><input type="text" value="<?php echo $DB['tm']['nega'] ?>" data-area="tm" data-as="nega" class="form-control form-control-sm input-tm input-nega input-tm-nega" /></td>
                            <td><input type="text" value="<?php echo $DB['tm']['conf'] ?>" data-area="tm" data-as="conf" class="form-control form-control-sm input-tm input-conf input-tm-conf" /></td>
                            <td><input type="text" value="<?php echo $DB['tm']['heal'] ?>" data-area="tm" data-as="heal" class="form-control form-control-sm input-tm input-heal input-tm-heal" /></td>
                            <td><input type="text" value="<?php echo $DB['tm']['death'] ?>" data-area="tm" data-as="death" class="form-control form-control-sm input-tm input-death input-tm-death" /></td>
                        </tr>
                    </table>
                    </div>  
                </div>
            </div>      
        </div>
    </div>
    <div class="collapse shadow-sm" id="navbarCog" style="position: fixed;width: 100%;z-index: 2000;top: 63px;padding-top: 15px;background-color: #fff;">
        <div class="container">
            <div class="row mb-3">
                <div class="col-4">
                    <h2>About</h2>

                </div>
                <div class="col-4">
                    <h2>Réglage</h2>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch-test" data-ref="tchkhis-text" checked="false">
                        <label class="custom-control-label" for="switch-test">Affiche numbre de tests</label>
                    </div>
                    
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch-exclus" data-ref="nega-text" data-type="nega" checked="false">
                        <label class="custom-control-label" for="switch-exclus">Affiche cas exclus</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch-confirm" data-ref="halat-text" data-type="conf" checked="false">
                        <label class="custom-control-label" for="switch-confirm">Affiche cas confirmés</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch-retablis" data-ref="mot3afa-text" data-type="heal" checked="false">
                        <label class="custom-control-label" for="switch-retablis">Affiche cas rétablis</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch-deces" data-ref="death-text" data-type="death" checked="false">
                        <label class="custom-control-label" for="switch-deces">Affiche Décès</label>
                    </div>

                </div>
                <div class="col-4">
                    <h2>Font Size</h2>

                    <div class="form-group">
                        <label for="input-font-size">Titles numbers </label>
                        <input class="form-control" type="number" value="29" data-def="29" id="input-font-size-titles">
                    </div>

                    <div class="form-group">
                        <label for="input-font-size">Details numbers</label>
                        <input class="form-control" type="number" value="18" data-def="18" id="input-font-size-details">
                    </div>

                </div>
            </div>      
        </div>
    </div>
    <nav class="navbar fixed-top navbar-light shadow-sm" style="background:#fff;">
        <h5 class="navbar-brand font-weight-normal mb-0"> <img src="img/logo.png" style="width:38px;heigth:38px;">  La Situation Epidémiologique au COVID19  </h5>
        <div class="btn-group" role="group">
            <a class="btn btn-secondary" href="ar.php">AR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCog" aria-controls="navbarCog" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-cog"></i></button>
        </div>
    </nav >
    <main class="container mt-4">

        <div class="card shadow-sm mb-4">
            <div class="card-body" style="z-index: 2;">
                <h3 class="card-title text-center ">Situation Epidémiologique au COVID19 à la préfecture
                <br>
                d'Inezgane Ait Melloul</h3>
                <form class="form-inline mt-3">
                    <div class="form-group mb-2" style="display:none;">
                        <label for="input-fohousat" style="direction: ltr;margin-left: 10px;"> : عدد التحليلات</label>
                        <input type="text" class="form-control" id="input-fohousat" value="0">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="input-date" style="direction: ltr;margin-right: 10px;">La Date  : </label>
                        <input type="text" class="form-control" id="input-date" placeholder="يوم شهر عام " value="<?php echo $DB['date'] ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="input-time" style="direction: ltr;margin-right: 10px;">Le temps : </label>
                        <input type="text" class="form-control" id="input-time" placeholder="00:00"  value="<?php echo $DB['time'] ?>">
                    </div>
                </form>
            </div>
            <div style="background: url('img/cover.jpg') center center/cover;position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity:0.3;z-index: 1;"></div>
        </div>
        <div>
            
        </div>
        <div id="widget">
            <div class="row">
            
                <div class="col-sm-3">
                    <div class="card shadow-sm mb-4" style="background-color: #ffecc9;color: #ff6000;">
                        <div class="card-header text-center">Cas exclus</div>
                        <div class="card-body">
                        <center>  
                            <h2 class="card-text" id="new_uncase"><?php echo $nega_sum = array_sum(array($DB['dch']['nega'],$DB['inz']['nega'],$DB['lql']['nega'],$DB['ait']['nega'],$DB['tm']['nega'],$DB['daho']['nega'])); ?>
                        </h2></center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card shadow-sm mb-4" style="background-color: #c9e3ff;color: #007bff;">
                        <div class="card-header text-center">Cas confirmés</div>
                        <div class="card-body">
                        <center>  
                            <h2 class="card-text" id="new_case"><?php echo $conf_sum = array_sum(array($DB['dch']['conf'],$DB['inz']['conf'],$DB['lql']['conf'],$DB['ait']['conf'],$DB['tm']['conf'],$DB['daho']['conf'])); ?>
                        </h2></center>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card shadow-sm mb-4" style="background-color: #beffdb;color: #184f30;">
                    <div class="card-header text-center">Cas rétablis</div>
                        <div class="card-body">
                            <center> <h2 class="card-text" id="total_recovered"><?php echo $heal_sum = array_sum(array($DB['dch']['heal'],$DB['inz']['heal'],$DB['lql']['heal'],$DB['ait']['heal'],$DB['tm']['heal'],$DB['daho']['heal'])); ?>
                            
                            </h2></center>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card shadow-sm mb-4" style="background-color: #ddd;color: #555;">
                        <div class="card-header text-center">Décès</div>
                        <div class="card-body">
                            <center><h2 class="card-text" id="total_death"><?php echo $death_sum = array_sum(array($DB['dch']['death'],$DB['inz']['death'],$DB['lql']['death'],$DB['ait']['death'],$DB['tm']['death'],$DB['daho']['death'])); ?>
                            </h2></center>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div style="margin:0 auto;">
                        <div id="post" style="width:991px;height: 642px;text-align: right;position: relative;left: 0;top: 0px;display:inline-block">

                            <div id="input-dch-nega-text" data-def-top="155" class="nx-draw-text nega-text" style="left: 300px;top: 155px;"><span class="nx-area-text"><b data-val="<?php echo $DB['dch']['nega']; ?>"><?php echo $DB['dch']['nega'] ?></b><img src="img/4.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></div>
                            <div id="input-dch-conf-text" data-def-top="172" class="nx-draw-text conf-text" style="left: 300px;top: 172px;"><span class="nx-area-text"><b data-val="<?php echo $DB['dch']['conf']; ?>"><?php echo $DB['dch']['conf'] ?></b><img src="img/1.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></div>
                            <div id="input-dch-heal-text" data-def-top="189" class="nx-draw-text heal-text" style="left: 300px;top: 189px;"><span class="nx-area-text"><b data-val="<?php echo $DB['dch']['heal']; ?>"><?php echo $DB['dch']['heal'] ?></b><img src="img/2.png" style="margin-right: 2px;position: relative;top: -1px;width: 16px;height: 16px;"/></span></div>
                            <div id="input-dch-death-text" data-def-top="206" class="nx-draw-text death-text" style="left: 300px;top: 206px;"><span class="nx-area-text"><b data-val="<?php echo $DB['dch']['death']; ?>"><?php echo $DB['dch']['death'] ?></b><img src="img/3.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></div>
                            
                            <div id="input-inz-nega-text" data-def-top="270" class="nx-draw-text nega-text" style="left: 280px;top: 270px;"><span class="nx-area-text"><b data-val="<?php echo $DB['inz']['nega']; ?>"><?php echo $DB['inz']['nega'] ?></b><img src="img/4.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-inz-conf-text" data-def-top="287" class="nx-draw-text conf-text" style="left: 280px;top: 287px;"><span class="nx-area-text"><b data-val="<?php echo $DB['inz']['conf']; ?>"><?php echo $DB['inz']['conf'] ?></b><img src="img/1.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-inz-heal-text" data-def-top="304" class="nx-draw-text heal-text" style="left: 280px;top: 304px;"><span class="nx-area-text"><b data-val="<?php echo $DB['inz']['heal']; ?>"><?php echo $DB['inz']['heal'] ?></b><img src="img/2.png" style="margin-right: 2px;position: relative;top: -1px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-inz-death-text" data-def-top="321" class="nx-draw-text death-text" style="left: 280px;top: 321px;"><span class="nx-area-text"><b data-val="<?php echo $DB['inz']['death']; ?>"><?php echo $DB['inz']['death'] ?></b><img src="img/3.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                
                            <div id="input-lql-nega-text" data-def-top="460" class="nx-draw-text nega-text" style="left: 318px;top: 460px;"><span class="nx-area-text"><b data-val="<?php echo $DB['lql']['nega']; ?>"><?php echo $DB['lql']['nega'] ?></b><img src="img/4.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-lql-conf-text" data-def-top="477" class="nx-draw-text conf-text" style="left: 318px;top: 477px;"><span class="nx-area-text"><b data-val="<?php echo $DB['lql']['conf']; ?>"><?php echo $DB['lql']['conf'] ?></b><img src="img/1.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-lql-heal-text" data-def-top="494" class="nx-draw-text heal-text" style="left: 318px;top: 494px;"><span class="nx-area-text"><b data-val="<?php echo $DB['lql']['heal']; ?>"><?php echo $DB['lql']['heal'] ?></b><img src="img/2.png" style="margin-right: 2px;position: relative;top: -1px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-lql-death-text" data-def-top="511" class="nx-draw-text death-text" style="left: 318px;top: 511px;"><span class="nx-area-text"><b data-val="<?php echo $DB['lql']['death']; ?>"><?php echo $DB['lql']['death'] ?></b><img src="img/3.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                       
                            <div id="input-ait-nega-text" data-def-top="493" class="nx-draw-text nega-text" style="left: 483px;top: 493px;"><span class="nx-area-text"><b data-val="<?php echo $DB['ait']['nega']; ?>"><?php echo $DB['ait']['nega'] ?></b><img src="img/4.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-ait-conf-text" data-def-top="510" class="nx-draw-text conf-text" style="left: 483px;top: 510px;"><span class="nx-area-text"><b data-val="<?php echo $DB['ait']['conf']; ?>"><?php echo $DB['ait']['conf'] ?></b><img src="img/1.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-ait-heal-text" data-def-top="527" class="nx-draw-text heal-text" style="left: 483px;top: 527px;"><span class="nx-area-text"><b data-val="<?php echo $DB['ait']['heal']; ?>"><?php echo $DB['ait']['heal'] ?></b><img src="img/2.png" style="margin-right: 2px;position: relative;top: -1px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-ait-death-text" data-def-top="544" class="nx-draw-text death-text" style="left: 483px;top: 544px;"><span class="nx-area-text"><b data-val="<?php echo $DB['ait']['death'] ; ?>"><?php echo $DB['ait']['death'] ?></b><img src="img/3.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                  
                            <div id="input-tm-nega-text" data-def-top="453" class="nx-draw-text nega-text" style="left: 681px;top: 453px;"><span class="nx-area-text"><b data-val="<?php echo $DB['tm']['nega']; ?>"><?php echo $DB['tm']['nega'] ?></b><img src="img/4.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-tm-conf-text" data-def-top="470" class="nx-draw-text conf-text" style="left: 681px;top: 470px;"><span class="nx-area-text"><b data-val="<?php echo $DB['tm']['conf']; ?>"><?php echo $DB['tm']['conf'] ?></b><img src="img/1.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-tm-heal-text" data-def-top="487" class="nx-draw-text heal-text" style="left: 681px;top: 487px;"><span class="nx-area-text"><b data-val="<?php echo $DB['tm']['heal']; ?>"><?php echo $DB['tm']['heal'] ?></b><img src="img/2.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-tm-death-text" data-def-top="504" class="nx-draw-text death-text" style="left: 681px;top: 504px;"><span class="nx-area-text"><b data-val="<?php echo $DB['tm']['death']; ?>"><?php echo $DB['tm']['death'] ?></b><img src="img/3.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            
                            <div id="input-daho-nega-text" data-def-top="413" class="nx-draw-text nega-text" style="left: 863px;top: 413px;"><span class="nx-area-text"><b data-val="<?php echo $DB['daho']['nega']; ?>"><?php echo $DB['daho']['nega'] ?></b><img src="img/4.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-daho-conf-text" data-def-top="430" class="nx-draw-text conf-text" style="left: 863px;top: 430px;"><span class="nx-area-text"><b data-val="<?php echo $DB['daho']['conf']; ?>"><?php echo $DB['daho']['conf'] ?></b><img src="img/1.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-daho-heal-text" data-def-top="447" class="nx-draw-text heal-text" style="left: 863px;top: 447px;"><span class="nx-area-text"><b data-val="<?php echo $DB['daho']['heal'] ; ?>"><?php echo $DB['daho']['heal'] ?></b><img src="img/2.png" style="margin-right: 2px;position: relative;top: -1px;width: 16px;height: 16px;"/></span></span></div>
                            <div id="input-daho-death-text" data-def-top="464" class="nx-draw-text death-text" style="left: 863px;top: 464px;"><span class="nx-area-text"><b data-val="<?php echo $DB['daho']['death']; ?>"><?php echo $DB['daho']['death'] ?></b><img src="img/3.png" style="margin-right: 2px;position: relative;top: -2px;width: 16px;height: 16px;"/></span></span></div>
                            
                            
                            <div id="nega-text" data-def-top="198" style="left: 86px;top: 198px;text-align:left;"><span class="nx-info-text nega-text"><b data-val="<?php echo $nega_sum; ?>"><?php echo $nega_sum; ?></b></span></div>
                            <div id="halat-text" data-def-top="282" style="left: 86px;top: 282px;text-align:left;"><span class="nx-info-text conf-text"><b data-val="<?php echo $conf_sum; ?>"><?php echo $conf_sum; ?></b></span></div>
                            <div id="mot3afa-text" data-def-top="372" style="left: 86px;top: 372px;text-align:left;"><span class="nx-info-text heal-text"><b data-val="<?php echo $heal_sum; ?>"><?php echo $heal_sum; ?></b></span></div>
                            <div id="death-text" data-def-top="457" style="left: 86px;top: 457px;text-align:left;"><span class="nx-info-text death-text"><b data-val="<?php echo $death_sum; ?>"><?php echo $death_sum; ?></b></span></div>
                            <div id="tchkhis-text" data-def-top="105" style="left: 86px;top: 105px;text-align:left;"><span class="nx-info-text tch-text"><b data-val="<?php echo $conf_sum + $nega_sum; ?>"><?php echo $conf_sum + $nega_sum; ?></b></span></div>

                            <div id="sourse-text" class="nx-draw-text" style="width:991px;left: 495px;top: 600px;"><span class="nx-bottom-text"> <span class="date"><?php echo $DB['date'] ?></span> | <span class="time" style="margin:0 5px"><?php echo $DB['time'] ?></span> </span></div>

                            <img src="img/post-fr.png" style="position: absolute;width: 991px;height: 642px;top: 0px;left: 0;"/> 
                        </div>                                      
                    </div>
                </div>
            </div>

        </div>
    
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">رفع ملف البيانات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -1rem auto -1rem -1rem;">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group text-right">
                        <label for="formControlFile">ملف البيانات (json)</label>
                        <input type="file" class="form-control-file" id="formControlFile">
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-primary" id="uploadJson">رفع ملف</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-bottom text-right">
        <button type="button" class="btn btn-warning rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Enregistrer l'image" id="btnSave" style=""><img src="img/browser.svg" style="width:24px;height: 24px;"></button>
    </div>                        
    <!-- bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/html2canvas.js"></script>
    <script src="js/FileSaver.min.js"></script> 
    <script>
        $(function() { 
            
            try {
                window.databaseGlobal = JSON.parse('<?php echo file_get_contents("database.json"); ?>');
            } catch(e) {
                window.databaseGlobal = {
                    inz: {
                        conf:0,
                        heal:0,
                        death:0,
                        nega:0,
                    },
                    dch: {
                        conf:0,
                        heal:0,
                        death:0,
                        nega:0,
                    },
                    ait: {
                        conf:0,
                        heal:0,
                        death:0,
                        nega:0,
                    },
                    lql: {
                        conf:0,
                        heal:0,
                        death:0,
                        nega:0,
                    },
                    daho: {
                        conf:0,
                        heal:0,
                        death:0,
                        nega:0,
                    },
                    tm: {
                        conf:0,
                        heal:0,
                        death:0,
                        nega:0,
                    },
                    date:"",
                    time:"",
                    testes:0,
                };
            }

            //input-font-size-titles
            $('#input-font-size-titles').on('change',function(){
                var icn = parseInt($('#input-font-size-titles').data('def')) - $('#input-font-size-titles').val();
                $('.nx-info-text').css("font-size", $('#input-font-size-titles').val()+"px");
                $('#nega-text').css('top',parseInt($('#nega-text').data('def-top')) + icn);
                $('#halat-text').css('top',parseInt($('#halat-text').data('def-top')) + icn);
                $('#mot3afa-text').css('top',parseInt($('#mot3afa-text').data('def-top')) + icn);
                $('#death-text').css('top',parseInt($('#death-text').data('def-top')) + icn);
                $('#tchkhis-text').css('top',parseInt($('#tchkhis-text').data('def-top')) + icn);
            });

            //input-font-size-details
            $('#input-font-size-details').on('change',function(){
                var icn = parseInt($('#input-font-size-details').data('def')) - $('#input-font-size-details').val();
                $('.nx-area-text').css("font-size", $('#input-font-size-details').val()+"px");
            });

            $('#switch-test,#switch-exclus,#switch-confirm,#switch-retablis,#switch-deces').on('change',function(){
                if($(this).prop('checked'))
                {
                    $("#"+$(this).data('ref')+' .nx-info-text b').text($("#"+$(this).data('ref')+' .nx-info-text b').data('val'));
                    if($(this).data('type'))
                    {
                        $("."+$(this).data('type')+"-text").each(function(){
                            $(this).find("b").text($(this).find("b").data('val'));
                        });
                    }
                }
                else{
                    $("#"+$(this).data('ref')+' .nx-info-text b').text('-');
                    if($(this).data('type'))
                    {
                        $("."+$(this).data('type')+"-text b").text('-');
                    }
                }
            });

            $('[data-toggle="tooltip"]').tooltip();
            $("#btnSave").click(function() { 
                const targetEl = document.getElementById("post");
                html2canvas(targetEl,{
                    allowTaint: true,
                    useCORS: true,            
                    logging: true,
                    width: 991,
                    height: 642, 
                    scrollY: -window.scrollY,
                    scrollX: -10
                    //letterRendering: false,
                    //scale: 1
                }).then(function(canvas) {
                    //document.body.appendChild(canvas);
                    canvas.toBlob(function(blob) {
                        var now = new Date();
                        var logfile_name = now.getFullYear() + "_"+ now.getMonth() + "_" + now.getDate();
                        saveAs(blob, logfile_name+".png");
                        SaveJsData(logfile_name);
                    });
                });
                
            });

            $('table input').on('change',function(){
                console.log('chnage');
                $('#input-'+$(this).data('area')+'-'+$(this).data('as')+'-text').find('span b').text(parseInt($(this).val()));
                $('#input-'+$(this).data('area')+'-'+$(this).data('as')+'-text').find('span b').data('val',parseInt($(this).val()));
                UpdateUIGlobal();
            });
            $('#input-fohousat').on('change',function(){
                $('#tchkhis-text span b').text(parseInt($(this).val()));
            });
            $('#input-date').on('change',function(){
                $('#sourse-text .date').text($(this).val());
            });
            $('#input-time').on('change',function(){
                $('#sourse-text .time').text($(this).val());
            });

            $('#uploadJson').on('click',function(){
                var input, file, fr;
                if (typeof window.FileReader !== 'function') {
                    alert("The file API isn't supported on this browser yet.");
                return;
                }

                input = document.getElementById('formControlFile');
                if (!input) {
                    alert("Um, couldn't find the fileinput element.");
                }
                else if (!input.files) {
                    alert("This browser doesn't seem to support the `files` property of file inputs.");
                }
                else if (!input.files[0]) {
                    alert("Please select a file before clicking 'Load'");
                }
                else {
                    file = input.files[0];
                    fr = new FileReader();
                    fr.onload = receivedText;
                    fr.onloadend = function(){
                        $("#exampleModal").modal('hide');
                        UpdateDatabaseData();
                    };
                    fr.readAsText(file);
                }

                function receivedText(e) {
                    lines = e.target.result;
                    window.databaseGlobal = JSON.parse(lines);
                }
            });
            
            function UpdateUIGlobal()
            {
                var _conf = 0,_heal = 0,_death = 0,_nega=0;
                $('table input').each(function(){
                    if($(this).data('as') == "conf")
                    {
                        _conf += parseInt($(this).val());
                    }
                    else if($(this).data('as') == "heal")
                    {
                        _heal += parseInt($(this).val());
                    }
                    else if($(this).data('as') == "death")
                    {
                        _death += parseInt($(this).val());
                    }
                    else if($(this).data('as') == "nega")
                    {
                        _nega += parseInt($(this).val());
                    }
                    
                });

                $('#halat-text span b,#new_case').text(_conf);
                $('#mot3afa-text span b,#total_recovered').text(_heal);
                $('#death-text span b,#total_death').text(_death);
                $('#nega-text span b,#new_uncase').text(_nega);

                $('#input-fohousat').val(_nega + _conf).trigger('change');
            }

            function UpdateDatabaseData()
            {
                $('input[data-area=inz][data-as=conf]').val(window.databaseGlobal.inz.conf).trigger('change');
                $('input[data-area=inz][data-as=heal]').val(window.databaseGlobal.inz.heal).trigger('change');
                $('input[data-area=inz][data-as=death]').val(window.databaseGlobal.inz.death).trigger('change');
                $('input[data-area=inz][data-as=nega]').val(window.databaseGlobal.inz.nega).trigger('change');
                $('input[data-area=dch][data-as=conf]').val(window.databaseGlobal.dch.conf).trigger('change');
                $('input[data-area=dch][data-as=heal]').val(window.databaseGlobal.dch.heal).trigger('change');
                $('input[data-area=dch][data-as=death]').val(window.databaseGlobal.dch.death).trigger('change');
                $('input[data-area=dch][data-as=nega]').val(window.databaseGlobal.dch.nega).trigger('change');
                $('input[data-area=ait][data-as=conf]').val(window.databaseGlobal.ait.conf).trigger('change');
                $('input[data-area=ait][data-as=heal]').val(window.databaseGlobal.ait.heal).trigger('change');
                $('input[data-area=ait][data-as=death]').val(window.databaseGlobal.ait.death).trigger('change');
                $('input[data-area=ait][data-as=nega]').val(window.databaseGlobal.ait.nega).trigger('change');
                $('input[data-area=lql][data-as=conf]').val(window.databaseGlobal.lql.conf).trigger('change');
                $('input[data-area=lql][data-as=heal]').val(window.databaseGlobal.lql.heal).trigger('change');
                $('input[data-area=lql][data-as=death]').val(window.databaseGlobal.lql.death).trigger('change');
                $('input[data-area=lql][data-as=nega]').val(window.databaseGlobal.lql.nega).trigger('change');
                $('input[data-area=daho][data-as=conf]').val(window.databaseGlobal.daho.conf).trigger('change');
                $('input[data-area=daho][data-as=heal]').val(window.databaseGlobal.daho.heal).trigger('change');
                $('input[data-area=daho][data-as=death]').val(window.databaseGlobal.daho.death).trigger('change');
                $('input[data-area=daho][data-as=nega]').val(window.databaseGlobal.daho.nega).trigger('change');
                $('input[data-area=tm][data-as=conf]').val(window.databaseGlobal.tm.conf).trigger('change');
                $('input[data-area=tm][data-as=heal]').val(window.databaseGlobal.tm.heal).trigger('change');
                $('input[data-area=tm][data-as=death]').val(window.databaseGlobal.tm.death).trigger('change');
                $('input[data-area=tm][data-as=nega]').val(window.databaseGlobal.tm.nega).trigger('change');

                $('#input-date').val(window.databaseGlobal.date).trigger('change');
                $('#input-time').val(window.databaseGlobal.time).trigger('change');
                

                UpdateUIGlobal();
            }

            function SaveJsData(name_file)
            {
                var data = {
                    inz: {
                        conf:$('input[data-area=inz][data-as=conf]').val(),
                        heal:$('input[data-area=inz][data-as=heal]').val(),
                        death:$('input[data-area=inz][data-as=death]').val(),
                        nega:$('input[data-area=inz][data-as=nega]').val(),
                    },
                    dch: {
                        conf:$('input[data-area=dch][data-as=conf]').val(),
                        heal:$('input[data-area=dch][data-as=heal]').val(),
                        death:$('input[data-area=dch][data-as=death]').val(),
                        nega:$('input[data-area=dch][data-as=nega]').val(),
                    },
                    ait: {
                        conf:$('input[data-area=ait][data-as=conf]').val(),
                        heal:$('input[data-area=ait][data-as=heal]').val(),
                        death:$('input[data-area=ait][data-as=death]').val(),
                        nega:$('input[data-area=ait][data-as=nega]').val(),
                    },
                    lql: {
                        conf:$('input[data-area=lql][data-as=conf]').val(),
                        heal:$('input[data-area=lql][data-as=heal]').val(),
                        death:$('input[data-area=lql][data-as=death]').val(),
                        nega:$('input[data-area=lql][data-as=nega]').val(),
                    },
                    daho: {
                        conf:$('input[data-area=daho][data-as=conf]').val(),
                        heal:$('input[data-area=daho][data-as=heal]').val(),
                        death:$('input[data-area=daho][data-as=death]').val(),
                        nega:$('input[data-area=daho][data-as=nega]').val(),
                    },
                    tm: {
                        conf:$('input[data-area=tm][data-as=conf]').val(),
                        heal:$('input[data-area=tm][data-as=heal]').val(),
                        death:$('input[data-area=tm][data-as=death]').val(),
                        nega:$('input[data-area=tm][data-as=nega]').val(),
                    },
                    date:$('#input-date').val(),
                    time:$('#input-time').val(),
                    testes:$('#input-fohousat').val(),

                }

                var jsonData = JSON.stringify(data);
                //saveAs(jsonData, 'database_'+name_file+'.json', 'application/json');

                $.ajax({
                    method: "POST",
                    url: "index.php",
                    data: { db: jsonData }
                })
                .done(function( ) {
                    console.log( "Data Saved");
                })
            }

            function saveAs(content, fileName, contentType) {
                var a = document.createElement("a");
                var file = new Blob([content], {type: contentType});
                a.href = URL.createObjectURL(file);
                a.download = fileName;
                a.click();
            }
            
        });
    </script>                              

</body>
</html>