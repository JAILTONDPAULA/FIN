<i><svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="currentColor"><path d="m346-272 134-134 134 134 74-74-134-134 134-134-74-74-134 134-134-134-74 74 134 134-134 134 74 74ZM480-34q-92.64 0-174.467-34.604-81.828-34.603-142.077-94.852-60.249-60.249-94.852-142.077Q34-387.36 34-480q0-92.896 34.662-174.449 34.663-81.553 95.013-141.968 60.35-60.416 142.076-94.999Q387.476-926 480-926q92.886 0 174.431 34.584 81.544 34.583 141.973 95.012 60.429 60.429 95.012 142Q926-572.833 926-479.917q0 92.917-34.584 174.404-34.583 81.488-94.999 141.838-60.415 60.35-141.968 95.013Q572.896-34 480-34Z"/></svg></i>
<h6>APAGAR RECEITA</h6>
<p>DESEJA APGARA A RECEITA CADASTRADA COMO "<?php echo $_GET['origin']['description']; ?>"</p>
<div>
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
    <button type="button" class="close">NÃO</button>
    <button type="submit">SIM</button>
</div>
