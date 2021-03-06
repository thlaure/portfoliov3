import React, {Component} from 'react';
import ReactDOM from 'react-dom';

/**
 * React component that calculates my age.
 */
class Age extends Component {

  constructor(props) {
    super(props);
    this.state = {age: 0};
  }

  componentDidMount() {
    this.calculateAge("1997-06-17");
  }

  calculateAge(birthdayParam) {
    let today = new Date();
    const birthday = new Date(birthdayParam);
    let difference = today.getFullYear() - birthday.getFullYear();

    // eslint-disable-next-line
    if (today.getMonth() - birthday.getMonth() < 0 || today.getDate() - birthday.getDate() < 0 && today.getMonth() === birthday.getMonth()) {
      this.setState({age: difference - 1});
    } else {
      this.setState({age: difference});
    }
  }

  render() {
    return (
      <span>{this.state.age}</span>
    );
  }
}

ReactDOM.render(<Age />, document.getElementById("age"));