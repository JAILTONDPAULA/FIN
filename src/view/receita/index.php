<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEITA</title>
    <link rel="stylesheet" href="/css/receita/style.min.css">
    <script src="/js/jquery.v3.7.1.min.js" defer></script>
    <script src="/js/jquery.mask.js" defer></script>
    <script src="/js/receita.min.js" defer></script>
</head>
<body>
     <?php require_once(__DIR__.'/../../assets/template/load.php'); ?>
     <?php require_once(__DIR__.'/../../assets/template/mesage.php'); ?>
     <?php require_once(__DIR__.'/../../assets/template/modal.php'); ?>
     <?php require_once(__DIR__.'/../../assets/template/menu.php'); ?>
     <div id="receitas">
          <h6 class="titulo">RECEITAS</h6>
          <section class="valor total">
               <p>R$ 20.000,00</p>
          </section>
          <table>
               <tr class="cabecalho">
                    <th>ORIGEM</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                    <th>ANO/MÊS</th>
                    <th>ENTRADA MENSAL</th>
                    <th></th>
                    <th></th>
                    <th></th>
               </tr>
          </table>
          <button type="button" class="ok"><svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="currentColor"><path d="M412-412H154v-136h258v-259h136v259h258v136H548v258H412v-258Z"/></svg></button>
     </div>
</body>
</html>