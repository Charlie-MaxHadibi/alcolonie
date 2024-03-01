<?php
    echo '  <footer>
            <div class="footer-left">
            <a href="https://www.instagram.com/mls_fest/" target="_blank" rel="noopener" rel="noreferrer"><img src="logo.png" alt="Logo"></a>
            </div>
            <div class="footer-right">
            <p>';
    if (isset($seed)){
        echo 'ID PARTIE '.$seed;
    }
    echo '  </p>
            </div>
            </footer>';

?>