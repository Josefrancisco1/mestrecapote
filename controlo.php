<?php
include_once("include/header.php");

?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Seja muito bem vindo a</h4>
            <h2>Sessão de administração</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Agora disponivel para se e para sua família</h4>
            <h2>Produtos de alta qualidade</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Todos os teus gosto você encontras aqui no</h4>
            <h2>Mestre Capote</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="text-align: center;">Todas encomendas</h2>
            </div>
          </div>

          <div class="col-md-12">
            <div class="section-heading">
            <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Nome completo</th>
      <th scope="col">Email</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Descrição</th>
      <th scope="col">Localização</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
   <?php 
 
include_once("crud/conexao.php");

$listagem = $conn->prepare("SELECT * FROM pedidos");
$listagem->execute();
while($lista = $listagem->fetch(PDO::FETCH_ASSOC)){
?>
    <tr>
     
 
      <td><?php echo $lista['id_pedidos']; ?></td>
      <td><?php echo $lista['nome']; ?></td>
      <td><?php echo $lista['email']; ?></td>
      <td><?php echo $lista['quantidade']; ?></td>
      <td><?php echo $lista['descricao']; ?></td>
      <td><?php echo $lista['localizacao']; ?></td>
      <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg>
      </td>
    
 
    </tr>
         <?php }
 ?>
   
  </tbody>
</table>
            </div>
          </div>
         

    
         
        </div>
      </div>
    </div>


   <?php
   include_once("include/footer.php");
   ?>