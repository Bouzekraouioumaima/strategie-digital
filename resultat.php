<!doctype html>
    <html>
        <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.0/circle-progress.min.js"></script>
        </head>
        <body>
        <div class="wrapper">
        <div class="backgrcl"></div>
        <!-- Navigation -->
                <nav class="logo">
                <img src="img/LOG.jpg" > 
                <h1>Vos résultats</h1>
                </nav>
            
                <!-- Top Container -->
             <section class="top-container">
                    <form class="showcase1" >
                        <div class="loop" id="form" style="align-self:auto;">
                        <p id="p1">Hello World!</p>
                        <section id="circleBar" style="display: flex;">
                                   
                                    <div class="round" data-value="0.87" data-size="150" data-thickness="12" style="    padding-top: 20px;">
                                    
                                        <strong  style="position: absolute;transform: translate(-140%,130%);font-size: 30px;color: #212121;"></strong>
                                            <span></span>
                                    </div>
                                    <h1 style="margin-top: 80px;">Vous êtes à mi-chemin.</h1>
                         </section>
                          <script>
                                        function Circle(el){
                                            $(el).circleProgress({fill:{color:'#3182c6'}})
                                            .on('circle-animation-progress',function(event,progress,stepValue){
                                                $(this).find('strong').text(String(stepValue.toFixed(2))+'%'
                                                );
                                            });
                                        };
                                        Circle('.round');
                        </script>
                        <div>
                            <p class="Presultat">
                            Vous avez fait la moitié du chemin, et c'est déjà très bien. Prenez un grand souffle et repartez pour un deuxième tour. La réussite n'est jamais trop loin.
                            </p>
                        </div>
                      <!--resultat-->
                        <div class="result" >
                                <div class="imagresultat" > 
                                <div style="display: flex;">
                                <span>A+</span>
                                   <p><strong> Stratégie de contenu</strong></p>
                                </div>
                                           
                                
                                <div class="progress">
                                    <div class="progress-done" >
                                        70%
                                    </div>
                                    <script>
                                        const progress = document.querySelector('.progress-done');
                                            progress.style.width = progress.getAttribute(lcl) + '%';
                                            progress.style.opacity = 1;

                                    </script>
                                </div>
                                </div>
                                <div class="note">
                                    <p>Vous semblerez avoir zappé la partie la plus importante de votre marketing digital. Inutile de vous rappeler que sans stratégie claire et précise, vos efforts risquent de ne pas donner fruit. Si vous vous demandez pourquoi vos performances ne décollent toujours pas, vous avez peut être là un début de réponse.</p>
                                </div>
                        </div>
                        <div class="result">

                        </div>
                        <div class="result">

                        </div>
                        <div class="result">

                        </div>





                        </div>
                 </form>
            </section>
            <script>
            /*var lcl =document.location.search.replace(/^.*?\=/,'');*/
    var lcl =localStorage.getItem('strategie');
document.getElementById("p1").innerHTML = lcl;
</script>
        </div>
        </body>
    </html>