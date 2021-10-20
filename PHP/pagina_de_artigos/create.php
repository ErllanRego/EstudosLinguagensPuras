<?php
    include_once("layouts/header.php");
?>
<section>
    <form action="">
        <label for="title">
            Nome da receita
            <input type="text" name="title" value="">
        </label>
        <label for="description">
            Breve descrição
            <input type="text" name="description" value="">
        </label>
        <label for="description">
            Tempo de preparo
            <input type="number" name="time" value="">
        </label>
        <label for="description">
            Dificuldade
            <select name="dificuldade" id="dificuldade">
                <option value="1">Simples</option>
                <option value="1">Intermediária</option>
                <option value="1">Complicada</option>
            </select>
        </label>
        <input type="submit" value="Adicionar">
    </form>
</section>
<?php 
    include_once("layouts/footer.php");
?>