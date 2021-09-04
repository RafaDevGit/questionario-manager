<?php
$this->layout('_theme', ['title' => $title]);
$this->insert('partials/navbar', ['userId' => $userId]);
?>

<div class="col-md-12 text-center">
   <h2>Listagem de pesquisadores</h2>
</div>

<div class="col-md-12">
   <table class="table table-bordered">
      <thead class="thead-dark">
         <tr>
            <th>#</th>
            <th>Pesquisador</th>
            <th>Gabarito</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($obPesquisadores as $pesquisador) : ?>
            <tr>
               <td><?= $pesquisador->id; ?></td>
               <td><?= $pesquisador->nome; ?></td>
               <td><a href="<?= $router->route('app.verPesquisador', ['id' => $pesquisador->id]); ?>"> <i class="fas fa-database"></i></a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</div>
