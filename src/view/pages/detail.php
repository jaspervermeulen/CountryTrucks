<?php 
    $plus= $destination['id'] + 1;
    if($destination['id'] == 1){
        $min = $destination['id'];
    }else{
        $min = $destination['id'] - 1;
    }
?>
<main class="detail">
    <div class="detail__go">
        <a class="go__link" href="index.php?page=detail&id=<?php echo $min ?>">&#60; Vorige bestemming</a>
        <a class="go__link" href="index.php?page=detail&id=<?php echo $plus ?>">Volgende bestemming &#62;</a>
    </div>
    <section class="detail__intro">
        <h2 class="detail__intro--title"><span class="hidden"><?php echo $destination['name'] ?></span><img
                src="<?php echo $destination['img'] ?>" alt="destination"></h2>
        <p class="detail__intro--text">
            <?php echo $destination['biolong'] ?>
        </p>
    </section>
    <article class="detail__info">
        <h3 class="detail__info--title">5 hoogtepunten in <?php echo $destination['name'] ?></h3>
        <ul class="detail__info--list">
            <?php
            foreach($toDo as $toDo){
                echo '<li class="detail__info--item">&bull;' . ' ' . $toDo['toDo'] . '</li>';
            }
        ?>
        </ul>
        <img class="detail__info--svg" src="./assets/img/detail/detailBackground.svg" alt="background">
        <img class="detail__info--flag" src="<?php echo $destination['flag'] ?>"
            alt="<?php echo $destination['name'] ?>">
        <img class="detail__info--map" src="<?php echo $destination['map'] ?>" alt="<?php echo $destination['name'] ?>">
    </article>
    <article class="detail__facts">
        <h3 class="detail__facts--title">Local facts</h3>
        <ul class="detail__facts--list">
            <?php
            foreach($facts as $fact){
                echo '<li class="detail__facts--item">&bull;' . ' ' . $fact['fact'] . '</li>';
            }
        ?>
        </ul>
    </article>
    <article class="detail__shop">
        <h3 class="detail__shop--title">Koop nu een ticket en wacht niet in de rij</h3>
        <div class="detail__wrapper">
            <?php
                foreach($products as $product){
                    echo '<form class="detail__shop--form" action="index.php?page=cart" method="POST">';
                    echo '<input type="hidden" name="event_id" value="' . $product['id_destination'] . '" />';
                    echo '<input type="hidden" name="product_id" value="' . $product['id'] . '" />';
                    echo '<button class="shop__button" type="submit" name="action" value="add">';
                    echo '<img src="./assets/img/tickets/' . $product['type'] . '.svg" alt="' . $product['type'] . 'ticket">';
                    echo '<p class=shop__text>' . $product['description'] . '</p>';
                    echo '</button>';
                    echo '</form>';
                }
            ?>
        </div>
    </article>
</main>
<div class="detail__footer">
<div><img class="home__img3" src="./assets/img/footerBackground.svg" alt="background"></div>