@extends('layouts.app')
@section('content')
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">

    <a class="navbar-brand justify-content-between" > <i class="fas fa-user-circle"></i>{{ Auth::user()->name }}</a>

      <ul class=" navbar-nav mr-right mt-2 mt-lg-0 ">

        <li class="nav-item">
            <a class="nav-link " href='poslog'><i class="fas fa-home"></i>Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " ><i class="fas fa-shopping-basket"></i>Loja</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link "  href='contato'><i class="fas fa-phone-square"></i> Contato </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href='about'><i class="far fa-lightbulb"></i> Sobre </a>
        </li>

        <li class="nav-item">
          <a  href="{{ url('/logout') }}"  onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>Sair
          </a>
        </li>

</nav>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/recovimg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Contate-nos</h1>
            <span class="subheading">Possui alguma dúvida? nós podemos te ajudar!</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Deseja entrar em contato conosco? preencha o formulário abaixo e iremos retornar o quanto antes possível.</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Endereço de E-mail" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Phone Number</label>
              <input type="tel" class="form-control" placeholder="Número de Telefone" id="phone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Message</label>
              <textarea rows="5" class="form-control" placeholder="Insira aqui a sua mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>
  @endsection
