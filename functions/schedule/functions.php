<?php
add_action( 'wp_ajax_disctrict_action', 'ajax_action_schedule' );
add_action( 'wp_ajax_nopriv_disctrict_action', 'ajax_action_schedule' );
function ajax_action_schedule() {
  if ( ! wp_verify_nonce( $_POST['nonce'], 'disctrict-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}
  $tax_id = $_POST['tax_id'];

  $affilate = get_posts([
    'post_type' => 'affiliate',
    'numberposts' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'district',
        'field'    => 'slug',
        'terms'    => $tax_id
      )
    )
  ]);

  $groups = wp_get_post_terms($affilate[0]->ID, 'group', array('fields' => 'all'));

  $result = [
    'district' => [],
    'group' => [
      [
        'value' => '',
        'label' => 'Все группы',
        'selected' => true,
      ]
    ]
  ];

  foreach ($affilate as $key => $item) {
    if ($key === array_key_first($affilate)) {
      $result['district'][] = [
        'value' => $item->post_name,
        'label' => $item->post_title,
        'selected' => true,
      ];
    } else {
      $result['district'][] = [
        'value' => $item->post_name,
        'label' => $item->post_title,
      ];
    }

  }

  foreach ($groups as $key => $item) {
    $result['group'][] = [
      'value' => $item->slug,
      'label' => $item->name,
    ];
  }

  wp_send_json( $result );
}

