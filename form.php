<?php
$message_sent=false;
            if(isset($_POST['email']) && $_POST['email'] !=''){
                    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                                //submit the form
                                $sub = "A propos de votre audit digital";
                                //header
                                //the message
                                $message='
                                <html>
                                <head>
                                
                                </head>
                                <body style=" margin: 50px;">
                                    <form >
                                        <div class="showcase" style=" background: url(https://image.ibb.co/kYJK8x/showcase.jpg); border-radius: 10px; height: 300px;    margin-bottom: 40px;">
                                        <h1 style="font-size: 2rem;
                                        margin-bottom: 0;
                                        color:#fff;padding-top: 20%;">Êtes-vous prêts à passer à l\'étape suivante ?</h1>
                                       </div>
                                       <img src="https://ci6.googleusercontent.com/proxy/DQ8unq0VHCsLZS76S-JLmZXJ4_Mcp5okHQWleZ4bDgtXz08HLqqSd3H6FIsuQCqqYLBa4D5KnhEvAAG-ME1SZES17URuVBPML4mLJGyzMDBYb9CLUMS1N83gSuW0_kI4a3smufcu2MIW9p3ohGefvfiohl3y_Q=s0-d-e1-ft#https://mcusercontent.com/237f858f601a344d7b46df34d/images/b2151db0-19a5-4fb3-b5a0-5b6d7d57f827.gif" width="564" style="max-width:400px;padding-bottom:0;border:0;height:auto;display: block;margin-left: auto;margin-right: auto;border-radius: 10px;" class="gif">
                                       <p style="    color:#08203a;text-align:justify;margin:10px 0;padding:0;font-family:Helvetica;font-size:16px;line-height:150%">L\'audit que vous venez d\'effectuer à travers notre plateforme est un premier pas vers l\'optimisation de votre stratégie digitale, mais ce n\'est certainement pas le dernier.
                                
                                        Pour la suite, nous vous offrons une consultation gratuite avec un de nos experts afin de procéder à une évaluation détaillée de votre présence digitale et de discuter avec vous des différentes pistes d\'évaluation possibles.</p>
                                        <button style="background-color: rgb(8, 8, 56);color: azure;width: 300px; height: 50px;text-align: center;font-size: 16px;display: block;
                                        margin-left: auto;
                                        margin-right: auto">obtenez une consultation gratuite</button> 
                                        <div style="padding: 18px;color: rgb(8, 8, 56); font-family: Helvetica;font-size: 16px;text-align: center;word-break: break-word;">
                                        <h3 style="display: block;color: #444444;font-size: 30px;font-style: normal;">Qui sommes-nous ?</h3>
                                        <div style="text-align:justify"><br>
                                            TEK INSIDE est une agence spécialisée en marketing digital et acquisition. Notre mission est d\'accompagner nos clients dans la mise en place de leurs stratégies digitales et de leurs plans d’action opérationnels pour leur permettre de générer plus de revenus et optimiser leurs canaux d’acquisition.&nbsp;<br>
                                            Nous proposons à nos partenaires une large panoplie de solutions digitales dont&nbsp;:</div>
                                            <ul>
                                            <li style="text-align:justify"><a href="https://tekinside.us18.list-manage.com/track/click?u=237f858f601a344d7b46df34d&amp;id=8d554e780b&amp;e=3c8170756a" style="color:#b78a67;font-weight:normal;text-decoration:underline" target="_blank" >L’inbound Marketing</a></li>
                                            <li style="text-align:justify"><a href="https://tekinside.us18.list-manage.com/track/click?u=237f858f601a344d7b46df34d&amp;id=e3764b6cda&amp;e=3c8170756a" style="color:#b78a67;font-weight:normal;text-decoration:underline" target="_blank" >Community management</a>&nbsp;</li>
                                            <li style="text-align:justify"><a href="https://tekinside.us18.list-manage.com/track/click?u=237f858f601a344d7b46df34d&amp;id=a77c35ee02&amp;e=3c8170756a" style="color:#b78a67;font-weight:normal;text-decoration:underline" target="_blank" >Vidéo Marketing</a> </li>
                                            <li style="text-align:justify"><a href="https://tekinside.us18.list-manage.com/track/click?u=237f858f601a344d7b46df34d&amp;id=3bf740521a&amp;e=3c8170756a" style="color:#b78a67;font-weight:normal;text-decoration:underline" target="_blank" >Publicité digitale</a></li>
                                          </ul>
                                          <hr>
                                          <div style="text-align:center;padding:0px 18px 9px;color:#08203a;font-size:24px;font-style:italic;font-weight:bold;word-break:break-word;line-height:150%;text-align:left">8 questions que vous devez vous poser avant de concevoir votre stratégie digitale</div>
                                          <img  alt="" src="https://ci5.googleusercontent.com/proxy/YC-t_38K8DZgrzvKxEGJFDbswsJ7Kgbpwh5MSu-Y0OcOn9kql0DaVnvBNLDpEcBY7c-X4Fx3xICZapMnoJdu_lxNHjTcEITb93ZxLZkTDN9zhUokKGHYixSANCD_1o6tZZIsefS89lVzaveGFrFh1nIP2Hpf8Q=s0-d-e1-ft#https://mcusercontent.com/237f858f601a344d7b46df34d/images/61f9d775-f73e-4b2a-b0b8-0362a70f4c7e.jpg" width="564" style=" max-width:730px;padding-bottom:0;display:inline!important;vertical-align:bottom;border:0;height:auto;outline:none;text-decoration:none">
                                          <div style="text-align:justify">Le secret d\'une présence forte sur le web réside dans l\'élaboration d\'une stratégie marketing digital bien ficelée, étant en harmonie avec les orientations stratégiques de votre entreprise.
                                
                                          Pour ce faire, il existe un certain nombre de questions qu\'il est indispensable de vous poser en amont afin de construire une stratégie digitale performante</div>
                                                      </div>
                                                      <button style="background-color: rgb(8, 8, 56);color: azure;width: 300px; height: 50px;text-align: center;font-size: 16px;display: block;
                                                      margin-left: auto;
                                                      margin-right: auto">En savoir plus</button>             
                                    </div>
                                
                                      </form>
                                </body>
                                </html>
                                ';
                                $headers="MIME-Version : 1.0"."\r\n";
                                $headers .="Content-type:text/html;charset=iso-8895-1";
                                //recipient email here
                                $rec = $_POST['email'];
                                //send email
                                mail($rec,$sub,$message,$headers);
                                $message_sent=true;
        }
}
?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
         
            <div class="wrapper">
            <div class="backgrcl"></div>
                    <nav class="logo">
                            <img src="img/LOG.jpg" > 
                            <h1>Auditez votre marketing digital</h1>
                    </nav>
                    <section class="top-container">
                                     <?php
                                    if($message_sent):
                                    ?>
                                         <h1 style="text-align: center;">merci </h1>
                                        
                                        <?php 
                                        else:
                                        ?>
                    <form class="showcase1" method="POST" >
                    <p style="    margin-left:18%;margin-top: 39px;font-size: 19px;font-family: sans-serif;">Pour consulter les résultats de votre audit, merci de renseigner les informations suivantes :</p>
                     <div class="al" style="width: 90%;"> 
                        <img src="img/st.jpg" class="imgform" style="width: 100%; height:400px; border-radius: 10px;box-shadow: var(--shadow);">
                        
                        <div class="multichoix4">
                       
                            <div class="choix" id="cnt">
                                    <div class="champ">Nom *:</div>
                                    <input type="text" class="text" name="nom"> 
                            </div>
                            <div class="choix"  id="cnt">
                                    <div class="champ">Prenom *:</div>
                                    <input type="text" class="text" name="prenom"> 
                            </div>
                            <div class="choix"  id="cnt">
                                    <div class="champ">Adresse email *:</div>
                                    <input type="text" class="text" name="email"> 
                            </div>
                            <div class="choix"  id="cnt"> 
                                    <div class="champ">Numero de telephone *:</div>
                                    <input type="text" class="text" name="tele"> 
                            </div>
                            <div class="choix"  id="cnt">
                                    <div class="champ">Poste occupé :</div>
                                    <input type="text" class="text" name="post"> 
                            </div>
                            <div class="choix"  id="cnt">
                                    <div class="champ"> Entreprise :</div>
                                    <input type="text" class="text" name="entrep"> 
                            </div>
                            <div class="choix"  id="cnt">
                                    <div class="champ">Site web :</div>
                                    <input type="text" class="text" name="stweb"> 
                            </div>
                        </div>
                    </div>  
                            <button type="submit" name="submit" class="btncommence"><a href="resultat.php">Obtenier mes resultats</a></button>
                        
                    </form>
                               <?php endif; ?>
                    </section>
    
                </div>
                                    
</body>
</html>