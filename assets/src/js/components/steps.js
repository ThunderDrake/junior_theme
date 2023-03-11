const steps = document.querySelectorAll('.step--hover');

if(steps.length) {
  steps.forEach(el => {
    el?.addEventListener('mouseover', (e) => {
      e.target.closest('.step').classList.add('step--active');
    });
    el?.addEventListener('mouseout', (e) => {
      e.target.closest('.step').classList.remove('step--active');
    });
  })
}
