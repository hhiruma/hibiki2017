<!-- <div id="contactContainer" style="background-image:url('<?php echo get_template_directory_uri();?>/images/contact/bg.png')"> -->
<div id="contactContainer">
    <div id="formContainer">
        <div id="contactTitle">
            <h1>CONTACT</h1>
        </div>
        <div id="contactMain">
            description
            <hr>
            <form>
                <table>
                    <tr>
                        <td><span> お名前 </span></td>
                        <td><input type="text"></input></td>
                    </tr>
                    <tr>
                        <td><span> ご連絡先（メールアドレス） </span></td>
                        <td><input type="text"></input></td>
                    </tr>
                    <tr>
                        <td><span> ご用件 </span></td>
                        <td style="padding: 10px 0 0 0;"><textarea rows="4"></textarea></td>
                    </tr>
                    <tr>
                        <td><span> 日程 </span></td>
                        <td><input type="text"></input></td>
                    </tr>
                    <tr>
                        <td><span> 会場情報（会場名、会場住所等） </span></td>
                        <td><input type="text"></input></td>
                    </tr>
                    <tr>
                        <td><span> 備考 </span></td>
                        <td><textarea rows="4"></textarea></td>
                    </tr>
                </table>
                <input type="submit" value="フォーム送信"></input>
            </form>
        </div>
    </div>

    <!-- <img src="<?php echo get_template_directory_uri();?>/images/contact/mail.png"> -->

    <!-- <button class="playButton" hidden></button>
    <button class="resetButton" hidden></button> -->
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/contactPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/contactPage.js"></script>