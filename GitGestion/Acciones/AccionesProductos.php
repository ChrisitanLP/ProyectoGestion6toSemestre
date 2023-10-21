<?php

    require_once("../Patrones/Singleton/Conexion.php");
    
    class Acciones{
        
        public static function Mostrar(){
        
            $conexion = Conexion::getInstance() -> getConexion();
            $consulta = "SELECT * FROM productos";
            $resultado = $conexion -> prepare($consulta);
            $resultado -> execute();
            $dato = $resultado->fetchAll(PDO::FETCH_ASSOC);

            $informacion = '';

            foreach ($dato as $respuesta){
                $informacion.='
                <div class="col-xl-4 col-lg-6 mt-30 beer-container in-all beer-'.$respuesta['Mar_Pro'].'" style="">
                    <div class="cardsStyle pp__item--3 active pt-30 pb-25">
                        <div class="section-heading mr-30 beersFilter headingBeer">
                            <span class="sub-title">'.$respuesta['Mar_Pro'].'</span>
                        </div>
                        <div class="pp__thumbBeers">
                            <img class="beerImages" src="../'.$respuesta['Rut_Pro'].'" alt="">
                        </div>
                        <div class="pp__content">
                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                <div class="pp__cat">
                                    <span class="beer-properties">'.$respuesta['Car_1_Pro'].' - '.$respuesta['Car_2_Pro'].' - '.$respuesta['Car_3_Pro'].' </span>
                                </div>
                            </div>
                            <h4 class="pp__title">
                                <span class="beer-title">'.$respuesta['Nom_Pro'].'</span>
                            </h4>
                            <div class="pp__price d-flex align-items-center justify-content-center" style="gap: 10px">
                                <div class="d-flex flex-column align-items-center mr-15">
                                    <div class="d-flex justify-content-center" style="height: 40px">
                                        <img class="bitternesImage" src="https://www.cervezaantares.com/assets/images/icons/fullBitterness.svg"/>
                                        <img class="bitternesImage" src="https://www.cervezaantares.com/assets/images/icons/fullBitterness.svg"/>
                                        <img class="bitternesImage" src="https://www.cervezaantares.com/assets/images/icons/fullBitterness.svg"/>
                                        <img class="bitternesImage" src="https://www.cervezaantares.com/assets/images/icons/fullBitterness.svg"/>
                                        <img class="bitternesImage" src="https://www.cervezaantares.com/assets/images/icons/fullBitterness.svg"/>
                                    </div>
                                    <h6 class="label">'.$respuesta['Ama_Pro'].'</h6>
                                    <span class="qualities">Amargor</span>
                                </div>
                                <div class="d-flex flex-column align-items-center justify-content-between" style="height: 85px">
                                    <h6 class="beer-title" style="font-size: 33px">'.$respuesta['Gra_Alc_Pro'].'</h6>
                                    <span class="qualities">Alcohol</span>
                                </div>
                                <div class="d-flex flex-column align-items-center ml-15">
                                    <div class="bodyAmount">
                                        <img class="bodyImage" src="https://www.cervezaantares.com/assets/images/icons/fullBodyBeer.svg"/>
                                        <img class="bodyImage" src="https://www.cervezaantares.com/assets/images/icons/fullBodyBeer.svg"/>
                                        <img class="bodyImage" src="https://www.cervezaantares.com/assets/images/icons/fullBodyBeer.svg"/>
                                        <img class="bodyImage" src="https://www.cervezaantares.com/assets/images/icons/emptyBodyBeer.svg"/>
                                        <img class="bodyImage" src="https://www.cervezaantares.com/assets/images/icons/emptyBodyBeer.svg"/>
                                    </div>
                                    <h6 class="label">'.$respuesta['Cue_Pro'].'</h6>
                                    <span class="qualities">Cuerpo</span>
                                </div>
                            </div>
                        </div>
                        <div class="cardOptions">
                            <div class="imgOptions">
                                <a href="https://www.vinosyspirits.com/antares-ipa-lata.html" target="_blank">
                                    <img src="https://www.cervezaantares.com/assets/images/icons/shop-cart.svg" style="width: 24px;"/>
                                </a>
                            </div>
                            <div class="imgOptions">
                                <img src="https://www.cervezaantares.com/assets/images/icons/view-option.svg" data-toggle="modal" data-target="#beerModal'.$respuesta['Cod_Pro'].'" style="width: 24px;"/>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade" id="beerModal'.$respuesta['Cod_Pro'].'" tabindex="-1" role="dialog" aria-labelledby="beerModalLabel" aria-hidden="true">
                    <div class="modal-dialog modalAlign" role="document" style="max-width: 604px;">
                        <div class="modal-content">
                            <div class="beer-modal-main-container">
                                <div class="fabric-modal-body" style="width: 604px; height: auto; flex-direction: row;">
                                    <div class="modalBeer">
                                        <img src="../'.$respuesta['Rut_Pro'].'" alt="" style="height: 163px;">
                                        <div class="d-flex mt-20">
                                            <div class="d-flex flex-column align-items-center justify-content-between mr-30">
                                                <h6 class="indicatorNumber">'.$respuesta['IBU'].'</h6>
                                                <span class="qualities">IBU</span>
                                            </div>
                                            <div class="d-flex flex-column align-items-center justify-content-between">
                                                <h6 class="indicatorNumber">'.$respuesta['Gra_Alc_Pro'].'</h6>
                                                <span class="qualities">Grados Alcohol</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="beer-modal-description">
                                        <div class="closeContainer">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="section-heading modalType mr-30">
                                            <span class="sub-title">'.$respuesta['Mar_Pro'].'</span>
                                        </div>
                                        <span class="beer-title mt-10" style="color: #151515;">'.$respuesta['Nom_Pro'].'</span>
                                        <p>
                                        '.$respuesta['Des_Pro'].' 
                                        </p>
                                        <span class="enjoyBeer">¡Disfrutala en nuestros locales o comprala online!</span>
                                        <div class="d-flex justify-content-start mt-20">
                                            <button class="site-btn letter-btn d-flex justify-content-center" style="width: 113px"><a class="linkOption" href="https://www.vinosyspirits.com/cervezas/linea.html">COMPRAR</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
            return $informacion;
        }
    }

?>