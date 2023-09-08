<h1>Registration Form</h1>



<?php if (!empty($error_message)) echo $error_message;  ?>

<div class="flex">

    <form action="?page=signup" method="POST">

        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo">

        <label for="email">Email adress</label>
        <input type="email" name="email" id="email" required>

        <label for="birthdate">Date of birth</label>
        <input type="date" name="birthdate" id="birthdate">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit" name="register">Register</button>
    </form>

</div>