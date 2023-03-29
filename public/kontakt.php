    <section id="kontaktformular">

        <h2><br>Skriv til os <br><br>Vi bestræber os på at svare inden for en time.<br> I vil altid få et svar fra os, og har i intet modtaget efter 24 timer,<br> så tjek jeres spam-filter da overraskende mange havner der.</h2>


        <form id="kontaktform" action="https://formspree.io/xvoqbyoz" method="POST">

            <!--            <form id="kontaktform" action="mail_handler_phpmail.php" method="POST">-->

            Navn: <br><input type="text" name="name" required><br>
            <!--            <span class="error">* <?php echo $nameErr; ?></span>-->

            Email: <br><input type="text" name="email" required><br>
            <!--            <span class="error">* <?php echo $emailErr; ?></span>-->

            Telefon: <br><input type="number" name="telefon" required><br>
            <!--            <span class="error"><?php echo $numberErr; ?></span>-->

            Antal deltagere: <br><input type="number" name="deltagere"><br>

            Dato for event: <br><input type="date" name="dato"><br>

            <label for="lokation">Lokation:</label><br>
            <div>
                <div>
                    <input class="inputfield" type="radio" id="kbh" name="lokation" value="København" required>
                    <label class="label" for="kbh">København</label><br>
                </div>
                <div>
                    <input class="inputfield" type="radio" id="arhus" name="lokation" value="Århus">
                    <label class="label" for="kbh">Århus</label><br>
                </div>
                <div>
                    <input class="inputfield" type="radio" id="dig" name="lokation" value="Hosjer">
                    <label class="label" for="kbh">Andet sted (eks. konferencecenter, i firmaet eller andet)</label><br>
                </div>
            </div>
            <br>
            <label for="arran">Firma eller privat:</label>
            <!--            <span class="error">* <?php echo $emailErr; ?></span>-->

            <br>
            <div>
                <div>
                    <input class="inputfield" type="radio" id="kbh" name="arrang" value="firma" required>
                    <label class="label" for="firma">Firma</label><br>
                </div>
                <div><input class="inputfield" type="radio" id="kbh" name="arrang" value="privat">
                    <label class="label" for="privat">Privat</label><br>
                </div>
            </div>

            <br>

            Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
            <!--            <div>-->
            <!--
                <label>Indtast koden nedenfor</label>
                <span id="captcha-info" class="info"></span><br />
                <input type="text" name="captcha" id="captcha" class="demoInputBox" required><br>
            </div>
            <div>
                <img id="captcha_code" src="/captcha_code.php" />
                <button class="btnRefresh" onClick="refreshCaptcha();">Refresh Captcha</button>
            </div>
-->
            <input id="submit" type="submit" name="submit" value="Send">
        </form>
        <!--
        <form action="mail_handler.php" method="post">
            Navn: <br><input type="text" name="name"><br>
            Email: <br><input type="text" name="email" required><br>
            Telefon: <br><input type="number" name="telefon"><br>
            Antal deltagere: <br><input type="number" name="deltagere"><br>
            Dato for event: <br><input type="date" name="dato"><br>
            <label for="lokation">Lokation:</label><br>
            <select id="lokation" name="lokation">
                <option value="kbh">København</option>
                <option value="arhus">Århus</option>
            </select>
            <br>
            <label for="arran">Firma eller privat:</label>
            <br>
            <select id="arrang" name="arrang">
                <option value="firma">Firma</option>
                <option value="privat">Privat</option>

            </select>
            <br>
            Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
            <input type="submit" name="submit" value="Send">
        </form>
-->
    </section>

    <section id="errorPop">
        <div class="errorcontent">
            <p class="perror"></p>
        </div>
    </section>