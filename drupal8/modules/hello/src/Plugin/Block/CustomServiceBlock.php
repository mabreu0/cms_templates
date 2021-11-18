<?php
   /**
   * Custom block to display service cards 
   *
   */

   namespace Drupal\hello\Plugin\Block;

   use Drupal\Core\Block\BlockBase;

   /**
    * Provides service cards block
    * @Block(
    *    id = "servBlock",
    *    admin_label = @Translation("Enterprise services card")
    * )
    */

   class CustomServiceBlock extends BlockBase {

      /**
       * {@inheritdoc}
       */
      public function build() {
         return [
            '#attached' => array('library' => array('hello/hello')),
            '#type' => 'markup',
            '#markup' => '<h1>Service Card 1</h1>'
         ];
      }
   }
?>
