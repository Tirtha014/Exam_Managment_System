<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<style>
  ul {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #1bc2a2;
}
ul li {
  display: block;
  position: relative;
  float: left;
  background: #1bc2a2;
}
li ul { display: none; }
ul li a {
  display: block;
  padding: 1em;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
}
ul li a:hover { background: #2c3e50; }
li:hover > ul {
  display: block;
  position: absolute;
}
li:hover li { float: none; }
li:hover a { background: #1bc2a2; }
li:hover li a:hover { background: #2c3e50; }
.main-navigation li ul li { border-top: 0; }
ul ul ul {
  left: 100%;
  top: 0;
}
ul:before,
ul:after {
  content: " "; /* 1 */
  display: table; /* 2 */
}
ul:after { clear: both; }
  </style>
<body>
<ul class="main-navigation">
  <li><a href="#">Home</a></li>
  <li><a href="#">Front End Design</a>
    <ul>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a>
        <ul>
          <li><a href="#">Resets</a></li>
          <li><a href="#">Grids</a></li>
          <li><a href="#">Frameworks</a></li>
        </ul>
      </li>
      <li><a href="#">JavaScript</a>
        <ul>
          <li><a href="#">Ajax</a></li>
          <li><a href="#">jQuery</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a href="#">WordPress Development</a>
    <ul>
      <li><a href="#">Themes</a></li>
      <li><a href="#">Plugins</a></li>
      <li><a href="#">Custom Post Types</a>
        <ul>
          <li><a href="#">Portfolios</a></li>
          <li><a href="#">Testimonials</a></li>
        </ul>
      </li>
      <li><a href="#">Options</a></li>
    </ul>
  </li>
  <li><a href="#">About Us</a></li>
</ul>
</body>
</html>
