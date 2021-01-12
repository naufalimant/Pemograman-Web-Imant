<?php
session_start();
$pageTitle = 'Dictionary - MOSHION.';
include 'header.php';
?>

<!-- top bar -->
<div class="top-bar">
    <h1>Dictionary</h1>
</div>
<!-- end top bar -->

<div class="container main-container">
    <div class="clearfix">

        <table style="width:100%">
            <tr>
                <th>Word</th>
                <th>Meaning</th>
            </tr>
            <tr>
                <td>mode<br>
                    /mōd/</td>
                <td>a fashion or style in clothes, art, literature, etc.</td>
            </tr>
            <tr>
                <td>the avant-garde<br>
                    /ˌæv.ɑ̃ːˈɡɑːrd/
                </td>
                <td>refers to never seen before innovative designs by designers who are original thinkers bringing change to fashion.</td>
            </tr>
            <tr>
                <td>Passe<br>
                    /passé/</td>
                <td>refers to anything that is No longer fashionable; out of date fashion. This is deemed an insult in fashionable circles.</td>
            </tr>
        </table>

    </div>
</div>
<?php include 'footer.php' ?>