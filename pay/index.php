<!DOCTYPE html>
<html>
<head>
  <title>Building Brainiacs</title>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    #paypal-form { display: none; }
    #loading {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #f5f6f6;
    }
    #loading .content {
      max-width: 600px;
      max-height: 600px;
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      margin: auto;
    }
    h2 {
      font-family: Arial, sans-serif;
      font-size: 30px;
      text-align: center;
      font-weight: 400;
      line-height: 1.2em;
      text-align: center;
      margin-top: 80px;
      color: #0a3345;
      font-style: italic;
    }
  </style>
</head>
<body>
  <div id="loading">
    <div class="content">
      <img src="../css/images/logo-color.svg" />
      <h2>One moment while we redirect you to the payment portal...</h2>
    </div>
  </div>
  <form id="paypal-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="LQ3Z42UDV7K4N">
  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
  </form>
  <script type="text/javascript">
    document.querySelector('#paypal-form').submit();
  </script>
</body>
</html>