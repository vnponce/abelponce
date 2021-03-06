<!DOCTYPE html>
<html>
<head>
<title>Project Title</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
<style> @-ms-viewport { width: device-width; } </style>
<link rel="stylesheet" href="/tour/vendor/reset.min.css">
<link rel="stylesheet" href="/tour/style.css">
</head>
<body class="multiple-scenes view-control-buttons">

<div id="pano"></div>

<div id="sceneList">
  <ul class="scenes">

      <a href="javascript:void(0)" class="scene" data-id="0-50054908946_6393b83d91_o">
        <li class="text">50054908946_6393b83d91_o</li>
      </a>

      <a href="javascript:void(0)" class="scene" data-id="1-50050150058_3575e7fda1_o">
        <li class="text">50050150058_3575e7fda1_o</li>
      </a>

  </ul>
</div>

<div id="titleBar">
  <h1 class="sceneName"></h1>
</div>

<a href="javascript:void(0)" id="autorotateToggle">
  <img class="icon off" src="/tour/img/play.png">
  <img class="icon on" src="/tour/img/pause.png">
</a>

<a href="javascript:void(0)" id="fullscreenToggle">
  <img class="icon off" src="/tour/img/fullscreen.png">
  <img class="icon on" src="/tour/img/windowed.png">
</a>

<a href="javascript:void(0)" id="sceneListToggle">
  <img class="icon off" src="/tour/img/expand.png">
  <img class="icon on" src="/tour/img/collapse.png">
</a>

<a href="javascript:void(0)" id="viewUp" class="viewControlButton viewControlButton-1">
  <img class="icon" src="/tour/img/up.png">
</a>
<a href="javascript:void(0)" id="viewDown" class="viewControlButton viewControlButton-2">
  <img class="icon" src="/tour/img/down.png">
</a>
<a href="javascript:void(0)" id="viewLeft" class="viewControlButton viewControlButton-3">
  <img class="icon" src="/tour/img/left.png">
</a>
<a href="javascript:void(0)" id="viewRight" class="viewControlButton viewControlButton-4">
  <img class="icon" src="/tour/img/right.png">
</a>
<a href="javascript:void(0)" id="viewIn" class="viewControlButton viewControlButton-5">
  <img class="icon" src="/tour/img/plus.png">
</a>
<a href="javascript:void(0)" id="viewOut" class="viewControlButton viewControlButton-6">
  <img class="icon" src="/tour/img/minus.png">
</a>

<script src="/tour/vendor/es5-shim.js"></script>
<script src="/tour/vendor/eventShim.js"></script>
<script src="/tour/vendor/classList.js"></script>
<script src="/tour/vendor/requestAnimationFrame.js" ></script>
<script src="/tour/vendor/screenfull.min.js" ></script>
<script src="/tour/vendor/bowser.min.js" ></script>
<script src="/tour/vendor/marzipano.js" ></script>

<script src="/tour/data.js"></script>
<script src="/tour/index.js"></script>

</body>
</html>
