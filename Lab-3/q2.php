<!-- 2 Create form for following using form and table tag. Pass all data in other form. -->
<html>
    <body>
        <h1>School ID Registration Form</h1>
        <hr/>
        <form method="post" action="">
            <label for="name"><b>Name:</b></label>
            <br/>
            <table>
                <tr>
                    <td><input type="text" name="fn" required></td>
                    <td><input type="text" name="ln" required></td>
                </tr>
                <tr>
                    <td>First</td>
                    <td>Last</td>
                </tr>
            </table>
            <label for="grad"><b>Expected Year of Graduation:</b></label>
            <br/>
            <input type="number" name="grad" required>
            <br/>
            <label for="address-1"><b>Address Line 1:</b></label>
            <br/>
            <input type="text" name="address-1" required>
            <br/>
            <label for="address-2"><b>Address Line 2:</b></label>
            <br/>
            <input type="text" name="address-2">
            <br/>
            <button type="submit">Register</button>
        </form>

        <h2>Registered Information</h2>
        <table border="1">
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo $_POST['fn']; ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $_POST['ln']; ?></td>
            </tr>
            <tr>
                <td>Expected Year of Graduation</td>
                <td><?php echo $_POST['grad']; ?></td>
            </tr>
            <tr>
                <td>Address Line 1</td>
                <td><?php echo $_POST['address-1']; ?></td>
            </tr>
            <tr>
                <td>Address Line 2</td>
                <td><?php echo $_POST['address-2']; ?></td>
            </tr>
        </table>
    </body>
</html>