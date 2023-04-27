<?php
/* Секция Schedule */
?>

<section class="schedule" id="schedule">
  <div class="schedule__container container">
    <div class="schedule__content-wrapper">
      <h2 class="schedule__title h2-title">Расписание занятий</h2>
      <div class="schedule__timetable">
        <div class="schedule__header">
          <div class="schedule__select">
            <span class="schedule__select-label">Район:</span>
            <select name="area" class="schedule__select-select">
              <?php
              $districts = get_terms( [
                'taxonomy' => 'district',
                'hide_empty' => true,
              ] );
              foreach($districts as $term):
              ?>
              <option value="<?= $term->slug ?>"><?= $term->name ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="schedule__select">
            <span class="schedule__select-label">Филиал:</span>
            <select name="affiliate" class="schedule__select-select">
              <?php
               $affilate = get_posts([
                'post_type' => 'affiliate',
                'numberposts' => -1,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'district',
                    'field'    => 'slug',
                    'terms'    => $districts[0]
                  )
                )
              ]);
              foreach ($affilate as $item):
              ?>
              <option value="<?= $item->post_name ?>"><?= $item->post_title ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="schedule__select">
            <span class="schedule__select-label">Группа:</span>
            <select name="group" class="schedule__select-select">
              <option value="">Все группы</option>
              <?php $groups = wp_get_post_terms($affilate[0]->ID, 'group', array('fields' => 'all')); ?>
              <?php foreach($groups as $item): ?>
              <option value="<?= $item->slug ?>"><?= $item->name ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <?php
        $first_post = get_posts(array(
          'post_type' => 'affiliate',
          'name' => $affilate[0]->post_name,
        ));
        ?>
        <div class="schedule__table" data-simplebar>
        <?php foreach($first_post as $post):
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
              <div class="schedule__table-item table-item">
                <div class="table-item__group" data-group="<?= get_term( $item['group'] )->name ?>"><?= get_term( $item['group'] )->name ?></div>
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
              <div class="schedule__table-item table-item">
                <div class="table-item__group" data-group="<?= get_term( $item['group'] )->name ?>"><?= get_term( $item['group'] )->name ?></div>
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
              <div class="schedule__table-item table-item">
                <div class="table-item__group" data-group="<?= get_term( $item['group'] )->name ?>"><?= get_term( $item['group'] )->name ?></div>
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
              <div class="schedule__table-item table-item">
                <div class="table-item__group" data-group="<?= get_term( $item['group'] )->name ?>"><?= get_term( $item['group'] )->name ?></div>
                <div class="table-item__time"><?= $item['time_start'] ?></div>
                <div class="table-item__location"><?= $item['address'] ?></div>
              </div>
              <?php endforeach; ?>
              <?php else: ?>
              <div class="schedule__table-item table-item table-item--empty"></div>
              <?php endif; ?>
            </div>
            <div class="schedule__column">
              <div class="schedule__table-head" data-group="<?= get_term( $item['group'] )->name ?>"><span>Пятница</span></div>
              <?php
              if(!empty($friday)):?>
              <div class="schedule__table-item table-item table-item--empty d-none table-item--all-empty"></div>
              <?php
              foreach($friday as $item):
              ?>
              <div class="schedule__table-item table-item">
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
              <?php
              foreach($saturday as $item):
              ?>
              <div class="schedule__table-item table-item">
                <div class="table-item__group" data-group="<?= get_term( $item['group'] )->name ?>"><?= get_term( $item['group'] )->name ?></div>
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
              <?php
              foreach($sunday as $item):
              ?>
              <div class="schedule__table-item table-item">
                <div class="table-item__group" data-group="<?= get_term( $item['group'] )->name ?>"><?= get_term( $item['group'] )->name ?></div>
                <div class="table-item__time"><?= $item['time_start'] ?></div>
                <div class="table-item__location"><?= $item['address'] ?></div>
              </div>
              <?php endforeach; ?>
              <?php else: ?>
              <div class="schedule__table-item table-item table-item--empty"></div>
              <?php endif; ?>
            </div>
            <?php
          endforeach;?>
        </div>
      </div>

      <div class="schedule__call-to">Наличие свободных мест уточняйте у нашего <a href="https://wa.me/89529119111">менеджера</a></div>
    </div>
  </div>
</section>
