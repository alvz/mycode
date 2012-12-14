<!--
 * Ajax Crud Administration Form
 * Eyuiformeditordb *
 * InfoWebSphere {@link http://libkal.gr/infowebsphere}
 * @author  Spiros Kabasakalis <kabasakalis@gmail.com>
 * @link http://reverbnation.com/spiroskabasakalis/
 * @copyright Copyright &copy; 2011-2012 Spiros Kabasakalis
 * @since 1.0
 * @ver 1.3
 -->
<div id="eyuiformeditordb_form_con" class="client-val-form">
    <?php if ($model->isNewRecord) : ?>    <h3 id="create_header">Create New Eyuiformeditordb</h3>
    <?php  elseif (!$model->isNewRecord):  ?>    <h3 id="update_header">Update Eyuiformeditordb <?php  echo
        $model->id;  ?>  </h3>
    <?php   endif;  ?>
    <?php      $val_error_msg = 'Error.Eyuiformeditordb was not saved.';
    $val_success_message = ($model->isNewRecord) ?
            'Eyuiformeditordb was created successfuly.' :
            'Eyuiformeditordb  was updated successfuly.';
  ?>

    <div id="success-note" class="notification success png_bg"
         style="display:none;">
        <a href="#" class="close"><img
                src="<?php echo Yii::app()->request->baseUrl.'/js_plugins/ajaxform/images/icons/cross_grey_small.png';  ?>"
                title="Close this notification" alt="close"/></a>
        <div>
            <?php   echo $val_success_message;  ?>        </div>
    </div>

    <div id="error-note" class="notification errorshow png_bg"
         style="display:none;">
        <a href="#" class="close"><img
                src="<?php echo Yii::app()->request->baseUrl.'/js_plugins/ajaxform/images/icons/cross_grey_small.png';  ?>"
                title="Close this notification" alt="close"/></a>
        <div>
            <?php   echo $val_error_msg;  ?>        </div>
    </div>

    <div id="ajax-form"  class='form'>
<?php   $formId='eyuiformeditordb-form';
   $actionUrl =
   ($model->isNewRecord)?CController::createUrl('eyuiformeditordb/ajax_create')
                                                                 :CController::createUrl('eyuiformeditordb/ajax_update');


    $form=$this->beginWidget('CActiveForm', array(
     'id'=>'eyuiformeditordb-form',
    //  'htmlOptions' => array('enctype' => 'multipart/form-data'),
         'action' => $actionUrl,
    // 'enableAjaxValidation'=>true,
      'enableClientValidation'=>true,
     'focus'=>array($model,'name'),
     'errorMessageCssClass' => 'input-notification-error  error-simple png_bg',
     'clientOptions'=>array('validateOnSubmit'=>true,
                                        'validateOnType'=>false,
                                        'afterValidate'=>$js_afterValidate,
                                        'errorCssClass' => 'err',
                                        'successCssClass' => 'suc',
                                        'afterValidate' => 'js:function(form,data,hasError){ $.js_afterValidate(form,data,hasError);  }',
                                         'errorCssClass' => 'err',
                                        'successCssClass' => 'suc',
                                        'afterValidateAttribute' => 'js:function(form, attribute, data, hasError){
                                                                                                 $.js_afterValidateAttribute(form, attribute, data, hasError);
                                                                                                                            }'
                                                                             ),
));

     ?>
    <?php echo $form->errorSummary($model, '
    <div style="font-weight:bold">Please correct these errors:</div>
    ', NULL, array('class' => 'errorsum notification errorshow png_bg')); ?>    <p class="note">Fields with <span class="required">*</span> are required.</p>


    <div class="row">
            <?php echo $form->labelEx($model,'model_id'); ?>
            <?php echo $form->textField($model,'model_id'); ?>
        <span id="success-Eyuiformeditordb_model_id"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'model_id'); ?>
    </div>

        <div class="row">
            <?php echo $form->labelEx($model,'form_id'); ?>
            <?php echo $form->textField($model,'form_id',array('size'=>45,'maxlength'=>45)); ?>
        <span id="success-Eyuiformeditordb_form_id"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'form_id'); ?>
    </div>

        <div class="row">
            <?php echo $form->labelEx($model,'item'); ?>
            <?php echo $form->textField($model,'item'); ?>
        <span id="success-Eyuiformeditordb_item"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'item'); ?>
    </div>

        <div class="row">
            <?php echo $form->labelEx($model,'parent_id'); ?>
            <?php echo $form->textField($model,'parent_id'); ?>
        <span id="success-Eyuiformeditordb_parent_id"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'parent_id'); ?>
    </div>

        <div class="row">
            <?php echo $form->labelEx($model,'item_id'); ?>
            <?php echo $form->textField($model,'item_id',array('size'=>45,'maxlength'=>45)); ?>
        <span id="success-Eyuiformeditordb_item_id"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'item_id'); ?>
    </div>

        <div class="row">
            <?php echo $form->labelEx($model,'label'); ?>
            <?php echo $form->textField($model,'label',array('size'=>60,'maxlength'=>250)); ?>
        <span id="success-Eyuiformeditordb_label"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'label'); ?>
    </div>

        <div class="row">
            <?php echo $form->labelEx($model,'descr'); ?>
            <?php echo $form->textField($model,'descr',array('size'=>60,'maxlength'=>250)); ?>
        <span id="success-Eyuiformeditordb_descr"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'descr'); ?>
    </div>

        <div class="row">
            <?php echo $form->labelEx($model,'position'); ?>
            <?php echo $form->textField($model,'position',array('size'=>10,'maxlength'=>10)); ?>
        <span id="success-Eyuiformeditordb_position"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'position'); ?>
    </div>

        <div class="row">
            <?php echo $form->labelEx($model,'data'); ?>
            <?php echo $form->textField($model,'data'); ?>
        <span id="success-Eyuiformeditordb_data"
              class="hid input-notification-success  success png_bg right"></span>
        <div>
            <small></small>
        </div>
            <?php echo $form->error($model,'data'); ?>
    </div>

    
    <input type="hidden" name="YII_CSRF_TOKEN"
           value="<?php echo Yii::app()->request->csrfToken; ?>"/>

    <?php  if (!$model->isNewRecord): ?>    <input type="hidden" name="update_id"
           value=" <?php echo $model->id; ?>"/>
    <?php endif; ?>
    <div class="row buttons">
        <?php   echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save',array('class' =>
        'button align-right')); ?>    </div>

  <?php  $this->endWidget(); ?></div>
    <!-- form -->

</div>
<script type="text/javascript">

    //Close button:

    $(".close").click(
            function () {
                $(this).parent().fadeTo(400, 0, function () { // Links with the class "close" will close parent
                    $(this).slideUp(600);
                });
                return false;
            }
    );


</script>


