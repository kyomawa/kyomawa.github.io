<?php include("includes/header.html") ?>

<main class="contact__main">
    <div class="contact__fond">
        <div class="contact__img">
            <img src="assets/img/contact.jpg" alt="" height="auto" width="1100">
        </div>
        <div class="contact__form">
            <form action="mail.php" method="POST">
                <h2>Me Contacter :</h2>
                <div class="form__div1">
                    <label for="name">Nom : </label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form__div2">
                    <label for="email">Email : </label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form__div3">
                    <label for="subject">Objet : </label>
                    <input type="text" name="subject" id="subject">
                </div>
                <div class="form__div4">
                    <label for="message">Message : </label>
                    <textarea name="message" id="message" cols="30" rows="10" style="resize: none;"></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</main>

<?php include("includes/footer.html") ?>