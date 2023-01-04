import Choices from "choices.js";

const customSelects = document.querySelectorAll('.custom-select');

if(customSelects.length) {
  customSelects.forEach(select => {
    const choise = new Choices(select, {
      searchEnabled: false,
      position: 'bottom',
    })
  })
}
