<html>
    <head>
        <title>
            Login Sanberbook
        </title>
    </head>
    <body>
        <h1>
            Buat Account Baru!
        </h1>
        <h2>
            Sign Up Form
        </h2>
        <form>
            <label>First name: </label> <br> <br>
            <input type="text" name="firstname">
            <br> <br>
            
            <label>Last name: </label> <br> <br>
            <input type="text" name="lastname">
            <br> <br>
            
            <label>Gender: </label> <br> <br>
            <input type="radio" name="gender">Male <br>
            <input type="radio" name="gender">Female <br>
            
            <br><br>
            <label>Nationality: </label> <br><br>
            <select>
                <option>Indonesian</option>
                <option>English</option>
                <option>United States</option>
                <option>Arabian</option>
            </select>

            <br><br>
            <label>Language Spoken: </label><br><br>
            <input type="checkbox" name="Language">Bahasa Indonesia<br>
            <input type="checkbox" name="Language">English<br>
            <input type="checkbox" name="Language">Other<br>

            <br>
            <label> Bio: </label> <br>
            <textarea cols="30" rows="5"></textarea>

            <br><br>
            <input type="submit"
            value="Sign Up"
            formaction="/welcome">
        </form>
    </body>
</html>