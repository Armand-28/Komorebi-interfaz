<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div class="container">
      <!-- Header 1 de la pagina-->
      <header>
        <p><i class="fa-sharp fa-solid fa-phone"></i></p>
        <p><i class="fa-solid fa-user"></i></p>
        <p><i class="fa-solid fa-message"></i></p>
      </header>
      <!-- header 2 de la pagina  -->
      <header class="navegacion">
        <p class="seguir">
          <i class="fa-solid fa-chevron-left"></i>Seguir Comprando
        </p>
        <p>
          <a href="../index/index.html"
            ><img src="../imagenes/miplaza.png" alt=""
          /></a>
        </p>
        <input type="search" placeholder="¿Que buscas hoy?" /><span
          ><i class="fa-solid fa-magnifying-glass"></i
        ></span>
        <p class="carro"><i class="fa-solid fa-cart-shopping"></i></p>
        <p>
          <li class="li-1"><a href="">Mi carrito</a></li>
        </p>
        <p class="cuenta">
          <a href="../login/login.html"
            ><i class="fa-solid fa-circle-user"></i
          ></a>
        </p>
        <li class="li-2"><a href="#">Mi cuenta</a></li>
        <div>
          <p class="modoentrega">
            <i class="fa-sharp fa-solid fa-shop"></i
            ><a href="#">Modo de entrega</a>
          </p>
          <p class="quienessomos">
            <a href="../nosotros/nosotros.html"
              ><i class="fa-solid fa-store"></i> ¿Quienes somos?</a
            >
          </p>
        </div>
      </header>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
