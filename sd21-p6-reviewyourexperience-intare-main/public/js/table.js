function viewImg(input, id) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        let rowId = "#" + id
        console.log(rowId)
        reader.onload = function (e) {
            $(rowId).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);

        console.log(rowId)
    }
}

let previeusElement = "h"
let previeusChangeButton = "h"

function Click(button,id){
    let element = document.getElementById(id);

    let addButton = document.getElementById("addButton");
    let changeButton = document.getElementById(button);
    element.classList.toggle("collapse");

    let checkElement = element
    let checkButton = changeButton





    if(changeButton == addButton){
        console.log(addButton.textContent)
        if(addButton.textContent == "Sluiten"){
            console.log("voeg")
            addButton.style.backgroundColor = "#0d6efd"
            addButton.style.borderColor = "#0d6efd"
            addButton.textContent = "Auto Toevoegen"
            $("#saveAdd").hide()
            checkElement = "h";
            checkButton = "h"

        }else if(addButton.textContent == "Auto Toevoegen") {
            addButton.style.backgroundColor = "#dc3545"
            addButton.style.borderColor = "#dc3545"
            addButton.textContent = "Sluiten"
            $("#saveAdd").show()


            if(previeusElement != "h" && previeusElement != element){
                previeusElement.classList.toggle("collapse");

                previeusChangeButton.textContent = "Veranderen"
                previeusChangeButton.style.backgroundColor = "#0d6efd"
                previeusChangeButton.style.borderColor = "#0d6efd"
            }

        }
    }else{
        if(changeButton.textContent == "Veranderen"){

            if(previeusElement != "h" && previeusElement != element){
                previeusElement.classList.toggle("collapse");
                if(previeusChangeButton == addButton){
                    previeusChangeButton.textContent = "Auto Toevoegen"
                    previeusChangeButton.style.backgroundColor = "#0d6efd"
                    previeusChangeButton.style.borderColor = "#0d6efd"
                    $("#saveAdd").hide()

                }else {
                    previeusChangeButton.textContent = "Veranderen"
                    previeusChangeButton.style.backgroundColor = "#0d6efd"
                    previeusChangeButton.style.borderColor = "#0d6efd"
                }
            }

            changeButton.textContent = "Sluiten"
            changeButton.style.backgroundColor = "#dc3545"
            changeButton.style.borderColor = "#dc3545"

        }else if(changeButton.textContent == "Sluiten"){
            changeButton.textContent = "Veranderen"
            previeusChangeButton.style.backgroundColor = "#0d6efd"
            previeusChangeButton.style.borderColor = "#0d6efd"
            checkElement = "h";
            checkButton = "h"

        }
    }

    previeusElement = checkElement;
    previeusChangeButton = checkButton

}



function rotateIcon(element){
    const myRotate = document.getElementById(element)
    const myCollapsible = document.getElementById('reviews')
    if(element === "reviewsButton" && !myCollapsible){
        return
    }
    if(myRotate.style.transform === "rotate(90deg)"){
        myRotate.style.transform = "revert"
    }else {
        myRotate.style.transform = "rotate(90deg)"

    }
}

function closeReview(){
    const myCollapsible = document.getElementById('reviews')
    if(myCollapsible) {
        const myButton = document.getElementById('reviewsButton')
        let classes = myCollapsible.className.split(" ")
        let show = "show"
        const bsCollapse = new bootstrap.Collapse('#reviews', {
            toggle: false
        })

        if (classes.find(element => element == show)) {
            bsCollapse.hide()
            myButton.style.transform = "initial"

        }
    }
}

function closeWriteReview(){
    const myCollapsible = document.getElementById('writeReview')
    const myButton = document.getElementById('writeReviewButton')
    let  classes = myCollapsible.className.split(" ")
    let show = "show"
    const bsCollapse = new bootstrap.Collapse('#writeReview', {
        toggle: false
    })

    if(classes.find(element => element == show)){
        bsCollapse.hide()
        myButton.style.transform = "initial"

    }
}

let clicked = 0;

function clickRating(number){

    clicked = number
    let stars = document.querySelectorAll(".writeStar")

    stars.forEach(function (value, index) {
        if (index < number ) {
            value.classList.add("bi-star-fill")
            value.classList.remove("bi-star")
        }else{
            value.classList.add("bi-star")
            value.classList.remove("bi-star-fill")
        }
    })
}
function enterRating(number){




        let stars = document.querySelectorAll(".writeStar")

        stars.forEach(function (value, index) {
            if (index < number && clicked  <= index) {
                value.classList.add("bi-star-fill")
                value.classList.remove("bi-star")
            }
        })

}
function leaveRating(number){


        let stars = document.querySelectorAll(".writeStar")

        stars.forEach(function (value, index) {
            if (index < number && clicked  <= index) {
                value.classList.add("bi-star")
                value.classList.remove("bi-star-fill")
            }
        })

}

function textCount(element){
    let lengthOfText = element.value.length

    let textCount = document.getElementById("textCount")
    if(120 - lengthOfText > 1){
        textCount.textContent = `Nog ${120 - lengthOfText} woorden over`
    }else if(120 - lengthOfText === 1){
        textCount.textContent = `Nog ${120 - lengthOfText} woord over`
    } else{
        textCount.textContent = "Geen woorden meer oven"
    }


}






