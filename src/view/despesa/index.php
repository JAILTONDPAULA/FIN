<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESPESA</title>
    <link rel="stylesheet" href="/css/receita/style.min.css">
    <script src="/js/jquery.v3.7.1.min.js" defer></script>
    <script src="/js/jquery.mask.js" defer></script>
    <script src="/js/receita.min.js" defer></script>
</head>
<body>
     <?php require_once(__DIR__.'/../../assets/template/load.php'); ?>
     <?php require_once(__DIR__.'/../../assets/template/mesage.php'); ?>
     <?php require_once(__DIR__.'/../../assets/template/modal.php'); ?>
     <section class="menu">
          <div>FIN</div>
          <ul>
               <li><a href="/receita/">RECEITAS</a></li>
               <li><a href="/despesa/">DESPESAS</a></li>
          </ul>
          <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25px" height="25px" fill="currentColor"><path d="M14.08,15.59L16.67,13H7V11H16.67L14.08,8.41L15.5,7L20.5,12L15.5,17L14.08,15.59M19,3A2,2 0 0,1 21,5V9.67L19,7.67V5H5V19H19V16.33L21,14.33V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19Z" /></svg></i>
     </section>
     <section id="adicionar">
          <button type="button" class="ok">CADASTRAR</button>
     </section>
     <div id="receitas">
          <h6 class="titulo">DESPESAS</h6>
          <section class="valor total">
               <p>R$ 20.000,00</p>
          </section>
          <table>
               <tr class="cabecalho">
                    <th>DESCRIÇÃO</th>
                    <th>MARCA</th>
                    <th>QUANTIDADE</th>
                    <th>UNIDADE</th>
                    <th>VALOR UNITÁRIO</th>
                    <th>VALOR TOTAL</th>
                    <th>DATA</th>
                    <th>ANO/MÊS</th>
                    <th>PARCELADO</th>
                    <th></th>
                    <th></th>
                    <th></th>
               </tr>
          </table>
     </div>
</body>
</html>