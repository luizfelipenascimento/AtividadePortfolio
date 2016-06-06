<div class="container">
    <div class="page-header">
        <h1>Info Car!</h1>
    </div>
    <h3>Proprietário</h3>
    <p>Nome: <?php echo $user['nome']." ".$user['snome'];  ?></p>
    <p>Email: <?php echo $user['email'];?></p>
    <h3>Veículo</h3>
    <p>Placa: <?php echo $veiculo['placa'];?></p>
    <p>Modelo: <?php echo $veiculo['modelo'];?></p>
    <p>Cor: <?php echo $veiculo['cor'];?></p>
</div>
    