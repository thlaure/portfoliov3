import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';

import Input, { Textarea, checkEmail, ucwords, isString } from './Form';

/**
 * React component that manages the contact form.
 */
class ContactForm extends Component {

  constructor(props) {
    super(props);
    this.state = {
      name: "",
      firstname: "",
      email: "",
      message: "",
      alert: "",
      class: ""
    }
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(e) {
    const name = e.target.name;
    this.setState({
      [name]: e.target.value
    });
  }

  handleSubmit(e) {
    e.preventDefault();

    let name = isString(this.state.name.trim()) ? ucwords(this.state.name.trim()) : this.setState({
      name: this.state.name,
      firstname: this.state.firstname,
      email: this.state.email,
      message: this.state.message,
      alert: "Veuillez saisir un nom",
      class: "alert-danger"
    });
    let firstname = isString(this.state.firstname.trim()) ? ucwords(this.state.firstname.trim()) : this.setState({
      name: this.state.name,
      firstname: this.state.firstname,
      email: this.state.email,
      message: this.state.message,
      alert: "Veuillez saisir un prénom",
      class: "alert-danger"
    });
    let email = checkEmail(this.state.email.trim()) ? this.state.email.trim() : this.setState({
      name: this.state.name,
      firstname: this.state.firstname,
      email: this.state.email,
      message: this.state.message,
      alert: "Veuillez saisir un email valide",
      class: "alert-danger"
    });
    let message = this.state.message.trim().length > 0 ? this.state.message.trim() : this.setState({
      name: this.state.name,
      firstname: this.state.firstname,
      email: this.state.email,
      message: this.state.message,
      alert: "Veuillez saisir un message",
      class: "alert-danger"
    });

    $.ajax({
      url: "http://portfolio.local/form/contact",
      type: "POST",
      data: { "name": name, "firstname": firstname, "email": email, "message": message },
      success: function(response) {
        this.setState({
          name: "",
          firstname: "",
          email: "",
          message: "",
          alert: response.message,
          class: "alert-success"
        });
      }.bind(this),
      error: function(xhr) {
        this.setState({
          alert: `An error occured: ${xhr.status} ${xhr.statusText}`,
          class: "alert-danger"
        });
      }.bind(this)
    });
  }

  render() {
    return <form className="container shadowing p-3 bg-dark-smoke text-light rounded" onSubmit={this.handleSubmit}>
      <div className={"text-center alert " + this.state.class} role="alert">{this.state.alert}</div>
      <div className="form-row">
        <div className="col-md-4">
          <Input type="text" name="name" value={this.state.name} onChange={this.handleChange}>Votre nom</Input>
          <Input type="text" name="firstname" value={this.state.firstname} onChange={this.handleChange}>Votre prénom</Input>
          <Input type="email" name="email" value={this.state.email} onChange={this.handleChange}>Votre email</Input>
          <small className="mx-auto form-text text-light">Votre adresse mail ne sera pas partagée</small>
        </div>
        <div className="col-md-8">
          <Textarea name="message" rows="8" value={this.state.message} onChange={this.handleChange}>Votre message</Textarea>
        </div>
      </div>
      <div className="text-center">
        <button className="btn btn-light"><i className="fas fa-paper-plane"></i> Envoyer</button>
      </div>
    </form>
  }
}

ReactDOM.render(<ContactForm />, document.getElementById("contact-form"));