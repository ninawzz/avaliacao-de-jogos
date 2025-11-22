
<div class="bg-black" style="position: relative; text-align: center;">
    <img src="imagens/banner.png" style="max-width:50%; height:auto;">

    <h1 style="position: absolute; top: 40%; left: 70%; transform: translateX(-50%); 
               color: white; font-size: 2em; font-weight: bold;">
        Game Boxe
    </h1>
    <p style="position: absolute; top: 50%; left: 70%; transform: translateX(-50%);
              color: white; font-size: 1.0em; background: rgba(0,0,0,0.5); padding: 10px; border-radius: 5px;">
        Acompanhe os jogos que você já zerou. <br>  
        Salve os que você quer jogar. <br>  
        Compartilhe com seus amigos o que realmente vale a pena.
    </p>
</div>

   <div class="bg-secondary p-4">
    <h5 class="text-white text-center mb-3">Jogos populares essa semana</h5>
    
    <div class="carrossel-container">
        <?php
            include_once "componentes/carrossel.php";
        ?>
        </div>
    </div>
    </div>

    <div class="bg-light">
        <h5 class="text-black mx-4">Lista de jogos</h5><img src="imagens/estrela.png" width="20" height="20">


    </div>
</div>