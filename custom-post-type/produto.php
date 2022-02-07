<?php
function registrar_cpt_produto(){
  register_post_type('produto', array(
    'label' => 'Produto',
    'description' => 'Produto',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'produto','with_front' => true),
    'supports' => array('custom-fields','author','title'),
    'publicly_queryble' => true,
  ));
}
//quando função vai rodar
add_action('init','registrar_cpt_produto');
?>