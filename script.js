document.addEventListener("DOMContentLoaded", start);

function start() {


    document.querySelector("#menuknap").addEventListener("click", toggleMenu);
    document.querySelector("#menuknapluk").addEventListener("click", toggleMenu);

    document.querySelector("#corona").addEventListener("click", corona);

}

function toggleMenu() {
    console.log("toggleMenu");

    //            Burgermenuen er skjult på forsiden
    document.querySelector("#burger").classList.toggle("hidden");



    //            Hvis menuknappen er synlig skal den skjules. Hvis den er skjult skal den vises
    if (document.querySelector("#menuknap")) {
        document.querySelector("#menuknap").classList.toggle("hidden");
    }

}

function corona() {
    var element = document.getElementById("coronatekst");
    element.classList.toggle("hidden");
}



$("#kontaktform").submit(function (event) {

    event.preventDefault();
    try {
        $.ajax({
            url: "/mail_handler_phpmail.php",
            type: "POST",
            data: $(this).serialize()
        }).done(function (response) {
            console.log(response);
            let objekt = $.parseJSON(response);
            console.log(objekt);
            if (objekt.status == 0) {
                console.log(objekt.message);
                document.querySelector(".perror").innerHTML = objekt.message;
            } else {
                document.querySelector(".perror").innerHTML = objekt.message;
                console.log(objekt.message);
            }
        })
    } catch (error) {
        console.log(error)
    }

})
