<main class="checkout">
    <?php
        if (empty($_POST) || !empty($errors)) {
        
        ?>
    <form class="checkout__form" action="index.php?page=checkout" method="POST">
        <fieldset class="checkout__section">
            <legend class="checkout__title">Persoonlijke gegevens</legend>
            <input type="hidden" name="action" value="insertBuyer">
            <?php
                    foreach($_SESSION['cart'] as $item) {
                        echo '<input type="hidden" name="product" value="' . $item['product']['name'] . '">';
                    }
                ?>
            <div class="checkout__wrapper">
                <label class="checkout__label" for="firstname">
                    <p class="checkout__q">Voornaam:</p>
                    <input class="checkout__input checkout__input1 input" type="text" name="firstname" required
                        minlength="3">
                    <p class="error"></p>
                </label>
                <label class="checkout__label" for="lastname">
                    <p class="checkout__q">Achternaam:</p>
                    <input class="checkout__input checkout__input1 checkout__input--margin input" type="text"
                        name="lastname" required minlength="3">
                    <p class="error"></p>
                </label>
            </div>
            <label class="checkout__label" for="email">
                <p class="checkout__q">Email:</p>
                <input class="checkout__input input" type="email" name="email" required minlength="3">
                <p class="error"></p>
            </label>
            <label class="checkout__label" for="birthday">
                <p class="checkout__q">Geboortedatum:</p>
                <input type="date" class="checkout__input input" name="birthday" min="01-01-1900" max="01-01-2015"
                    placeholder="dd/mm/yyyy" required />
                <p class="error"></p>
            </label>
        </fieldset>
        <fieldset class="checkout__section">
            <legend class="checkout__title">Betaalwijze</legend>
            <label class="" for="payment">
                <p class="checkout__q">Betaalwijze:</p>
                <select class="checkout__select input" name="payment" id="" required>
                    <option value="">-----</option>
                    <option value="bancontact">Bancontact</option>
                    <option value="visa">Visa</option>
                    <option value="paypall">Paypall</option>
                </select>
                <p class="error"></p>
            </label>
            <div class="submit__wrapper">
                <input type="submit" class="checkout__submit" value="Naar betalen">
            </div>
        </fieldset>
    </form>
    <?php
    }else{
        echo '<p class="ticket__succes">Je bestelling is ontvangen, je ontvangt zodra een mail! <br> <br> Keer <a class="ticket__succes--link" href="index.php?page=home">hier</a> terug naar de home pagina.</p>';
    }
?>
</main>
<div class="checkout__footer">
    <div><img class="home__img3" src="./assets/img/footerBackground.svg" alt=""></div>