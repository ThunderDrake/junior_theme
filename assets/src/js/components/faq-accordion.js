const accordions = document.querySelectorAll('.accordion');

class GraphAccordion {
  constructor(selector, options) {
    let defaultOptions = {
      isOpen: () => {},
      isClose: () => {},
      speed: 300
    };

    this.options = Object.assign(defaultOptions, options);
    this.accordion = selector;
    this.control = this.accordion.querySelector('.accordion__control');
    this.content = this.accordion.querySelector('.accordion__content');
    this.event();
  }

  event() {

    if (this.accordion) {
      this.accordion.addEventListener('click', (e) => {
        this.accordion.classList.toggle('open');

        if (this.accordion.classList.contains('open')) {
          this.open();
        } else {
          this.close();
        }
      });
    }
  }

  open() {
    this.accordion.style.setProperty('--accordion-time', `${this.options.speed / 1000}s`);
    this.accordion.classList.add('is-open');
    this.control.setAttribute('aria-expanded', true);
    this.content.setAttribute('aria-hidden', false);
    this.accordion.style.maxHeight = this.content.scrollHeight + this.control.scrollHeight + 'px';
    this.content.style.maxHeight = this.content.scrollHeight + 'px';
    this.options.isOpen(this);
  }

  close() {
    this.accordion.classList.remove('is-open');
    this.control.setAttribute('aria-expanded', false);
    this.content.setAttribute('aria-hidden', true);
    this.content.style.maxHeight = null;
    this.accordion.style.maxHeight = this.control.scrollHeight + 'px';
    this.options.isClose(this);
  }
}

accordions.forEach(el => {
  new GraphAccordion(el);
});

