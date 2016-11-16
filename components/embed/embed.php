<?php function telabotanica_component_embed($data) {
  if (!isset($data->method)) $data->method = get_sub_field('method');
  if (!isset($data->description)) {
    $data->description = get_sub_field('description');
    $data->description_id = get_sub_field_object('description')['name'];
  }

  if ( $data->method === 'oembed' ) :

    $data->embed = get_sub_field('embed');

  elseif ( $data->method === 'iframe' ) :

    $data->embed = sprintf(
      '<iframe src="%s"></iframe>',
      get_sub_field('iframe')
    );

  endif;

  echo '<div class="component component-embed">';

  echo '<div class="component-embed-wrapper" aria-describedby="' . $data->description_id . '">';
    echo $data->embed;
  echo '</div>';

  echo '<div class="component-embed-description" id="' . $data->description_id . '">';
    echo $data->description;
  echo '</div>';

  echo '</div>';
}