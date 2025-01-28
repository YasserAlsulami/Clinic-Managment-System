<form action="../actions/book_appointment_action.php" method="POST">
    <label for="date">Appointment Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Appointment Time:</label>
    <input type="time" id="time" name="time" required>

    <label for="doctor">Select Doctor:</label>
    <select id="doctor" name="doctor" required>
        <option value="Dr. Smith">Dr. Smith</option>
        <option value="Dr. Johnson">Dr. Johnson</option>
    </select>

    <button type="submit">Book Appointment</button>
</form>