<?php
    echo '  <nav>
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo center"><img class="" src="header.png"></a>
                    <ul id="nav-mobile" class="right">
                        <li>'; if(isset ($seed)){echo 'ID PARTIE = '.$seed;}echo '</li>
                    </ul>
                </div>
            </nav>
    ';
?>