function filter_products() {
	global $post;
  $affilate = $_POST['affilate_slug'];
  $group = $_POST['group_slug'];
  $args = array(
    'post_type' => 'affiliate',
    'name' => $affilate,
    'tax_query' => [[
      'taxonomy' => 'group',
      'field'    => 'slug',
      'terms'    => $group
    ]]
  );

  $ajaxposts = get_posts($args);
  $response = "";

  if ($ajaxposts) {
    ob_start();
    foreach($ajaxposts as $post):
      setup_postdata($post);
      $monday = get_field('schedule_table_1')['group_card'];
      $tuesday = get_field('schedule_table_2')['group_card'];
      $wednesday = get_field('schedule_table_3')['group_card'];
      $thursday = get_field('schedule_table_4')['group_card'];
      $friday = get_field('schedule_table_5')['group_card'];
      $saturday = get_field('schedule_table_6')['group_card'];
      $sunday = get_field('schedule_table_7')['group_card'];
      ?>
      <div class="schedule__column">
        <div class="schedule__table-head"><span>Понедельник</span></div>
        <?php
        if(!empty($monday)):?>
        <div class="schedule__table-item table-item table-item--empty d-none table-item--all-empty"></div>
        <?php
        foreach($monday as $item):
        ?>
        <div class="schedule__table-item table-item" data-group="<?= get_term( $item['group'] )->name ?>">
          <div class="table-item__group"><?= get_term( $item['group'] )->name ?></div>
          <div class="table-item__time"><?= $item['time_start'] ?></div>
          <div class="table-item__location"><?= $item['address'] ?></div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="schedule__table-item table-item table-item--empty"></div>
        <?php endif; ?>
      </div>
      <div class="schedule__column">
        <div class="schedule__table-head"><span>Вторник</span></div>
        <?php
        if(!empty($tuesday)):?>
        <div class="schedule__table-item table-item table-item--empty d-none table-item--all-empty"></div>
        <?php
        foreach($tuesday as $item):
        ?>
        <div class="schedule__table-item table-item" data-group="<?= get_term( $item['group'] )->name ?>">
          <div class="table-item__group"><?= get_term( $item['group'] )->name ?></div>
          <div class="table-item__time"><?= $item['time_start'] ?></div>
          <div class="table-item__location"><?= $item['address'] ?></div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="schedule__table-item table-item table-item--empty"></div>
        <?php endif; ?>
      </div>
      <div class="schedule__column">
        <div class="schedule__table-head"><span>Среда</span></div>
        <?php
        if(!empty($wednesday)):?>
        <div class="schedule__table-item table-item table-item--empty d-none table-item--all-empty"></div>
        <?php
        foreach($wednesday as $item):
        ?>
        <div class="schedule__table-item table-item" data-group="<?= get_term( $item['group'] )->name ?>">
          <div class="table-item__group"><?= get_term( $item['group'] )->name ?></div>
          <div class="table-item__time"><?= $item['time_start'] ?></div>
          <div class="table-item__location"><?= $item['address'] ?></div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="schedule__table-item table-item table-item--empty"></div>
        <?php endif; ?>
      </div>
      <div class="schedule__column">
        <div class="schedule__table-head"><span>Четверг</span></div>
        <?php
        if(!empty($thursday)):?>
        <div class="schedule__table-item table-item table-item--empty d-none table-item--all-empty"></div>
        <?php
        foreach($thursday as $item):
        ?>
        <div class="schedule__table-item table-item" data-group="<?= get_term( $item['group'] )->name ?>">
          <div class="table-item__group"><?= get_term( $item['group'] )->name ?></div>
          <div class="table-item__time"><?= $item['time_start'] ?></div>
          <div class="table-item__location"><?= $item['address'] ?></div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="schedule__table-item table-item table-item--empty"></div>
        <?php endif; ?>
      </div>
      <div class="schedule__column">
        <div class="schedule__table-head"><span>Пятница</span></div>
        <?php
        if(!empty($friday)):?>
        <div class="schedule__table-item table-item table-item--empty d-none table-item--all-empty"></div>
        <?php foreach($friday as $item): ?>
        <div class="schedule__table-item table-item" data-group="<?= get_term( $item['group'] )->name ?>">
          <div class="table-item__group"><?= get_term( $item['group'] )->name ?></div>
          <div class="table-item__time"><?= $item['time_start'] ?></div>
          <div class="table-item__location"><?= $item['address'] ?></div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="schedule__table-item table-item table-item--empty"></div>
        <?php endif; ?>
      </div>
      <div class="schedule__column">
        <div class="schedule__table-head"><span>Суббота</span></div>
        <?php
        if(!empty($saturday)):?>
        <div class="schedule__table-item table-item table-item--empty d-none table-item--all-empty"></div>
        <?php foreach($saturday as $item):?>
        <div class="schedule__table-item table-item" data-group="<?= get_term( $item['group'] )->name ?>">
          <div class="table-item__group"><?= get_term( $item['group'] )->name ?></div>
          <div class="table-item__time"><?= $item['time_start'] ?></div>
          <div class="table-item__location"><?= $item['address'] ?></div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="schedule__table-item table-item table-item--empty"></div>
        <?php endif; ?>
      </div>
      <div class="schedule__column">
        <div class="schedule__table-head"><span>Воскресенье</span></div>
        <?php
        if(!empty($sunday)):?>
        <div class="schedule__table-item table-item table-item--empty d-none table-item--all-empty"></div>
        <?php foreach($sunday as $item):?>
        <div class="schedule__table-item table-item" data-group="<?= get_term( $item['group'] )->name ?>">
          <div class="table-item__group"><?= get_term( $item['group'] )->name ?></div>
          <div class="table-item__time"><?= $item['time_start'] ?></div>
          <div class="table-item__location"><?= $item['address'] ?></div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="schedule__table-item table-item table-item--empty"></div>
        <?php endif; ?>
      </div>
      <?php
    endforeach;
    $response = ob_get_contents(); // Add the buffer contents to $response
    ob_end_clean(); // Clear the buffer
  } else {
      $response = "No products found.";
  }

  echo json_encode($response); // Echo the response
  wp_reset_postdata();
  exit; // this is required to terminate immediately and return a proper response
  }

add_action('wp_ajax_schedule_action', 'filter_products');
add_action('wp_ajax_nopriv_schedule_action', 'filter_products');
