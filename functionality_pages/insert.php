<html>
    <head>
        <style>
            body {
                overflow-x: hidden;
                background-color: #dbd9da;
                font-family: 'Roboto', sans-serif;
            }
            * {
                margin: 0;
                padding: 0;
                list-style: none;
                text-decoration: none;
            }

            .page {
                text-align: center;
                position: relative;
                right: -5%;
                width: 60%;
                margin: auto;
            }

            .sidebar {
                position: fixed;
                left: 0;
                width: 250px;
                height: 100%;
                background: #575555;  
            }

            .sidebar header img{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 75%;
                height: 22.5%;
            }

            .sidebar ul li a {
                display: block;
                height: 6%;
                width: 100%;
                line-height: 15px;
                padding-left: 50px;
                pading-top: 50px;
                font-size: 20px;
                color: #ab998c;
                box-sizing: border-box;
                border-top: 1px solid rgba(87, 85, 85, 0.8);
                border-bottom: 1px solid rgba(87, 85, 85, 0.8);
            }

            .sidebar ul ul li a {
                display: block;
                height: 6%;
                width: 100%;
                line-height: 15px;
                padding-left: 80px;
                pading-top: 50px;
                
            }

            input[type=submit] {
                background: #575555;
                color: #ab998c;
                padding: 10px;
                border-radius: 10px;
            }

            input[type="text"] {
                border-radius: 4px;
                border: 2px solid #575555;
                margin: 15px;
            }

            
        </style>
    </head>
    <body>
        <div class= "sidebar">
            <header>
                <img src="https://cdn2.downdetector.com/static/uploads/logo/Hunt_Logo_Black.png">
            </header>
            <ul>
                <li><a href="../main.php">Home</a></li>
                <li><a href="../entity_pages/hunters.php">Hunters</a></li>
                <li><a href="../entity_pages/monsters.php">Monsters</a></li>
                <li><a href="../entity_pages/locations.php">Locations</a></li>
                <li><a href="../entity_pages/traits.php">Traits</a></li>
                <li><a href="../entity_pages/tools.php">Tools</a></li>
                <li><a href="../entity_pages/consumables.php">Consumables</a></li>
                <ul>
                    <li><a href="../entity_pages/syringes.php">Syringes</a></li>
                    <li><a href="../entity_pages/explosives.php">Explosives</a></li>
                </ul>
                <li><a href="../entity_pages/firearms.php">Firearms</a></li>
                <ul>
                    <li><a href="../entity_pages/ammo.php">Ammo</a></li>
                </ul>
                <li><a href="../entity_pages/more.php">More...</a></li>
            </ul>
        </div>
        <div class="page">
            <center>
                <h1>INSERT</h1>
            </center>
            <center>
                <h2>TABLE: Trait</h2>
            </center>

            <div class="insert">
                <form method="POST" action="insert.php"> <!--refresh page when submitted-->
                    <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
                    Trait Name: <input type="text" name="traitName"> <br /><br />
                    Trait Description: <input type="text" name="traitDescription"> <br /><br />
                    Trait Cost: <input type="text" name="traitCost"> <br /><br />
                    <center>
                        <input type="submit" value="Insert" name="POST">
                    </center>
                </form>
            </div>
        </div>

        <?php
            include '../backend_functionality/api.php';
            handleAPIRequest();
        ?>
    </body>
</html>

