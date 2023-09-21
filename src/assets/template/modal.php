<section id="modalDefault">
    <form id="despesa">
        <i><svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="currentColor"><path d="m346-272 134-134 134 134 74-74-134-134 134-134-74-74-134 134-134-134-74 74 134 134-134 134 74 74ZM480-34q-92.64 0-174.467-34.604-81.828-34.603-142.077-94.852-60.249-60.249-94.852-142.077Q34-387.36 34-480q0-92.896 34.662-174.449 34.663-81.553 95.013-141.968 60.35-60.416 142.076-94.999Q387.476-926 480-926q92.886 0 174.431 34.584 81.544 34.583 141.973 95.012 60.429 60.429 95.012 142Q926-572.833 926-479.917q0 92.917-34.584 174.404-34.583 81.488-94.999 141.838-60.415 60.35-141.968 95.013Q572.896-34 480-34Z"/></svg></i>
        <h6 class="titulo">CADASTRO DESPESA</h6>
        <div>
            <div class="form col-2">
                <label for="origem">CUSTO</label>
                <input type="text" name="despesa" id="despesa" list="despesas" minlength="3" maxlength="250" autocomplete="off" required>
                <datalist id="despesas"></datalist>
                <?php if(isset($_GET['id'])){ echo "<input type=\"hidden\" name=\"id\" id=\"id\" value=\"{$_GET['id']}\">"; }?>
            </div>
            <div class="form col-2">
                <label for="tipo">TIPO</label>
                <input type="text" name="tipo" id="tipo" list="tipos" minlength="3" maxlength="250" autocomplete="off" required>
                <datalist id="tipos"></datalist>
            </div>
            <div class="form col-2">
                <label for="marca">MARCA</label>
                <input type="text" name="marca" id="marca" list="marcas" minlength="3" maxlength="250" autocomplete="off" required>
                <datalist id="marcas"></datalist>
            </div>
            <div class="form center col select">
                <label for="quantidade">QUANTIDADE</label>
                <input type="tel" name="quantidade" id="quantidade" autocomplete="off" required>
                <select name="medida" id="medida">
                    <option>UN</option>
                    <option>MG</option>
                    <option>KG</option>
                    <option>ML</option>
                    <option>L</option>
                </select>
            </div>
            <div class="form center col">
                <label for="unidade">UNIDADE</label>
                <input type="tel" name="unidade" id="unidade" autocomplete="off" required>
            </div>
            <div class="form center col">
                <label for="valor">VALOR UNITÁRIO</label>
                <input type="tel" name="valor" id="valor" autocomplete="off" required>
            </div>
            <div class="form center col">
                <label for="ano">ANO</label>
                <select name="ano" id="ano" required>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div class="form center col">
                <label for="ano">MÊS</label>
                <select name="ano" id="ano" required>
                    <option value="12">12</option>
                    <option value="11">11</option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="form center col">
                <label for="data">DATA</label>
                <input type="date" name="data" id="data" autocomplete="off" required>
            </div>
            <div class="form col-6">
                <label for="observacao">OBSERVAÇÃO</label>
                <textarea name="observacao" id="observacao" rows="10" maxlength="250"></textarea>
                <small><span>250</span>/250</small>
            </div>
            <div class="form checkbox">
                <input type="checkbox" name="mensal" id="mensal">
                <label for="mensal">MENSAL</label>
            </div>
            <div class="form checkbox">
                <input type="checkbox" name="restituido" id="restituido">
                <label for="restituido">RESTITUIDO</label>
            </div>
            <div class="lista categoria col-6">
                <h4>CARTEGORIA</h4>
                <input type="checkbox" name="cart1" id="cart1"><label for="cart1">COMIDA</label>
                <input type="checkbox" name="cart2" id="cart2"><label for="cart2">TRANSPORTE</label>
            </div>
            <div class="lista pessoa col-6">
                <h4>PESSOA</h4>
                <input type="checkbox" name="cart1" id="cart1"><label for="cart1">EU</label>
                <input type="checkbox" name="cart2" id="cart2"><label for="cart2">LARISSA</label>
            </div>
            <button type="submit" class="ok">SALVAR</button>
        </div>
    </form>
</section>
