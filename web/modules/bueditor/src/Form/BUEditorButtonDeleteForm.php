<?php

namespace Drupal\bueditor\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Provides a deletion confirmation form for BUEditor Button.
 */
class BUEditorButtonDeleteForm extends EntityConfirmFormBase {

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete the button %name?', ['%name' => $this->entity->label()]);
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return new Url('bueditor.buttons');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return $this->t('Delete');
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->entity->delete();
    $this->messenger()->addMessage($this->t('Button %name has been deleted.', ['%name' => $this->entity->label()]));
    $form_state->setRedirectUrl($this->getCancelUrl());
  }

}
