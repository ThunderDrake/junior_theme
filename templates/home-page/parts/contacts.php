<?php
/* Секция Contacts */
?>

<section class="contacts-section" id="contacts">
  <div class="contacts-section__container container">
    <div class="contacts-section__wrapper">
      <h2 class="contacts-section__title h2-title">Контакты</h2>
      <div class="contacts-section__column">
        <div class="navigation__contacts contacts-section__contacts">
          <div class="navigation__contacts-group">
            <div class="navigation__contacts-label">Телефон:</div>
            <a class="navigation__contacts-item navigation__contacts-item--big hover-gradient"
              href="tel:<?= get_field('home_main_phone', 'option') ? cth()->format_phone(get_field('home_main_phone', 'option')) : '' ?>"><span data-text="<?= get_field('home_main_phone', 'option') ?: '' ?>"><?= get_field('home_main_phone', 'option') ?: '' ?></span></a>
            <a class="navigation__contacts-item hover-gradient" href="tel:<?= get_field('home_main_phone_first', 'option') ? cth()->format_phone(get_field('home_main_phone_first', 'option')) : '' ?>"><span
                data-text="<?= get_field('home_main_phone_first', 'option') ?: '' ?>"><?= get_field('home_main_phone_first', 'option') ?: '' ?></span></a>
            <a class="navigation__contacts-item hover-gradient" href="tel:<?= get_field('home_main_phone_second', 'option') ? cth()->format_phone(get_field('home_main_phone_second', 'option')) : '' ?>"><span
                data-text="<?= get_field('home_main_phone_second', 'option') ?: '' ?>"><?= get_field('home_main_phone_second', 'option') ?: '' ?></span></a>
          </div>
          <div class="navigation__contacts-group">
            <div class="navigation__contacts-label">Почта:</div>
            <a class="navigation__contacts-item navigation__contacts-item--big hover-gradient"
              href="mail:juniornsk@bk.ru"><span data-text="<?= get_field('home_email', 'option') ?: '' ?>"><?= get_field('home_email', 'option') ?: '' ?></span></a>
          </div>
        </div>
      </div>
      <div class="contacts-section__column">
        <div class="navigation__contacts-group contacts-section__contacts contacts-section__contacts--address">
          <div class="navigation__contacts-label">Адрес:</div>
          <a class="navigation__contacts-item hover-gradient contacts-section__address" href="/"><span
              data-text="<?= get_field('home_address', 'option') ?: '' ?>"><?= get_field('home_address', 'option') ?: '' ?></span></a>
          <div class="contacts-section__socials">
            <?php if(get_field('home_socials_vk', 'option')): ?>
            <a class="contacts-section__socials-link" href="<?= get_field('home_socials_vk', 'option') ?: '' ?>">
              <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="contacts-section__socials-icon">
                <g clip-path="url(#clip0_407_4805)">
                  <path
                    d="M31.162 37.994C31.771 37.994 32.02 37.588 32.013 37.079C31.982 35.162 32.727 34.13 34.072 35.475C35.56 36.963 35.868 37.994 37.675 37.994H40.875C41.683 37.994 42.001 37.734 42.001 37.326C42.001 36.463 40.58 34.94 39.376 33.822C37.69 32.257 37.611 32.22 39.063 30.336C40.864 27.997 43.22 25 41.136 25H37.155C36.383 25 36.327 25.435 36.052 26.083C35.057 28.43 33.166 31.47 32.448 31.005C31.697 30.52 32.041 28.599 32.098 25.744C32.113 24.99 32.109 24.473 30.957 24.205C30.328 24.06 29.716 24 29.148 24C26.875 24 25.307 24.953 26.198 25.119C27.769 25.412 27.618 28.811 27.252 30.279C26.614 32.835 24.216 28.255 23.217 25.974C22.976 25.426 22.902 25 22.042 25H18.787C18.295 25 18 25.16 18 25.516C18 26.118 20.96 32.236 23.786 35.286C26.542 38.261 29.266 37.994 31.162 37.994Z"
                    fill="url(#paint0_linear_407_4805)" />
                </g>
                <rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="url(#paint1_linear_407_4805)" />
                <defs>
                  <linearGradient id="paint0_linear_407_4805" x1="39.2961" y1="36.8724" x2="18.7599" y2="24.3791"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0B4C8E" />
                    <stop offset="1" stop-color="#0B4C8E" />
                  </linearGradient>
                  <linearGradient id="paint1_linear_407_4805" x1="53.2381" y1="55.1667" x2="-9.23353" y2="32.9977"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0B4C8E" />
                    <stop offset="1" stop-color="#0B4C8E" />
                  </linearGradient>
                  <clipPath id="clip0_407_4805">
                    <rect width="24" height="24" fill="white" transform="translate(18 19)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <?php endif; ?>
            <?php if(get_field('home_socials_youtube', 'option')): ?>
            <a class="contacts-section__socials-link" href="<?= get_field('home_socials_youtube', 'option') ?>">
              <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="contacts-section__socials-icon">
                <g clip-path="url(#clip0_723_4401)">
                  <path
                    d="M37.615 22.184C34.011 21.938 25.984 21.939 22.385 22.184C18.488 22.45 18.029 24.804 18 31C18.029 37.185 18.484 39.549 22.385 39.816C25.985 40.061 34.011 40.062 37.615 39.816C41.512 39.55 41.971 37.196 42 31C41.971 24.815 41.516 22.451 37.615 22.184V22.184ZM27 35V27L35 30.993L27 35V35Z"
                    fill="url(#paint0_linear_723_4401)" />
                </g>
                <rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="url(#paint1_linear_723_4401)" />
                <defs>
                  <linearGradient id="paint0_linear_723_4401" x1="39.2952" y1="38.5501" x2="16.3063" y2="27.673"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0B4C8E" />
                    <stop offset="1" stop-color="#0B4C8E" />
                  </linearGradient>
                  <linearGradient id="paint1_linear_723_4401" x1="53.2381" y1="55.1667" x2="-9.23353" y2="32.9977"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0B4C8E" />
                    <stop offset="1" stop-color="#0B4C8E" />
                  </linearGradient>
                  <clipPath id="clip0_723_4401">
                    <rect width="24" height="24" fill="white" transform="translate(18 19)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="contacts-section__map">
      <div id="map" class="contacts-section__map-block"></div>
    </div>
  </div>
</section>
