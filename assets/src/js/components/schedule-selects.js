import Choices from "choices.js";

const scheduleSelect = document.querySelectorAll('.schedule__select-select');

if(scheduleSelect.length) {
  scheduleSelect.forEach(select => {
    const choise = new Choices(select, {
      searchEnabled: false,
      position: 'bottom',
    })
  })
}
