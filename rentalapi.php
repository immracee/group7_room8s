
<html>
    <head>
      <title>Roommates App - Rental Search</title>
      <meta charset="utf-8" />
      <meta name="description" content="Find a rental!">
      <meta name="keywords" content="roommates, moving, relocation, accomodation">
      <meta name="viewport" content="initial-scale=1.0, width=device-width" />
      <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js"
        type="text/javascript" charset="utf-8"></script>
      <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js"
        type="text/javascript" charset="utf-8"></script>
      <script src="http://js.api.here.com/v3/3.0/mapsjs-ui.js"
        type="text/javascript" charset="utf-8"></script>
      <link rel="stylesheet" type="text/css"
        href="http://js.api.here.com/v3/3.0/mapsjs-ui.css" />
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">

  <body>

      <input type="text" name="location" id="location">
      <button type="submit" name="button" id="submitLocation">submit</button>
      <br/> <br/>

    <div style="width: 640px; height: 480px" id="mapContainer"></div>

    <div id="displayRentals">

    </div>

  <script src="./js/scripts.js"></script>
  </body>
</html>
