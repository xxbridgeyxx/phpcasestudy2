<nav id="navigation">
    <div class="logo">
        WETLANDS
    </div>
    <div>
        <ul class="navLinks">
            <li>
                <a href="ABOUTUS.php">Home</a>
            </li>
            <li>
                <a>About Us</a>
            </li>
            <li>
                <a>Products</a>
            </li>
            <li>
                <a>Contact</a>
            </li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="dropbtn"><img src="../images/drpdwn.png" height="25" width="25"/></button>
        <div class="dropdown-content">
<!--            <a href="lizardpage.html">Lizard button</a>-->
<!--            <a href="snakepage.html">Snake button</a>-->
<!--            <a href="reptilepage.html">Frog button</a>-->
<!--            <a href="fishpage.html">Fish button</a>-->
            <?php
            include_once "class/User.php";
            $user = new User(null, "", "", "");
            $categories = $user->viewCategories();
            $i = 0;
            while ($i < sizeof($categories)){
                $category = $categories[$i];
                echo "<a href='products.php?categoryID=".$category->id."'>".$category->name."</a>";
                $i = $i + 1;
            }
            ?>
        </div>
        <img src="../images/cart.png" height="25" width="25"/>
    </div>

</nav>

