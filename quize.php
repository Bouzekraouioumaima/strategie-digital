<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    </head>
<body>
    <div class="wrapper">
    <div class="backgrcl1"></div>
        <!-- Navigation -->
        <nav class="logo">
          <img src="img/LOG.jpg" > 
          <h1>Auditez votre marketing digital</h1>
        </nav>
    
        <!-- Top Container -->
    <section class="top-container">
     <form class="showcase1" name="quiz" method="get"  action="">
                <div class="loop" id="form">
                                <div id="navnav">
                                        <nav class="main-nav">
                                                <ul>
                                                <li>
                                                <a href="#" id="strategie">statégie</a>
                                                </li>
                                                <li>
                                                <a href="#" id="data">Data</a>
                                                </li>
                                                <li>
                                                <a href="#" id="content">Content</a>
                                                </li>
                                                <li>
                                                <a href="#" id="seo">SEO</a>
                                                </li>
                                                <li>
                                                <a href="#" id="social">Social</a>
                                                </li>
                                                <li>
                                                <a href="#" id="sea">SEA/SEM</a>
                                                </li>
                                                <li>
                                                        <a href="#" id="ui">UI/UX</a>
                                                </li>
                                                </ul>
                                        
                                        </nav>
                                </div>
                                <div class="strategie">
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>A propos de votre entreprise</h1>
                                                        <p>Permettez-nous d'apprendre un peu plus sur cotre entreprise</p>
                                                </div>
                                                <div class="multichoix">
                                                <div class="choix"id="choixtext" >
                                                
                                                        <p>Vous operez plutot en : 
                                                        <input type="radio" value="B2B " name="B2C" checked>B2B</input>
                                                        <input type="radio"  name="B2C" value="B2C ">B2C</input>
                                                        </p>
                                                </div>
                                                <div class="choix">
                                                        <select >
                                                        <option>Quel est votre chiffre d'affaire ?</option>
                                                        <option>Inferieure de 5 M DH</option>
                                                        <option>De 5 a 20 Mdh</option>
                                                        <option>De 20 a 100 M DH</option>
                                                        <option>Plus de 100 M DH</option>
                                                        </select>   
                                                </div>
                                                <div class="choix">
                                                        <select >
                                                        <option>Quel est l'objectif principal de votre marketing digital ?</option>
                                                        <option>Je veux assurer une presence minimale sans objectif commercial</option>
                                                        <option>Je veux acquérir de nouveaux leods</option>
                                                        <option>Je veux développer la notoriété de ma marque</option>
                                                        <option>Augmenter les ventes de ma plateforme e-commerce</option>
                                                        </select>   
                                                </div>                
                                                <div class="choix">
                                                        <select >
                                                        <option>Quel est le panier moyen de vos clients ?</option>
                                                        <option>Inferieure de 1000DH</option>
                                                        <option>Entre 1.000 er 5.000DH</option>
                                                        <option>De 5.000 a 20.000 DH</option>
                                                        <option>Plus à 20.000DH</option>
                                                        </select>   
                                                
                                                </div>
                                                <div class="choix">
                                                        <select >
                                                        <option>Quel est votre budget annuel en marketing digital ?</option>
                                                <option>Inferieure de 100.000 DH</option>
                                                <option>Entre 100.00 et 500.000 Mdh</option>
                                                <option>Entre 500.00 et 1.000.000 DH</option>
                                                <option>Supérieur à 01 million de  DH</option>
                                                </select>   
                                                </div>
                                                <div class="choix">
                                                        <select >
                                                        <option>Qui s'occupe de votre marketing digital ?</option>
                                                        <option>Je fais tout en interne</option>
                                                        <option>Je fais appel à une agence digital</option>
                                                        <option>je prends en charge une partie en interne et je sous-traite une partie en agence</option>
                                                
                                                        </select>   
                                                
                                                </div>
                                                <div class="choix" id="choixtext">
                                                        <p>Avez-vous un site web : 
                                                        <input type="radio" name="site5" value="oui" checked>Oui</input> 
                                                        <input type="radio"  name="site5" value="non">Non</input>  
                                                        </p>
                                                </div>
                                                
                                                </div>
                                        
                                        </div>
                                        <div class="page" >
                                        
                                                <div class="hder">
                                                        <h1>Avez-vous déjà établi vos fichies de buyer personas ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                <div class="choix"id="choixtext" >
                                                        <label> 
                                                        <input type="radio"  name="site0" id="radio" value="oui" >Oui</input>
                                                        </label>
                                                </div>
                                        
                                                <div class="choix" id="choixtext">
                                                        <label>  
                                                        <input type="radio" name="site0"  value="non" id="radio" checked> Non</input>
                                                        </label>
                                                </div>
                                                <div class="choix">
                                                
                                                </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                        <div class="hder">
                                                                <h1>Est-ce que vous avez fixé des objectifs chiffrés pour votre stratégie digitale ?</h1>
                                                        </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" value="oui" name="site1" id="radio" >Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="site1" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                        <div class="hder">
                                                                <h1>Avez-vous défini votre tunnel de conversion de manière claire  ?</h1>
                                                        </div>
                                                        <div class="multichoix2">
                                                                <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" value="oui" name="site2" id="radio" >Oui</input>
                                                                </label>
                                                                </div>
                                                
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="site2" value="non" id="radio" checked> Non</input>
                                                                        </label>
                                                                </div>
                                                        </div>
                                        </div>
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Avez-vous déjà étudié le parcours d’achat de vos cibles ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                        <label> 
                                                        <input type="radio" value="oui" name="site3" id="radio" >Oui</input>
                                                        </label>
                                                </div>
                                        
                                                <div class="choix" id="choixtext">
                                                        <label>  
                                                        <input type="radio" name="site3" value="non" id="radio" checked> Non</input>
                                                        </label>
                                                </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Avez-vous mis en place un tableau de bord pour le suivi de vos KPIs ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" value="oui" name="site4" id="radio" >Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="site4" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                </div>
                                <div class="data">
                                        <div class="page">
                                                                        <div class="hder">
                                                                                <h1>Quels outils de collecte de data utilisez-vous ? (Plusieurs choix possibles)</h1>
                                                                        </div>
                                                                <div class="multichoix">
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="checkbox"  name="dt" >Hotjar</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="checkbox" name="dt"  > Google Search console</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="checkbox"  name="dt" >Google Analytics</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="checkbox" name="dt"  > Linkdin: Inside tag</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="checkbox"  name="dt" >Pop-ups newletter</input>
                                                                                </label>
                                                                        </div>
                                                        
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="checkbox" name="dt"  > Google Facbook</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="checkbox"  name="dt">CRM pour la gestion de vos leads</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="checkbox" name="dt"  > One Signal</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="checkbox"  name="dt" value="Aucun" checked>Aucun</input>
                                                                                </label>
                                                                        </div>
                                                        
                                                                </div> 
                                        </div>  
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Avez-vous une solution de marketing automation (scénarios automatisés d’emailing) ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" value="oui" name="dt1" id="radio">Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="dt1" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Avez-vous mis en place des UTM vous permettant de segmenter votre trafic et vos conversions ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" value="oui" name="dt2" id="radio">Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="dt2" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                </div>
                                <div class="content">
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Produisez-vous des contenus à caractère non commercial ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" value="oui" name="cnt" id="radio">Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="cnt" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Est-ce que vos contenus répondent à des problématiques réelles exprimés par vos clients?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio"  name="cnt1" id="radio" value="oui">Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="cnt1" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Est-ce que vous adaptez vos contenus à chacun de vos personas ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio"  name="cnt3" value="oui" id="radio" >Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="cnt3" value="non"  id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Produisez-vous des vidéos informatives autour de vos produits et services ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio"  name="cnt4" value="oui" id="radio" >Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="cnt4"value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Avez-vous produit des vidéos témoignages de vos clients ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" name="cnt5"value="oui" id="radio" >Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="cnt5" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                </div>
                                <div class="SEO">
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Est ce que vos contenus sont rédigés selon une stratégie de mots clés bien définie ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio"  name="seo" id="radio" value="oui">Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="seo" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" >
                                                <div class="hder">
                                                        <h1>Faites-vous un audit régulier de la situation du référencement naturel de votre site web ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio"  name="seo1" id="radio" value="oui">Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="seo1" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page">                                                  
                                                <div class="hder">
                                                                        <h1>Comparé à vos concurrents, votre positionnement sur les principaux mots clés organiques est : (Un seul choix possible)</h1>
                                                                </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio" name="seo2" id="seo2m">Meilleur que mes concurrents </input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio"  name="seo2" id="seo2mn"> Moins performant que mes concurrents</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio"  name="seo2" id="seo2s">Similaire à mes concurrents</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="seo2" id="seo2j" checked>  Je ne sais pas </input>
                                                                        </label>
                                                                </div>
                                                        </div>
                                        </div>
                                        <div class="page"  >
                                                <div class="hder">
                                                        <h1>Avez-vous installé un outil d’optimisation du référencement naturel sur votre site web (Type Yoast) ?</h1>
                                                </div>
                                                <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio"  name="seo3" id="radio" value="oui" >Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="seo3" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div>
                                        <div class="page" class="sioui"> 
                                                                <div class="hder">
                                                                        <h1>Si oui, renseignez les optimisations déjà réalisées : (plusieurs choix possibles)</h1>
                                                                </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox" name="seo4" >Les méta descriptions sont renseignées</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox"  name="seo4">Chacune de mes pages est optimisée pour un</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox"  name="seo4">Les images de mon site sont optimisées pour le</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="seo4">  Toutes mes pages contiennent des H1,H2.... </input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox"  name="seo4">Les titres de mes pages sont optimisées pour le</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="seo4">  Un maillage interne a été fait pour lier les </input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="seo4" value="Aucun" checked>  Aucune </input>
                                                                        </label>
                                                                </div>
                                                        </div>
                                        </div>
                                        <div class="page">
                                                                <div class="hder">
                                                                        <h1>Quelles optimisations hors site avez-vous mis en place pour votre référencement ? (plusieurs choix possibles)</h1>
                                                                </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox" name="seo4" > Une multitude de backlinks qui renvoient vers mon site </input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox"  name="seo4"> Je me suis inscrit dans plusieurs annuaires professionnels </input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox"  name="seo4"> J’ai fais un échange de liens avec des blogs connus </input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="seo4" value="Aucun" checked >  Aucune </input>
                                                                        </label>
                                                                </div>
                                                        </div>
                                        </div>
                                </div>
                                <div class="social">
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Vous êtes présent sur quels réseaux sociaux ? (plusieurs choix possibles) </h1>
                                                                </div>
                                                        <div class="multichoix">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox" name="soc" >Facebook</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="soc" > Instagram</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox" name="soc" >Youtube</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="soc"  > TikTOk</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox"  name="soc" >Twitter</input>
                                                                        </label>
                                                                </div>
                                                
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="soc" > Snapchat</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox" name="soc">Pinterest</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="soc"  > LinkdIn</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox" name="soc" value="Aucun" checked>Aucun</input>
                                                                        </label>
                                                                </div>
                                                
                                                        </div> 
                                                </div>
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Avez-vous déjà établi vos fichies de buyer personas ?</h1>
                                                                </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio" name="soc1" id="socs"> Souvent mais pas régulier </input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio"  name="soc1" id="socfr">  De manière fréquente et régulière </input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio"  name="soc1" id="socas"> Assez souvent </input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="soc1" id="socr">  Rarement </input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                <label>  
                                                                        <input type="radio" name="soc1" checked> Jamais</input>
                                                                        </label>
                                                                </div>
                                                                
                                                                </div>
                                                </div>
                                                <div class="page">
                                                        <div class="hder">
                                                                <h1>Avez-vous mis en place un tableau de bord pour le suivi des performances de vos réseaux sociaux ?</h1>
                                                        </div>
                                                        <div class="multichoix2">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio"  name="soc2" value="oui" id="radio" >Oui</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="soc2" value="non" id="radio" checked> Non</input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>
                                                </div>   
                                                <div class="page"> 
                                                        <div class="hder">
                                                                        <h1>Vos publications sont elles produites dans le cadre d’un planning éditorial préétabli ?</h1>
                                                                </div>
                                                        <div class="multichoix2">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio" value="oui" name="soc3" id="radio" >Oui</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="soc3"  value="non" id="radio" checked> Non</input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>  
                                                </div>
                                                <div class="page"> 
                                                        <div class="hder">
                                                                        <h1>Utilisez-vous des outils d’automatisation pour programmer vos publications (Type Agorapulse) ?</h1>
                                                                </div>
                                                        <div class="multichoix2">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio"  name="soc4" value="oui" id="radio" >Oui</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="soc4" value="non" id="radio" checked> Non</input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>  
                                                </div>
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Quel est le taux d’interaction moyen affiché par vos publications ?</h1>
                                                                </div>
                                                                <div class="multichoix3">
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="radio" name="soci1" id="socinfer">Inférieur à2% </input>
                                                                                </label>
                                                                        </div>
                                                        
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio"  name="soci1" id="socientre1"> Entre 5 et 10% </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio" name="soci1" id="socientre">  Entre 2 et 5% </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                        <label>  
                                                                                <input type="radio" name="soci1" id="socisup"> Supérieur à 10%</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="radio"  name="soci1" checked> Je ne sais pas </input>
                                                                                </label>
                                                                        </div>
                                                                </div>
                                                </div>
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Quel est votre temps moyen de réponse sur les réseaux sociaux ?</h1>
                                                                </div>
                                                                <div class="multichoix3">
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="radio" name="soci2" id="heur" >Dans l'heur </input>
                                                                                </label>
                                                                        </div>
                                                        
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio"  name="soci2" id="min"> Quelque minutes </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="radio"  name="soci2" id="jour">Dans la journée </input>
                                                                                </label>
                                                                        </div>
                                                        
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio" name="soci2" id="plusjour">  Plus qu'une journée </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                        <label>  
                                                                                <input type="radio" name="soci2" checked> Je ne réponds pas</input>
                                                                                </label>
                                                                        </div>
                                                                
                                                                </div>
                                                </div>
                                </div>
                                <div class="SEA">
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Quelles sont les plateformes publicitaires que vous utilisez ? (Plusieurs choix possibles)</h1>
                                                                </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox" name="sea" >Display </input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox"  name="sea"> Search</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox"  name="sea">LinkdIn</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="sea">  Youtube </input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                <label>  
                                                                        <input type="checkbox" name="sea"> Facebook</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                <label>  
                                                                        <input type="checkbox" name="sea" value="Aucun"> Autre</input>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Quel est le CPC moyen pour vos campagnes search ?</h1>
                                                                </div>
                                                                <div class="multichoix3">
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="radio" name="seacpc" id="seainfer">Inférieur à 5 dh </input>
                                                                                </label>
                                                                        </div>
                                                        
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio"  name="seacpc" id="seaentre1"> Entre 10 et 25 DH </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio" name="seacpc" id="seaentre">  Entre 5 et 10 dh </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                        <label>  
                                                                                <input type="radio" name="seacpc" id="seasup"> Supérieur à 25 dh</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="radio"  name="seacpc" checked> Je  ne sais pas </input>
                                                                                </label>
                                                                        </div>
                                                                </div>
                                                </div>
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Quel est le CTR moyen de vos campagne search ?</h1>
                                                                </div>
                                                                <div class="multichoix3">
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="radio" name="seactr" id="seactrinfer">Inférieur à 5% </input>
                                                                                </label>
                                                                        </div>
                                                        
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio"  name="seactr" id="seactrentre1"> Entre 10 et 15% </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio" name="seactr" id="seactrentre2">  Entre 5 et 10% </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                                <label>  
                                                                                <input type="radio" name="seactr" id="seactrentre">  Entre 15 et 20% </input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix" id="choixtext">
                                                                        <label>  
                                                                                <input type="radio" name="seactr" id="seactrsup"> Supérieur à 20%</input>
                                                                                </label>
                                                                        </div>
                                                                        <div class="choix"id="choixtext" >
                                                                                <label> 
                                                                                <input type="radio"  name="seactr" checked> Je  ne sais pas </input>
                                                                                </label>
                                                                        </div>
                                                                </div>
                                                </div>
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Quel type de campagnes vous utilisez (Plusieurs choix possibles)</h1>
                                                                </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox" name="sea1" checked>Notoriété </input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox"  name="sea1"> Engagement</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="checkbox"  name="sea1">Trafic</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="checkbox" name="sea1">  Conversion </input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>
                                                </div>
                                                <div class="page" >
                                                        <div class="hder">
                                                                <h1>Avez-vous mis en place des audiences personnalisées grâce à vos pixels - add to cart, initiate checkout ,purchase, Lookalikes ?</h1>
                                                        </div>
                                                        <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" value="oui" name="seard" id="radio" >Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="seard" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                                <div class="page">
                                                                <div class="hder">
                                                                        <h1>Arrivez-vous à analyser et à interpréter la data de vos campagnes en vue de les optimiser ?</h1>
                                                                </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio" name="sea2" id="df" > Difficilement  </input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio"  name="sea2" id="parft"> Oui, parfaitement </input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio"  name="sea2" id="myn"> Moyennement </input>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="page" >
                                                        <div class="hder">
                                                                <h1>Est-ce que vos campagnes sont optimisées sur la base de tests préalables ?</h1>
                                                        </div>
                                                        <div class="multichoix2">
                                                        <div class="choix"id="choixtext" >
                                                                <label> 
                                                                <input type="radio" value="oui" name="searadio" id="radio" >Oui</input>
                                                                </label>
                                                        </div>
                                                
                                                        <div class="choix" id="choixtext">
                                                                <label>  
                                                                <input type="radio" name="searadio" value="non" id="radio" checked> Non</input>
                                                                </label>
                                                        </div>
                                                
                                                </div>
                                        </div> 
                                </div>
                                <div class="ui">
                                        <div class="page" >
                                                        <div class="hder">
                                                                <h1>Utilisez-vous Hotjar pour optimiser l’expérience de navigation de vos pages web ?</h1>
                                                        </div>
                                                        <div class="multichoix2">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio" value="oui" name="ui1" id="radio">Oui</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="ui1" value="non" id="radio" checked> Non</input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>
                                        </div>
                                        <div class="page" >
                                                        <div class="hder">
                                                                <h1>Votre site web est-il mobile friendly ?</h1>
                                                        </div>
                                                        <div class="multichoix2">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio" value="oui" name="ui2" id="radio">Oui</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="ui2" value="non" id="radio" checked> Non</input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>
                                        </div>
                                        <div class="page" >
                                                        <div class="hder">
                                                                <h1>Utilisez-vous des outils d’A/B testing comme Google Optimize ?</h1>
                                                        </div>
                                                        <div class="multichoix2">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio" value="oui" name="ui3" id="radio">Oui</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="ui3" value="non" id="radio" checked> Non</input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>
                                        </div>
                                        <div class="page" >
                                                        <div class="hder">
                                                                <h1>Comment jugez-vous le temps de chargement de votre site internet ?</h1>
                                                        </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio"  name="ui4" id="ts" >Trés satisfaisant</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="ui4" id="myn" > Moyen</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="ui4" id="pl" > Plutot lent</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="ui4" id="s"  > Satisfaisant</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" name="ui4"checked> Trés lent</input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>
                                        </div>
                                        <div class="page" >
                                                        <div class="hder">
                                                                <h1>Votre taux de rebond est à quel niveau ?</h1>
                                                        </div>
                                                        <div class="multichoix3">
                                                                <div class="choix"id="choixtext" >
                                                                        <label> 
                                                                        <input type="radio" id="inf" name="ui5">Inférieur à 10%</input>
                                                                        </label>
                                                                </div>
                                                        
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" id="ent" name="ui5" > Entre 20 et 40%</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio" id="ent1" name="ui5" >Entre 10 et 20%</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio"  name="ui5" checked> Je ne sais pas</input>
                                                                        </label>
                                                                </div>
                                                                <div class="choix" id="choixtext">
                                                                        <label>  
                                                                        <input type="radio"  name="ui5"> Plutrot lent</input>
                                                                        </label>
                                                                </div>
                                                        
                                                        </div>
                                        </div>
                                </div>
                                <div class="btns" >
                                        <button type="button" name="submit" class="btncommence" id="suiv" onclick="prochpage(1)">Suivant</button>
                                        <button type="button" name="submit" class="btncommence" id="presed" onclick="prochpage(-1)" >Présédent</button>
                                        <p id="erreur" ></p>
                                </div>      
                               
        </div> 
                 
         </form>
        </section>
      </div>
      <script type="text/javascript">
                                var currentTab = 0; 
                               
                                showTab(currentTab);
                                
                function showTab(n) {
                                var newpage = document.getElementsByClassName("page");
                                newpage[n].style.display = "block";
                                if (n == 0) {
                                        /*  document.getElementById("navnav").style.display="none";*/
                                        $('#navnav, #presed').removeClass('inlineBtn');
                                } else {
                                        /*  document.getElementById("presed").style.display = "inline";*/
                                        $('#erreur').removeClass('inlineBtn');
                                        $('#navnav, #presed').addClass('inlineBtn');
                                }
                                if (n == (newpage.length - 1)) {
                                document.getElementById("suiv").innerHTML = "Submit";
                                document.getElementById("suiv").addEventListener("click",function(){
                                        /* window.document.location='./form.php'+'?porstrategie='+porstrategie;*/
                                        localStorage.setItem('variabls',porstui);
                                        window.document.location="form.php";});
                               
                            } else {
                                document.getElementById("suiv").innerHTML = "Next"; } }
                                
                        function prochpage(n){
                                var porstrategie=0 ;
                                 var porstdata=0,porstcnt=0 ,porstseo=0 ,porstsoc=0,porstsea=0 ,porstui=0;
                                // This function will figure out which tab to display
                                var newpage = document.getElementsByClassName("page");
                                if(n==1 && !validateForm() ){
                                document.getElementById("erreur").innerHTML="remplir tout les champs";
                                $('#erreur').addClass('inlineBtn');
                                return false;  }
                                newpage [currentTab].style.display = "none";
                                 // Increase or decrease the current tab by 1:
                                currentTab = currentTab + n;
                                showTab(currentTab);
                                validation();
                             
                                }
                function validateForm() {
                            // This function deals with validation of the form fields
                            var x, y, i, valid = true;
                            var pg=1;
                            x = document.getElementsByClassName("page");
                            y = x[currentTab].getElementsByTagName("select");
                          
                            // A loop that checks every input field in the current tab:
                            for (i = 0; i < y.length; i++) {
                                // If a field is empty..
                                
                                if (y[i].selectedIndex == "0" ) {
                                // add an "invalid" class to the field:
                                y[i].focus();
                                // and set the current valid status to false
                                valid = false;}
                            }
                            return valid; // return the valid status
                }
           
