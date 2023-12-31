<?php

namespace Drupal\social_search\Form;

use Drupal\Component\Utility\Xss;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Component\Utility\UrlHelper;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class SearchContentForm.
 *
 * @package Drupal\social_search\Form
 */
class SearchContentForm extends FormBase implements ContainerInjectionInterface {

  /**
   * The request stack.
   *
   * @var \Symfony\Component\HttpFoundation\RequestStack
   */
  protected $requestStack;

  /**
   * SearchHeroForm constructor.
   *
   * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
   *   The request stack.
   */
  public function __construct(RequestStack $requestStack) {
    $this->requestStack = $requestStack;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('request_stack')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'search_content_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['search_input_content'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Search Content'),
      '#title_display' => 'invisible',
      '#weight' => '0',
    ];

    $form['actions'] = [
      '#type' => 'actions',
      '#weight' => '10',
      'submit' => [
        '#type' => 'submit',
        '#value' => $this->t('Search Content'),
      ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $search_all_view = 'search_all';
    $query = UrlHelper::filterQueryParameters($this->requestStack->getCurrentRequest()->query->all());

    // Unset the page parameter. When someone starts a new search query they
    // should always start again at the first page.
    unset($query['page']);

    $options = ['query' => $query];
    $parameters = [];

    if (empty($form_state->getValue('search_input_content'))) {
      // Redirect to the search content page with empty search values.
      $page = "view.$search_all_view.page_no_value";
    }
    else {
      // Redirect to the search content page with filters in the GET parameters.
      $search_input = Xss::filter($form_state->getValue('search_input_content'));
      $search_input = preg_replace('/[\/]+/', ' ', $search_input);
      $search_input = str_replace('&amp;', '&', $search_input);
      $parameters['keys'] = $search_input;
      $page = "view.$search_all_view.page";
    }

    $redirect = Url::fromRoute($page, $parameters, $options);

    $form_state->setRedirectUrl($redirect);
  }

}
