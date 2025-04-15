<div class="container text-center">
    <div class="row">
        <div class="col text-center bg-primary mb-5">Calculadora</div>
    </div>
        <div class="col"></div>
        <div class="col">
        <pre>
         <form action="calcular.php" method="post">
            <label for="" class="form-label">Digite o primeiro número</label>
            <input type="number" name="numero1" id="" class="form-input">
            <label for="" class="form-label">Digite o segundo número</label>
            <input type="number" name="numero2" id="" class="form-input">

            <label for="">Selecione as operações</label>

            <select name="op" id="">
                
            <option value="+">adição</option>
            <option value="-">subtração</option>    
            <option value="/">divisão</option>
            <option value="*">multiplicação</option>
                        
           </select>
           <input class= "btn btn-info mt-3 form-input" type="submit" value="Calcular">
         </form>
        </pre>
        </div>
    <div class="col"></div>

</div>