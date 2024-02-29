<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE) {
    echo "Bonjour, " . $_SESSION['username'] . " Je vous souhaite la bienvenue sur ce modeste blog.";
    echo ' Tu veux <a href="index.php?action=logout">Se déconnecter?</a>';
} else {
    echo '
           

          
            <p>Bienvenue dans notre espace unique ! Prêt(e) à explorer ?</p>
            <p>Si vous avez déjà un compte, <a href="login.php" class="login-btn">Connectez-vous ici</a> pour plonger dans l"aventure'  ;
};
