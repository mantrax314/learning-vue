<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vue 1</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <div id="demo" class="container">
      <input type="text" v-model="name">
      <pre>
        {{ $data | json}}
      </pre>
    </div>
    <script type="text/javascript" src="vue.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
  </body>
</html>
