<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vue 3</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <div id="demo" class="container">
      <ul>
        <li v-repeat="name: names">{{ name }}</li>
      </ul>
      <input type="text" placeholder="Agregar nombre" v-model="newName" v-on="blur:addName">
    </div>
    <script type="text/javascript" src="vue.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
  </body>
</html>
