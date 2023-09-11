<?php use YellowEyes\Fin\Utils\DateUtil;?>  
<i><svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="currentColor"><path d="m346-272 134-134 134 134 74-74-134-134 134-134-74-74-134 134-134-134-74 74 134 134-134 134 74 74ZM480-34q-92.64 0-174.467-34.604-81.828-34.603-142.077-94.852-60.249-60.249-94.852-142.077Q34-387.36 34-480q0-92.896 34.662-174.449 34.663-81.553 95.013-141.968 60.35-60.416 142.076-94.999Q387.476-926 480-926q92.886 0 174.431 34.584 81.544 34.583 141.973 95.012 60.429 60.429 95.012 142Q926-572.833 926-479.917q0 92.917-34.584 174.404-34.583 81.488-94.999 141.838-60.415 60.35-141.968 95.013Q572.896-34 480-34Z"/></svg></i>
<h6 class="titulo">CADASTRO RECEITA</h6>
<div class="form col-4">
    <label for="origem">ORIGEM</label>
    <input type="text" name="origem" id="origem" list="list_origem" minlength="3" maxlength="250" autocomplete="off" value="<?php echo @$_GET['origin']['description']; ?>" required>
    <datalist id="list_origem"></datalist>
    <?php if(isset($_GET['id'])){ echo "<input type=\"hidden\" name=\"id\" id=\"id\" value=\"{$_GET['id']}\">"; }?>
</div>
<div class="form center col-2">
    <label for="valor">VALOR</label>
    <input type="tel" name="valor" id="valor" minlength="4" maxlength="12" value="<?php echo @number_format($_GET['value'],2,',','.'); ?>" required>
</div>
<div class="form center col-2">
    <label for="data">DATA</label>
    <input type="date" name="data" id="data" value="<?php echo @$_GET['registrationDate']; ?>" required>
</div>
<div class="form center col">
    <label for="ano">ANO</label>
    <select name="ano" id="ano"><?php echo DateUtil::years(@$_GET['year']) ?></select>
</div>
<div class="form center col">
    <label for="mes">MÊS</label>
    <select name="mes" id="mes"><?php echo DateUtil::months(@$_GET['month']) ?></select>
</div>
<div class="form center col-2">
    <label for="mensal">ENTRADA MENSAL</label>
    <select name="mensal" id="mensal">
            <option value="N">NÃO</option>
            <option value="S" <?php echo (@$_GET['monthly']==='SIM'?'selected':''); ?>>SIM</option>
    </select>
</div>
<div class="form col-6">
    <label for="observacao">OBSERVAÇÃO</label>
    <textarea name="observacao" id="observacao" maxlength="250" rows="4"><?php echo @$_GET['observation']; ?></textarea>
    <small><span>250</span>/250</small>
</div>
<div class="form_button">
    <button type="submit" class="ok"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25px" height="25px" fill="currentColor"><path d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" /></svg></button>
</div>
