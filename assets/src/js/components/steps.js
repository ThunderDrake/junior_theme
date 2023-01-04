const steps = document.querySelectorAll('.step');

if(steps.length) {
  steps.forEach(el => {
    const trigger = el?.querySelector('.step__icon');
    trigger?.addEventListener('click', (e) => {
      steps.forEach(el => {
        el.classList.remove('step--active')
      });
      e.target.closest('.step').classList.add('step--active');
    });
  })
}
