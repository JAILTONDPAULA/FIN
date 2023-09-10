<?php
use YellowEyes\Fin\Utils\DateUtil;
?>
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
     <form id="receita">
          <h6 class="titulo">CADASTRO RECEITA</h6>
          <div class="form col-4">
               <label for="origem">ORIGEM</label>
               <input type="text" name="origem" id="origem" list="list_origem" minlength="3" maxlength="250" autocomplete="off" required>
               <datalist id="list_origem"></datalist>
          </div>
          <div class="form center col">
               <label for="valor">VALOR</label>
               <input type="tel" name="valor" id="valor" minlength="4" maxlength="12" required>
          </div>
          <div class="form center col">
               <label for="data">DATA</label>
               <input type="date" name="data" id="data" required>
          </div>
          <div class="form center col">
               <label for="ano">ANO</label>
               <select name="ano" id="ano"><?php echo DateUtil::years() ?></select>
          </div>
          <div class="form center col">
               <label for="mes">MÊS</label>
               <select name="mes" id="mes"><?php echo DateUtil::months() ?></select>
          </div>
          <div class="form center col">
               <label for="mensal">ENTRADA MENSAL</label>
               <select name="mensal" id="mensal">
                    <option value="N">NÃO</option>
                    <option value="S">SIM</option>
               </select>
          </div>
          <div class="form col-6">
               <label for="observacao">OBSERVAÇÃO</label>
               <textarea name="observacao" id="observacao" maxlength="250" rows="4"></textarea>
               <small><span>250</span>/250</small>
          </div>
          <div class="form_button">
               <button type="submit" class="ok"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25px" height="25px" fill="currentColor"><path d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" /></svg></button>
          </div>
     </form>
     <div id="receitas">
          <h6 class="titulo">RECEITAS</h6>
          <table>
               <tr class="cabecalho">
                    <th>ORIGEM</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                    <th>ANO/MÊS</th>
                    <th>ENTRADA MENSAL</th>
                    <th></th>
               </tr>
          </table>
     </div>
</body>
</html>