function validation(){
        
                                if(currentTab < 6){
                                        /***********strategie */
                                        $('#strategie').addClass('changenav');
                                        if(document.quiz.site0.value=="oui"){porstrategie=porstrategie+20;}
                                        if(document.quiz.site1.value=="oui"){porstrategie=porstrategie+20;}
                                        if(document.quiz.site2.value=="oui"){porstrategie=porstrategie+20;}
                                        if(document.quiz.site3.value=="oui"){porstrategie=porstrategie+20;}
                                        if(document.quiz.site4.value=="oui"){porstrategie=porstrategie+20;}
                                        alert("stategie"+porstrategie);
                                }else if( currentTab >=6 && currentTab <9){
                                        /***********data */
                                        $('#strategie').removeClass('changenav');
                                        $('#data').addClass('changenav');
                                        var checkbutton =document.getElementsByName('dt');
                                        for( i=0;i<checkbutton.length;i++){if(checkbutton[i].checked &&  checkbutton[i].value != "Aucun"){
                                        porstdata=porstdata+3.33; }  }  
                                        if(document.quiz.dt1.value == "oui"){porstdata=porstdata+33.33;}
                                        if(document.quiz.dt2.value == "oui"){porstdata=porstdata+30.33;}
                                        alert("stategie"+porstrategie);
                                }else if(currentTab>=8 && currentTab<15){
                                        /***********content */
                                        $('#content').addClass('changenav');
                                        $('#data').removeClass('changenav');
                                        if(document.quiz.cnt.value == "oui"){porstcnt=porstcnt+20;}
                                        if(document.quiz.cnt1.value == "oui"){porstcnt=porstcnt+20;}
                                        if(document.quiz.cnt3.value == "oui"){porstcnt=porstcnt+20;}
                                        if(document.quiz.cnt4.value == "oui"){porstcnt=porstcnt+20;}
                                        if(document.quiz.cnt5.value== "oui"){porstcnt=porstcnt+20;}
                                }else if(currentTab>14 && currentTab<21){
                                        /***********SEO */
                                        var checkbuttonseo =document.getElementsByName('seo4');
                                        var checkbuttonseo5 =document.getElementsByName('seo5');
                                        $('#seo').addClass('changenav');
                                        $('#content').removeClass('changenav');
                                        if(document.quiz.seo.value == "oui"){porstseo=porstseo+16.66;}
                                        if(document.quiz.seo1.value == "oui"){porstseo=porstseo+16.66;}
                                        if(document.getElementById("seo2m").checked){porstseo=porstseo+8.33;}
                                        if(document.getElementById("seo2s").checked){porstseo=porstseo+5.55;}
                                        if(document.getElementById('seo2mn').checked){porstseo=porstseo+2.77;}
                                        if(document.quiz.seo3.value == "oui"){porstseo=porstseo+16.66;}
                                        for( i=0;i<checkbuttonseo.length;i++){if(checkbuttonseo[i].checked &&  checkbuttonseo[i].value != "Aucun"){
                                                porstseo=porstseo+2.77; }  }  
                                        for( i=0;i<checkbuttonseo5.length;i++){ if(checkbuttonseo5[i].checked &&  checkbuttonseo5[i].value != "Aucun"){
                                                porstseo=porstseo+5.55; }  } 
                                }else if(currentTab>20 && currentTab<28){
                                        /*******social */
                                        $('#seo').removeClass('changenav');
                                        $('#social').addClass('changenav');
                                        var checkbuttonsoc =document.getElementsByName("soc");
                                        for( i=0;i<checkbuttonsoc.length;i++){ if(checkbuttonsoc[i].checked &&  checkbuttonsoc[i].value != "Aucun"){porstsoc=porstsoc + 1.77;  }  }
                                       if(document.getElementById("socs").checked){porstsoc=porstsoc+2.8;}
                                        if(document.getElementById("socfr").checked){porstsoc=porstsoc+5.7;}
                                        if(document.getElementById("socas").checked){porstsoc=porstsoc+4.3;}          
                                        if(document.getElementById("socr").checked){porstsoc=porstsoc+1.4;}
                                        if(document.quiz.soc2.value == "oui"){porstsoc=porstsoc+14.28;} 
                                        if(document.quiz.soc3.value == "oui"){porstsoc=porstsoc+14.28;} 
                                        if(document.quiz.soc4.value == "oui"){porstsoc=porstsoc+14.28;} 
                                        if(document.getElementById("socinfer").checked){porstsoc=porstsoc+1.58;}
                                        if(document.getElementById("socientre1").checked){porstsoc=porstsoc+4.74;}
                                        if(document.getElementById("socientre").checked){porstsoc=porstsoc+6.32;}          
                                        if(document.getElementById("socisup").checked){porstsoc=porstsoc+3.16;}
                                        if(document.getElementById("plusjour").checked){porstsoc=porstsoc+1.58;}
                                        if(document.getElementById("jour").checked){porstsoc=porstsoc+4.74;}
                                        if(document.getElementById("heur").checked){porstsoc=porstsoc+6.32;}          
                                        if(document.getElementById("min").checked){porstsoc=porstsoc+1.4;}
                                }else if(currentTab>27 && currentTab <= 33){
                                        /********* sea */
                                        $('#social').removeClass('changenav');
                                        $('#sea').addClass('changenav');
                                        var checkbuttonsea =document.getElementsByName("sea");
                                        for( i=0;i<checkbuttonsea.length;i++){ if(checkbuttonsea[i].checked &&  checkbuttonsea[i].value != "Aucun"){porstsea=porstsea + 1.77;  }  }
                                        if(document.getElementById("seainfer").checked){porstsea=porstsea+3.12;}
                                        if(document.getElementById("seaentre1").checked){porstsea=porstsea+9.36;}
                                        if(document.getElementById("seaentre").checked){porstsea=porstsea+12.5;}          
                                        if(document.getElementById("seasup").checked){porstsea=porstsea+6.24;}
                                        if(document.getElementById("seactrinfer").checked){porstsea=porstsea+2.5;}
                                        if(document.getElementById("seactrentre1").checked){porstsea=porstsea+8;}
                                        if(document.getElementById("seactrentre2").checked){porstsea=porstsea+5.5;}  
                                        if(document.getElementById("seactrentre").checked){porstsea=porstsea+12.5;}          
                                        if(document.getElementById("seactrsup").checked){porstsea=porstsea+3;}
                                        var checkbuttonsea1 =document.getElementsByName("sea1");
                                        for( i=0;i<checkbuttonsea1.length;i++){ if(checkbuttonsea1[i].checked){porstsea=porstsea + 5;  }  }
                                        if(document.quiz.seard.value == "oui"){porstsea=porstsea+20;}
                                        if(document.getElementById("df").checked){porstsea=porstsea+8.32;}  
                                        if(document.getElementById("parft").checked){porstsea=porstsea+12.5;}          
                                        if(document.getElementById("myn").checked){porstsea=porstsea+4.16;} 
                                        if(document.quiz.searadio.value == "oui"){porstsea=porstsea+20;}
                                }else if(currentTab >= 34 && currentTab<39){
                                        /******ui */
                                        $('#sea').removeClass('changenav');
                                        $('#ui').addClass('changenav');
                                        if(document.quiz.ui1.value == "oui"){porstui=porstui+20;}
                                        if(document.quiz.ui2.value == "oui"){porstui=porstui+20;}
                                        if(document.quiz.ui3.value == "oui"){porstui=porstui+20;} 
                                        if(document.getElementById("ts").checked){porstui=porstui+20;}
                                        if(document.getElementById("s").checked){porstui=porstui+15;}
                                        if(document.getElementById("myn").checked){porstui=porstui+10;}
                                        if(document.getElementById("pl").checked){porstui=porstui+5;}
                                        if(document.getElementById("inf").checked){porstui=porstui+20;}
                                        if(document.getElementById("ent").checked){porstui=porstui+13.34;}
                                        if(document.getElementById("ent1").checked){porstui=porstui+6.68;}
                                }
}
      </script>
</body>
    </html>
