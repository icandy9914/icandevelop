<?php
/**
 * Salient Core Helpers
 *
 * @version 1.0
 */
 

  /**
  * Cleans class names
  *
  * @since 1.8
  */
  if(!function_exists('nectar_clean_classnames')) {
    function nectar_clean_classnames($str) {
      return esc_attr(trim(str_replace('  ', ' ',$str)));
    }
  }

  /**
  * Handles unit sizing for css prop
  *
  * @since 1.8
  */
  if(!function_exists('nectar_css_sizing_units')) {
    function nectar_css_sizing_units($str) {
      if( strpos($str,'vw') !== false ||
        strpos($str,'vh') !== false ||
        strpos($str,'%') !== false ||
        strpos($str,'em') !== false ) {
        return esc_attr($str);
      } 
      else {
        return intval($str) . 'px';
      }
    }
  }



 /**
  * Map Legacy FA Icons
  *
  * Maps old icon class names to new versions.
  *
  * @since 1.7
  */
  if( !function_exists('nectar_map_legacy_fa_icon_classes') ) {
    
    function nectar_map_legacy_fa_icon_classes() {
      
      $legacy_fa_map = array(	
        'icon-ban-circle'             => 'icon-ban',
        'icon-bar-chart'              => 'icon-bar-chart-o',
        'icon-beaker'                 => 'icon-flask',
        'icon-bell'                   => 'icon-bell-o',
        'icon-bell-alt'               => 'icon-bell',
        'icon-bitbucket-sign'         => 'icon-bitbucket-square',
        'icon-bookmark-empty'         => 'icon-bookmark-o',
        'icon-calendar-empty'         => 'icon-calendar-o',
        'icon-check-empty'            => 'icon-square-o',
        'icon-check-minus'            => 'icon-minus-square-o',
        'icon-check-sign'             => 'icon-check-square',
        'icon-check'                  => 'icon-check-square-o',
        'icon-chevron-sign-down'      => 'icon-chevron-down',
        'icon-chevron-sign-down'      => 'icon-chevron-down',
        'icon-chevron-sign-left'      => 'icon-chevron-left',
        'icon-chevron-sign-right'     => 'icon-chevron-right',
        'icon-chevron-sign-up'        => 'icon-chevron-up',
        'icon-circle-arrow-down'      => 'icon-arrow-circle-down',
        'icon-circle-arrow-left'      => 'icon-arrow-circle-left',
        'icon-circle-arrow-right'     => 'icon-arrow-circle-right',
        'icon-circle-arrow-up'        => 'icon-arrow-circle-up',
        'icon-circle-blank'           => 'icon-circle-o',
        'icon-cny'                    => 'icon-rmb',
        'icon-collapse-alt'           => 'icon-minus-square-o',
        'icon-collapse-top'           => 'icon-caret-square-o-up',
        'icon-collapse'               => 'icon-caret-square-o-down',
        'icon-comment-alt'            => 'icon-comment-o',
        'icon-comments-alt'           => 'icon-comments-o',
        'icon-copy'                   => 'icon-files-o',
        'icon-cut'                    => 'icon-scissors',
        'icon-dashboard'              => 'icon-tachometer',
        'icon-double-angle-down'      => 'icon-angle-double-down',
        'icon-double-angle-left'      => 'icon-angle-double-left',
        'icon-double-angle-right'     => 'icon-angle-double-right',
        'icon-double-angle-up'        => 'icon-angle-double-up',
        'icon-download'               => 'icon-arrow-circle-o-down',
        'icon-download-alt'           => 'icon-download',
        'icon-edit-sign'              => 'icon-pencil-square',
        'icon-edit'                   => 'icon-pencil-square-o',
        'icon-ellipsis-horizontal'    => 'icon-ellipsis-h',
        'icon-ellipsis-vertical'      => 'icon-ellipsis-v',
        'icon-envelope-alt'           => 'icon-envelope-o',
        'icon-exclamation-sign'       => 'icon-exclamation-circle',
        'icon-expand-alt'             => 'icon-plus-square-o',
        'icon-expand'                 => 'icon-caret-square-o-right',
        'icon-external-link-sign'     => 'icon-external-link-square',
        'icon-eye-close'              => 'icon-eye-slash',
        'icon-eye-open'               => 'icon-eye',
        'icon-facebook-sign'          => 'icon-facebook-square',
        'icon-facetime-video'         => 'icon-video-camera',
        'icon-file-alt'               => 'icon-file-o',
        'icon-file-text-alt'          => 'icon-file-text-o',
        'icon-flag-alt'               => 'icon-flag-o',
        'icon-folder-close-alt'       => 'icon-folder-o',
        'icon-folder-close'           => 'icon-folder',
        'icon-folder-open-alt'        => 'icon-folder-open-o',
        'icon-food '                  => 'icon-cutlery',
        'icon-frown'                  => 'icon-frown-o',
        'icon-fullscreen'             => 'icon-arrows-alt',
        'icon-github-sign'            => 'icon-github-square',
        'icon-google-plus-sign'       => 'icon-google-plus-square',
        'icon-group'                  => 'icon-users',
        'icon-h-sign'                 => 'icon-h-square',
        'icon-hand-down'              => 'icon-hand-o-down',
        'icon-hand-left'              => 'icon-hand-o-left',
        'icon-hand-right'             => 'icon-hand-o-right',
        'icon-hand-up'                => 'icon-hand-o-up',
        'icon-hdd'                    => 'icon-hdd-o',
        'icon-heart-empty'            => 'icon-heart-o',
        'icon-hospital'               => 'icon-hospital-o',
        'icon-indent-left'            => 'icon-outdent',
        'icon-indent-right'           => 'icon-indent',
        'icon-info-sign'              => 'icon-info-circle',
        'icon-keyboard'               => 'icon-keyboard-o',
        'icon-legal'                  => 'icon-gavel',
        'icon-lemon'                  => 'icon-lemon-o',
        'icon-lightbulb'              => 'icon-lightbulb-o',
        'icon-linkedin-sign'          => 'icon-linkedin-square',
        'icon-meh'                    => 'icon-meh-o',
        'icon-microphone-off'         => 'icon-microphone-slash',
        'icon-minus-sign-alt'         => 'icon-minus-square',
        'icon-minus-sign'             => 'icon-minus-circle',
        'icon-mobile-phone'           => 'icon-mobile',
        'icon-moon'                   => 'icon-moon-o',
        'icon-move'                   => 'icon-arrows',
        'icon-off'                    => 'icon-power-off',
        'icon-ok-circle'              => 'icon-check-circle-o',
        'icon-ok-sign'                => 'icon-check-circle',
        'icon-ok'                     => 'icon-check',
        'icon-paper-clip'             => 'icon-paperclip',
        'icon-paste'                  => 'icon-clipboard',
        'icon-phone-sign'             => 'icon-phone-square',
        'icon-picture'                => 'icon-picture-o',
        'icon-pinterest-sign'         => 'icon-pinterest-square',
        'icon-play-circle'            => 'icon-play-circle-o',
        'icon-play-sign'              => 'icon-play-circle',
        'icon-plus-sign-alt'          => 'icon-plus-square',
        'icon-plus-sign'              => 'icon-plus-circle',
        'icon-pushpin'                => 'icon-thumb-tack',
        'icon-question-sign'          => 'icon-question-circle',
        'icon-remove-circle'          => 'icon-times-circle-o',
        'icon-remove-sign'            => 'icon-times-circle',
        'icon-remove'                 => 'icon-times',
        'icon-reorder'                => 'icon-bars',
        'icon-resize-full'            => 'icon-expand',
        'icon-resize-horizontal'      => 'icon-arrows-h',
        'icon-resize-small'           => 'icon-compress',
        'icon-resize-vertical'        => 'icon-arrows-v',
        'icon-rss-sign'               => 'icon-rss-square',
        'icon-save'                   => 'icon-floppy-o',
        'icon-screenshot'             => 'icon-crosshairs',
        'icon-share-alt'              => 'icon-share',
        'icon-share-sign'             => 'icon-share-square',
        'icon-share'                  => 'icon-share-square-o',
        'icon-sign-blank'             => 'icon-square',
        'icon-signin'                 => 'icon-sign-in',
        'icon-signout'                => 'icon-sign-out',
        'icon-smile'                  => 'icon-smile-o',
        'icon-sort-by-alphabet-alt'   => 'icon-sort-alpha-desc',
        'icon-sort-by-alphabet'       => 'icon-sort-alpha-asc',
        'icon-sort-by-attributes-alt' => 'icon-sort-amount-desc',
        'icon-sort-by-attributes'     => 'icon-sort-amount-asc',
        'icon-sort-by-order-alt'      => 'icon-sort-numeric-desc',
        'icon-sort-by-order'          => 'icon-sort-numeric-asc',
        'icon-sort-down'              => 'icon-sort-desc',
        'icon-sort-up'                => 'icon-sort-asc',
        'icon-stackexchange'          => 'icon-stack-overflow',
        'icon-star-empty'             => 'icon-star-o',
        'icon-star-half-empty'        => 'icon-star-half-o',
        'icon-sun'                    => 'icon-sun-o',
        'icon-thumbs-down-alt'        => 'icon-thumbs-o-down',
        'icon-thumbs-up-alt'          => 'icon-thumbs-o-up',
        'icon-time'                   => 'icon-clock-o',
        'icon-trash'                  => 'icon-trash-o',
        'icon-tumblr-sign'            => 'icon-tumblr-square',
        'icon-twitter-sign'           => 'icon-twitter-square',
        'icon-unlink'                 => 'icon-chain-broken',
        'icon-upload'                 => 'icon-arrow-circle-o-up',
        'icon-upload-alt'             => 'icon-upload',
        'icon-warning-sign'           => 'icon-exclamation-triangle',
        'icon-xing-sign'              => 'icon-xing-square',
        'icon-youtube-sign'           => 'icon-youtube-square',
        'icon-zoom-in'                => 'icon-search-plus',
        'icon-zoom-out'               => 'icon-search-minus'
      );
      
      return $legacy_fa_map;
      
    }
    
  }
 