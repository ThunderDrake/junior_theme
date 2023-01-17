import Choices from "choices.js";
import SimpleBar from "simplebar";

const scheduleSelect = document.querySelectorAll('.schedule__select-select');

if(scheduleSelect.length) {
  const selectorsArray = [...scheduleSelect];

  const firstSelector = new Choices (selectorsArray[0], {
    searchEnabled: false,
    shouldSort: false,
    position: 'bottom',
  });

  const secondSelector = new Choices (selectorsArray[1], {
    searchEnabled: false,
    shouldSort: false,
    position: 'bottom',
  });

  const thirdSelector = new Choices (selectorsArray[2], {
    searchEnabled: false,
    shouldSort: false,
    position: 'bottom',
  });


  selectorsArray[0].addEventListener('choice', function(event) {
    let formData = new FormData();
    formData.append('tax_id', event.detail.choice.value);
    formData.append('action', 'disctrict_action');
    formData.append('nonce', disctrict_object.nonce);
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
        }
      }
    }

    xhr.open('POST', disctrict_object.url, true);
    xhr.responseType = 'json';
    xhr.send(formData);
    xhr.onload = function() {
      let responseObj = xhr.response;

      secondSelector.setChoices(
        responseObj.district,
        'value',
        'label',
        true
      );
      thirdSelector.setChoices(
        responseObj.group,
        'value',
        'label',
        true
      );
    };
  });

  selectorsArray[0].addEventListener('change', function(event) {
    setTimeout(function(){
      let formData = new FormData();
      console.log(secondSelector.getValue(true));
      formData.append('affilate_slug', secondSelector.getValue(true));
      formData.append('action', 'schedule_action');
      formData.append('nonce', schedule_object.nonce);
      let xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            console.log('Отправлено');
          }
        }
      }

      xhr.open('POST', schedule_object.url, true);
      xhr.responseType = 'json';
      xhr.send(formData);
      xhr.onload = function() {
        let responseObj = xhr.response;
        const table = document.querySelector('.schedule__table .simplebar-content');
        console.log(responseObj);
        table.innerHTML = responseObj;
      };
    }, 1000)
  });

  selectorsArray[1].addEventListener('change', function(event) {
    let formData = new FormData();
    formData.append('affilate_slug', secondSelector.getValue(true));
    formData.append('action', 'schedule_action');
    formData.append('nonce', schedule_object.nonce);
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          console.log('Отправлено');
        }
      }
    }

    xhr.open('POST', schedule_object.url, true);
    xhr.responseType = 'json';
    xhr.send(formData);
    xhr.onload = function() {
      let responseObj = xhr.response;
      const table = document.querySelector('.schedule__table .simplebar-content');
      console.log(responseObj);
      table.innerHTML = responseObj;
    };
  });

  selectorsArray[2].addEventListener('choice', function(event) {
    let items = document.querySelectorAll('.table-item');
    let value = event.detail.choice.value;

    // columns.forEach(column => {
    //   let items = column.querySelectorAll('.table-item');
    //   console.log([...items].filter(el=>{
    //     console.log(el.dataset.group);
    //   }));
    //   if([...items].filter(el=>{
    //     el.dataset.group == value;
    //   }).length = 0) {
    //     column.querySelector('.table-item--all-empty').style.display = 'block';
    //   } else {
    //     items.forEach(item => {
    //       let group = item?.querySelector('[data-group]');
    //       item.classList.add('d-none');
    //       if(value == '') {
    //         if(!item.classList.contains('table-item--empty')) {
    //           item.classList.remove('d-none');
    //         }
    //       } else {
    //         if(group?.dataset.group == value || item.classList.contains('table-item--empty')) {
    //           item.classList.remove('d-none');
    //         }
    //       }
    //     })
    //   }
    // });

    items.forEach(el=>{
      let group = el?.querySelector('[data-group]');
      el.classList.add('d-none')
      if(value == '') {
        if(!el.classList.contains('table-item--empty')) {
          el.classList.remove('d-none');
        }
      } else {
        if(el?.dataset.group == value) {
          el.classList.remove('d-none');
        }
      }
    })
  })
}

