import { validateForms } from '../functions/validate-forms';
import GraphModal from 'graph-modal';
import modal from "./team-modal.js";

const rules1 = [
  {
    ruleSelector: '#firstForm .form__input--name',
    rules: [
      {
        rule: 'minLength',
        value: 3
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '#firstForm .form__input--phone',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
];

const rules2 = [
  {
    ruleSelector: '#secondForm .form__input--name',
    rules: [
      {
        rule: 'minLength',
        value: 3
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '#secondForm .form__input--phone',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
];

const rules3 = [
  {
    ruleSelector: '#callback .form__input--name',
    rules: [
      {
        rule: 'minLength',
        value: 3
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '#callback .form__input--phone',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
];

const afterForm = () => {
  modal.close();

  location.href = '/thank-you/'
};

console.log(form_object);

validateForms('#firstForm', rules1, form_object.url, form_object.nonce, 'form_action', afterForm);
validateForms('#secondForm', rules2, form_object.url, form_object.nonce, 'form_action', afterForm);
validateForms('#callback', rules3, form_object.url, form_object.nonce, 'form_action', afterForm);
