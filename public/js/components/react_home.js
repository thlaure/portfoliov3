/**
 * React component that calculates my age.
 */
function Age() {
  let today = new Date();
  const birthday = new Date('1997-06-17');
  let difference = today.getFullYear() - birthday.getFullYear();

  // eslint-disable-next-line
  if (today.getMonth() - birthday.getMonth() < 0 || today.getDate() - birthday.getDate() < 0 && today.getMonth() === birthday.getMonth()) {
    return <span>{difference - 1}</span>;
  } else {
    return <span>{difference}</span>;
  }
}

ReactDOM.render(<Age />, document.getElementById("age"));