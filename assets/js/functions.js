console.log("work")

function changeTheme(theme) {
    var b = document.querySelector("html");
    b.setAttribute("data-theme", theme)

}

function changePage(whereTo) {
    var page2 = document.getElementById("page2")
    var page1 = document.getElementById("page1")
        // var step1 = document.getElementById("step1")
    var step2 = document.getElementById("step2")
    if (whereTo == "next") {
        console.log("p2");

        page1.style.display = "none";
        page2.style.display = "block";
        step2.className = "step step-primary"


    } else if (whereTo == "prev") {
        console.log("p1");
        page1.style.display = "block";
        page2.style.display = "none";
        step2.className = "step"

    }
}