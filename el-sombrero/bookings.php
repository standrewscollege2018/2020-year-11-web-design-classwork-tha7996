<!-- book -->


<div class="booking-container">

  <h1>Bookings</h1>
  <p style = 'font-family: sans-serif; padding: 2px;'>Hey! Thanks for booking at El Sombrero. Please enter your info below:<br></br></p>

  <!-- booking form -->
  <form class="booking-form" action="index.php?page=bookings-results" method="post">

    <label for="name">Enter name:</label><br>
    <input id='name' type="text" name="booking_name">

    <br>

    <label for="time">Enter Time:</label><br>
    <select id="time" class="" name="booking_time">
      <option value="1700">5:00pm</option>
      <option value="1730">5:30pm</option>
      <option value="1800">6:00pm</option>
      <option value="1830">6:30pm</option>
      <option value="1900">7:00pm</option>
      <option value="1930">7:30pm</option>
    </select>

    <br>

    <label for="guests">Enter number of guests:</label><br>
    <input id='guests' type="number" name="booking_size" min=1 max=10>

    <br>

    <button type="submit" name="submit">Book</button>

  </form>

</div>

<img src="assets/open-sign.jpg" alt="Open sign" style = 'max-width: 100%; height: auto; padding-top: 10px;'>
