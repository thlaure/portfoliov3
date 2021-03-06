import React from 'react';

/**
 * Component that allows you to create an input field.
 * @param {*} param0
 */
function Input({ name, value, onChange, type, children }) {
  return <div className="form-group">
    <label htmlFor={name}>{children}</label>
    <input type={type} value={value} onChange={onChange} id={name} name={name} className="form-control" />
  </div>
}

/**
 * Component that allows you to create a textarea.
 * @param {*} param0
 */
function Textarea({ name, rows, value, onChange, children }) {
  return <div className="form-group">
    <label htmlFor={name}>{children}</label>
    <textarea className="form-control" id={name} name={name} value={value} onChange={onChange} rows={rows}></textarea>
  </div>
}

/**
 * Function that check the email validity.
 * @param {string} email Email to check.
 */
function checkEmail(email) {
  return /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email);
}

/**
 * Check if the param is a string.
 * @param {*} str Element to check.
 */
function isString(str) {
  return str !== undefined && str.trim().length > 0 && typeof str === "string" && isNaN(parseInt(str));
}

/**
 * PHP ucwords equivalent.
 * @param {string} name Name to transform.
 */
function ucwords(name) {
  return name.toLowerCase().replace(/(?<= )[^\s]|^./g, letter => letter.toUpperCase());
}

export default Input;

export {
  Textarea,
  checkEmail,
  ucwords,
  isString
}