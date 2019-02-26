/**
 * @file
 * Contains Drupal\ajax_example\AjaxExampleForm
 */

namespace Drupal\ajax_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;

class AjaxExampleForm extends FormBase {

  public function getFormId() {
    return 'ajax_example_form';
  }
public function buildForm(array $form, FormStateInterface $form_state) {
   $form['user_email'] = array(
      '#type' => 'textfield',
      '#title' => 'User or Email',
      '#description' => 'Please enter in a user or email',
      '#prefix' => '<div id="user-email-result"></div>',
      '#ajax' => array(
         'callback' => '::checkUserEmailValidation’,
         'effect' => 'fade',
         'event' => 'change',
          'progress' => array(
             'type' => 'throbber',
             'message' => NULL,
          ),
      ),
       );
  );
}
