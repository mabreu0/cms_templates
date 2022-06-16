<?php
   /**
   * Custom drupal block to display service cards 
   *
   */

   namespace Drupal\ancuscard\Plugin\Block;

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
            '#attached' => array('library' => array('ancuscard/ancuscard')),
            '#type' => 'markup',
            '#markup' => '<h1>Service Card 1</h1>'
         ];
      }
   }
?>
