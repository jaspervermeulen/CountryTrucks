require('./style.css');
{
    const init = () => {
        document.documentElement.classList.add("has-js");

        const bolivia = document.querySelector('.rightside__list--img1');
        bolivia.addEventListener("mousemove", handleClickBolivia);

        const swaziland = document.querySelector('.rightside__list--img2');
        swaziland.addEventListener("mousemove", handleClickSwaziland);

        const comoren = document.querySelector('.rightside__list--img3');
        comoren.addEventListener("mousemove", handleClickComoren);

        const djibouti = document.querySelector('.rightside__list--img4');
        djibouti.addEventListener("mousemove", handleClickDjibouti);

        const oman = document.querySelector('.rightside__list--img5');
        oman.addEventListener("mousemove", handleClickOman);

    }

    const handleClickBolivia = () => {
        makeInvisible();
        document.querySelector('.rightside__list--wrapper1').style.visibility = "visible";
        document.querySelector('.rightside__list--wrapper1').style.opacity = "1";
        document.querySelector('.rightside__list--wrapper1').style.zIndex = "1";
        document.querySelector('.rightside__list--img1').classList.add('rightside__list--img-big');
    }

    const handleClickSwaziland = () => {
        makeInvisible();
        document.querySelector('.rightside__list--wrapper2').style.visibility = "visible";
        document.querySelector('.rightside__list--wrapper2').style.opacity = "1";
        document.querySelector('.rightside__list--wrapper2').style.zIndex = "1";
        document.querySelector('.rightside__list--img2').classList.add('rightside__list--img-big');
    }

    const handleClickComoren = () => {
        makeInvisible();
        document.querySelector('.rightside__list--wrapper3').style.visibility = "visible";
        document.querySelector('.rightside__list--wrapper3').style.opacity = "1";
        document.querySelector('.rightside__list--wrapper3').style.zIndex = "1";
        document.querySelector('.rightside__list--img3').classList.add('rightside__list--img-big');
    }

    const handleClickDjibouti = () => {
        makeInvisible();
        document.querySelector('.rightside__list--wrapper4').style.visibility = "visible";
        document.querySelector('.rightside__list--wrapper4').style.opacity = "1";
        document.querySelector('.rightside__list--wrapper4').style.zIndex = "1";
        document.querySelector('.rightside__list--img4').classList.add('rightside__list--img-big');
    }

    const handleClickOman = () => {
        makeInvisible();
        document.querySelector('.rightside__list--wrapper5').style.visibility = "visible";
        document.querySelector('.rightside__list--wrapper5').style.opacity = "1";
        document.querySelector('.rightside__list--wrapper5').style.zIndex = "1";
        document.querySelector('.rightside__list--img5').classList.add('rightside__list--img-big');
    }

    const makeInvisible = () => {
        document.querySelector('.rightside__list--wrapper1').style.visibility = "invisible";
        document.querySelector('.rightside__list--wrapper1').style.opacity = "0";
        document.querySelector('.rightside__list--wrapper1').style.zIndex = "-1";
        document.querySelector('.rightside__list--img1').classList.remove('rightside__list--img-big');

        document.querySelector('.rightside__list--wrapper2').style.visibility = "invisible";
        document.querySelector('.rightside__list--wrapper2').style.opacity = "0";
        document.querySelector('.rightside__list--wrapper2').style.zIndex = "-1";
        document.querySelector('.rightside__list--img2').classList.remove('rightside__list--img-big');

        document.querySelector('.rightside__list--wrapper3').style.visibility = "invisible";
        document.querySelector('.rightside__list--wrapper3').style.opacity = "0";
        document.querySelector('.rightside__list--wrapper3').style.zIndex = "-1";
        document.querySelector('.rightside__list--img3').classList.remove('rightside__list--img-big');

        document.querySelector('.rightside__list--wrapper4').style.visibility = "invisible";
        document.querySelector('.rightside__list--wrapper4').style.opacity = "0";
        document.querySelector('.rightside__list--wrapper4').style.zIndex = "-1";
        document.querySelector('.rightside__list--img4').classList.remove('rightside__list--img-big');

        document.querySelector('.rightside__list--wrapper5').style.visibility = "invisible";
        document.querySelector('.rightside__list--wrapper5').style.opacity = "0";
        document.querySelector('.rightside__list--wrapper5').style.zIndex = "-1";
        document.querySelector('.rightside__list--img5').classList.remove('rightside__list--img-big');
    }

    init();
}
