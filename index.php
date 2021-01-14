<?php include("header.php");?>
<?php include("menuItem.php")?>

  <div id="content" class="clearfix">
                <aside>
						<?php 
						
							$stars = "*";
							$i = 1;
							$menuItems;
							while($i < 7)
							{
								$menuItems[] = ($i%2==0) ? new menuItem("WP Kebabs".$stars.$i, "Tender cuts of beef and chicken, served with your choice of side", $i) 
								: new menuItem("The WP Burger".$stars.$i, "Freshly made all-beef patty served up with homefries", $i);
								$i++;
								$stars .= "*";
							}
						?>
						<?php echo "<h2>" . date("l") . "'s Specials" . "</h2>"; ?> 
                        <hr>
                        <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
			
                        <?php 
						echo "<h3>".$menuItems[0]->getItemName()."</h3>";
						echo "<p>".$menuItems[0]->getDescription()." - $".$menuItems[0]->getPrice()."</p>";
						?>
                        <hr>
                        <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
                         <?php 
						echo "<h3>".$menuItems[1]->getItemName()."</h3>";
						echo "<p>".$menuItems[1]->getDescription()." - $".$menuItems[1]->getPrice()."</p>";
						?>
                        <hr>
                </aside>
                <div class="main">
                    <h1>Welcome</h1>
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h2>Book your Christmas Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div><!-- End Main -->
            </div><!-- End Content -->
<?php include("footer.php");?>


          