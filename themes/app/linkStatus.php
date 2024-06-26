<?php
$this->layout('_theme', ['title' => $title]);
$this->insert('partials/navbar', ['userId' => $userId]);
?>

<div class="col-md-12 text-center">
   <h2>Acesso de Pesquisadores</h2>
</div>

<div class="col-md-12">
   <table class="table table-bordered" id="tabela">
      <thead class="thead-dark">
         <tr>
            <th>#</th>
            <th>Pesquisador</th>
            <th>Acessado</th>
            <th>Termo Consentimento</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($obPesquisadores as $pesquisador) : ?>
            <tr>
               <td><?= $pesquisador->idLink; ?></td>
               <td><?= $pesquisador->pesquisador; ?></td>
               <td>
                  <?php if($pesquisador->linkAcessado): ?>
                     <i class="fas fa-square text-success"></i>
                  <?php else: ?>
                     <i class="fas fa-square text-danger"></i>
                  <?php endif; ?>
               </td>
               <td>
                  <?php if($pesquisador->termoConsentimento == null): ?>
                     <i class="fas fa-square text-dark"></i>
                  <?php elseif($pesquisador->termoConsentimento == 0): ?>
                     <i class="fas fa-square text-danger"></i>
                  <?php elseif($pesquisador->termoConsentimento == 1): ?>
                     <i class="fas fa-square text-success"></i>
                  <?php endif; ?>
               </td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</div>

<div class="col-md-12">
   <a href="<?= $router->route('app.exportarStatusLink'); ?>" class="btn btn-outline-info">Baixar</a>
</div>

<!-- filter table jquery -->
<?php $this->start("styles"); ?>
<?php $this->insert("filtertable/filtercss"); ?>
<?php $this->end(); ?>
<?php $this->start("scripts"); ?>
<?php $this->insert("filtertable/filtertable"); ?>
<?php $this->end(); ?>