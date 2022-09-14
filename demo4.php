<style>
  #container_loader {
    z-index: 1000;
    background-color: green;
    position: relative;
    height: 100%;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1090000;
    height: 100vh;
    width: 100vw;
    background-color: rgba(240, 240, 240, 0.5);
  }

  .truck-wrapper {
    height: 200px;
    width: 200px;
    border: 4px solid #1DD3D6;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%) scale(0.8);
    background: white;
    animation: bg 0.5s linear infinite;
    /* border-bottom:3px solid #404143; */
    border-radius: 100%;
    overflow: hidden;
    box-shadow: inset 0px 0px 10px 4px rgba(0, 0, 0, 0.3), inset 0px 0px 5px 0px #1DD3D6;
  }

  .truck-wrapper:after {
    content: 'Loading';
    font-size: 20px;
    position: absolute;
    bottom: 0px;
    text-align: center;
    width: 100%;
    border-top: 1px solid #1DD3D6;
    background: rgb(30, 252, 200);
    background: -moz-linear-gradient(left, rgba(30, 252, 200, 1) 0%, rgba(29, 211, 214, 1) 100%);
    background: -webkit-linear-gradient(left, rgba(30, 252, 200, 1) 0%, rgba(29, 211, 214, 1) 100%);
    background: linear-gradient(to right, rgba(30, 252, 200, 1) 0%, rgba(29, 211, 214, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1efcc8', endColorstr='#1dd3d6', GradientType=1);
    color: white;
    padding-top: 8px;
    padding-bottom: 18px;
    animation: bg 3s linear infinite;
  }

  .truck {
    height: 110px;
    width: 150px;
    position: absolute;

    bottom: 48px;
    left: calc(50% + 10px);
    transform: translateX(-50%);

  }


  .truck>.truck-container {
    background: rgb(175, 189, 195);
    background: -moz-linear-gradient(-45deg, rgba(175, 189, 195, 1) 0%, rgba(175, 189, 195, 1) 50%, rgba(143, 163, 173, 1) 51%, rgba(143, 163, 173, 1) 100%);
    background: -webkit-linear-gradient(-45deg, rgba(175, 189, 195, 1) 0%, rgba(175, 189, 195, 1) 50%, rgba(143, 163, 173, 1) 51%, rgba(143, 163, 173, 1) 100%);
    background: linear-gradient(135deg, rgba(175, 189, 195, 1) 0%, rgba(175, 189, 195, 1) 50%, rgba(143, 163, 173, 1) 51%, rgba(143, 163, 173, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#afbdc3', endColorstr='#8fa3ad', GradientType=1);
    height: 50px;
    width: 80px;
    position: absolute;
    top: 10px;
    left: 10px;
    animation: container 0.4s linear infinite;
  }

  .truck>.glases {
    background: rgb(40, 181, 245);
    background: -moz-linear-gradient(-45deg, rgba(40, 181, 245, 1) 0%, rgba(40, 181, 245, 1) 50%, rgba(2, 153, 227, 1) 52%, rgba(2, 153, 227, 1) 100%);
    background: -webkit-linear-gradient(-45deg, rgba(40, 181, 245, 1) 0%, rgba(40, 181, 245, 1) 50%, rgba(2, 153, 227, 1) 52%, rgba(2, 153, 227, 1) 100%);
    background: linear-gradient(135deg, rgba(40, 181, 245, 1) 0%, rgba(40, 181, 245, 1) 50%, rgba(2, 153, 227, 1) 52%, rgba(2, 153, 227, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#28b5f5', endColorstr='#0299e3', GradientType=1);
    position: absolute;
    height: 25px;
    width: 25px;
    border: 4px solid #FBD734;
    border-bottom: none;
    top: 35px;
    left: 95px;
    border-top-right-radius: 6px;
    animation: updown-half 0.4s linear infinite;
  }

  .truck>.glases:after {
    content: '';
    display: block;
    background-color: #FBD734;
    height: 13px;
    width: 10px;
    position: absolute;
    right: -10px;
    bottom: 0px;
    border-radius: 10px / 15px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-top-left-radius: 0px;

  }

  .truck>.glases:before {
    content: '';
    display: block;
    background-color: #F9BF2C;
    height: 12px;
    width: 16px;
    position: absolute;
    left: 0px;
    bottom: 0px;
    border-top-right-radius: 4px;
  }

  .truck>.bonet {
    background-color: #F9BF2C;
    position: absolute;
    width: 124px;
    height: 15px;
    top: 64px;
    left: 10px;
    z-index: -1;
    animation: updown 0.4s linear infinite;
  }

  .truck>.bonet:after {
    content: '';
    display: block;
    background: rgb(255, 255, 255);
    background: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 1) 0%, rgba(241, 241, 241, 1) 50%, rgba(225, 225, 225, 1) 51%, rgba(246, 246, 246, 1) 100%);
    background: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 1) 0%, rgba(241, 241, 241, 1) 50%, rgba(225, 225, 225, 1) 51%, rgba(246, 246, 246, 1) 100%);
    background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(241, 241, 241, 1) 50%, rgba(225, 225, 225, 1) 51%, rgba(246, 246, 246, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6', GradientType=1);
    height: 10px;
    width: 6px;
    position: absolute;
    right: 0px;
    bottom: 2px;
    border-top-left-radius: 4px;

  }

  .truck>.base {
    position: absolute;
    background-color: #445A64;
    width: 106px;
    height: 15px;
    border-top-right-radius: 10px;
    top: 70px;
    left: 14px;
    animation: updown 0.4s linear infinite;
  }

  .truck>.base:before {
    content: '';
    display: block;
    background-color: #E54A18;
    height: 12px;
    width: 5px;
    position: absolute;
    left: -4px;
    bottom: 0px;
    border-bottom-left-radius: 4px;
  }

  .truck>.base:after {
    content: '';
    display: block;
    background-color: RGB(84, 110, 122);
    height: 10px;
    width: 20px;
    position: absolute;
    right: -16px;
    bottom: 0px;
    border-bottom-right-radius: 4px;
    z-index: -1;
  }

  .truck>.base-aux {
    width: 82px;
    height: 8px;
    background-color: #F9BF2C;
    position: absolute;
    top: 65px;
    left: 14px;
    border-bottom-right-radius: 4px;
    animation: updown 0.4s linear infinite;
  }

  .truck>.wheel-back {
    left: 20px
  }

  .truck>.wheel-front {
    left: 95px;
  }

  .truck>.wheel-back,
  .truck>.wheel-front {

    border-radius: 100%;
    position: absolute;
    background: rgb(84, 110, 122);
    background: -moz-linear-gradient(-45deg, rgba(84, 110, 122, 1) 0%, rgba(84, 110, 122, 1) 49%, rgba(68, 90, 100, 1) 52%, rgba(68, 90, 100, 1) 100%);
    background: -webkit-linear-gradient(-45deg, rgba(84, 110, 122, 1) 0%, rgba(84, 110, 122, 1) 49%, rgba(68, 90, 100, 1) 52%, rgba(68, 90, 100, 1) 100%);
    background: linear-gradient(135deg, rgba(84, 110, 122, 1) 0%, rgba(84, 110, 122, 1) 49%, rgba(68, 90, 100, 1) 52%, rgba(68, 90, 100, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#546e7a', endColorstr='#445a64', GradientType=1);
    top: 80px;
    height: 22px;
    width: 22px;
    animation: spin 0.6s linear infinite;
  }

  .truck>.wheel-back:before,
  .truck>.wheel-front:before {
    content: '';
    border-radius: 100%;
    left: 5px;
    top: 5px;
    position: absolute;
    background: rgb(175, 189, 195);
    background: -moz-linear-gradient(-45deg, rgba(175, 189, 195, 1) 0%, rgba(175, 189, 195, 1) 50%, rgba(143, 163, 173, 1) 51%, rgba(143, 163, 173, 1) 100%);
    background: -webkit-linear-gradient(-45deg, rgba(175, 189, 195, 1) 0%, rgba(175, 189, 195, 1) 50%, rgba(143, 163, 173, 1) 51%, rgba(143, 163, 173, 1) 100%);
    background: linear-gradient(135deg, rgba(175, 189, 195, 1) 0%, rgba(175, 189, 195, 1) 50%, rgba(143, 163, 173, 1) 51%, rgba(143, 163, 173, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#afbdc3', endColorstr='#8fa3ad', GradientType=1);
    height: 12px;
    width: 12px;
  }

  @keyframes spin {
    50% {
      top: 81px;
    }

    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes container {

    30% {
      transform: rotate(1deg);
    }

    50% {
      top: 11px;
    }

    70% {
      top: 10px;
      transform: rotate(-1deg);
    }
  }

  .truck>.smoke {
    position: absolute;
    background-color: #AFBDC3;
    border-radius: 100%;
    width: 8px;
    height: 8px;
    top: 90px;
    left: 6px;
    animation: fade 0.4s linear infinite;
    opacity: 0;
  }

  .truck>.smoke:after {
    content: '';
    position: absolute;
    background-color: RGB(143, 163, 173);
    border-radius: 100%;
    width: 6px;
    height: 6px;
    top: -4px;
    left: 4px;
  }

  .truck>.smoke:before {
    content: '';
    position: absolute;
    background-color: RGB(143, 163, 173);
    border-radius: 100%;
    width: 4px;
    height: 4px;
    top: -2px;
    left: 0px;
  }

  @keyframes fade {

    30% {
      opacity: 0.3;
      left: 7px;
    }

    50% {
      opacity: 0.5;
      left: 6px;
    }

    70% {
      opacity: 0.1;
      left: 4px;
    }

    90% {
      opacity: 0.4;
      left: 2px;
    }
  }

  @keyframes bg {
    from {
      background-position-x: 0px;
    }

    to {
      background-position-x: -400px;
    }
  }

  @keyframes updown {
    50% {
      transform: translateY(-20%);
    }

    70% {
      transform: translateY(-10%);
    }
  }

  @keyframes updown-half {
    50% {
      transform: translateY(-10%);
    }

    70% {
      transform: translateY(-5%);
    }
  }
</style>
<div class="loader-wrapper" id="loader-wrapper">
  <div class="truck-wrapper">
    <div class="truck">
      <div class="truck-container"></div>
      <div class="glases"></div>
      <div class="bonet"></div>

      <div class="base"></div>

      <div class="base-aux"></div>
      <div class="wheel-back"></div>
      <div class="wheel-front"></div>

      <div class="smoke"></div>
    </div>
  </div>
</div>

<script>
  function loaderFunction() {
    var loader = document.getElementById('loader-wrapper');
    // var main = document.getElementById('main-container');
    loader.style.display = 'none';
    // main.style.display = 'block';
  }
  // function onloadFunctions() {

  // }
  setTimeout(loaderFunction, 4000);
</script>