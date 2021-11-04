<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search</title>
    <link rel="stylesheet" href="index.css" />
  </head>

  <body>
    <div>
      <div id="navi">
        <a href="images.html">Image Search</a>
        <a href="advanced.html">Advanced Search</a>
      </div>
    </div>

    <br />
    <div class="logo"></div>
    <div class="center">
      <div id="form">
        <form action="https://google.com/search" method="get">
          <input
            id="hakubox"
            autocomplete="off"
            autofocus
            type="text"
            name="q"
          />
          <br />
          <div class="center">
            <input id="submit-btn" type="submit" value="Google Search" />
            <input id="lucky-btn" name="btnI" type="submit" value="I'm Feeling Lucky" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
