<!DOCTYPE html>
<html>
  <head>
    <title>Football Game Predictor</title>
  </head>
  <body>
    <form id="predict-form">
      <label for="team1">Team 1:</label>
      <input type="text" id="team1" name="team1">

      <label for="team2">Team 2:</label>
      <input type="text" id="team2" name="team2">

      <input type="submit" value="Predict">
    </form>

    <p id="prediction"></p>

    <script>
      // add an event listener to the form
      document.getElementById('predict-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // get the input data from the form
        var team1 = document.getElementById('team1').value;
        var team2 = document.getElementById('team2').value;

        // send a request to the server with the input data
        fetch('http://localhost:5000/predict', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ team1: team1, team2: team2 })
        })
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          // update the page with the prediction
          document.getElementById('prediction').innerHTML = data.prediction;
        });
      });
    </script>
  </body>
</html>