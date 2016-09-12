<h1>CREA UTENTE</h1>

<div class="form">
<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary($utente); ?>
 
    <div class="row">
        <?php echo CHtml::activeLabel($utente,'username'); ?>
        <?php echo CHtml::activeTextField($utente,'username') ?>
    </div>
 
    <div class="row">
        <?php echo CHtml::activeLabel($utente,'password'); ?>
        <?php echo CHtml::activePasswordField($utente,'password') ?>
    </div>
    
    <div class="row">
        <?php echo CHtml::activeLabel($utente,'email'); ?>
        <?php echo CHtml::activeEmailField($utente,'email') ?>
    </div>
    
    <div class="row">
        <?php echo CHtml::activeLabel($utente,'profile'); ?>
        <?php echo CHtml::activeTextArea($utente,'profile') ?>
    </div>
    
    <div class="row">
        <?php echo CHtml::activeLabel($utente,'ruolo'); ?>
        <?php echo CHtml::activeDropDownList($utente,'ruolo',Ruolo::listaRuoli()) ?>
    </div>
 
    <div class="row submit">
        <?php echo CHtml::submitButton('Crea'); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div>