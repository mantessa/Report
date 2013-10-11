<?php
$this->pageTitle = 'Components';
array_push(
    $this->secondNavPartials,
    \bootstrap\helpers\NavPartial::getView('components/_sidebar')
);
?>
<!-- Glyphicons
================================================== -->
<?php $this->renderPartial('components/_glyphicons', array('model' => $model)) ?>

<!-- Dropdowns
================================================== -->
<?php $this->renderPartial('components/_dropdowns', array('model' => $model)) ?>
<!-- Button Groups
================================================== -->
<?php $this->renderPartial('components/_button_groups', array('model' => $model)) ?>