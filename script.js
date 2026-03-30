// const variable 
const libraryName = "Central Digital Library";

// let variables 
let totalBooks = 120;
let libraryStatus = "Open";

console.log("Library Name:", libraryName);
console.log("Total Books:", totalBooks);
console.log("Library Status:", libraryStatus);




function updateBooks() {
    totalBooks += 10;
    document.getElementById("bookCount").innerText = totalBooks;
    console.log("Updated Book Count:", totalBooks);
}



// Function declaration
function showWelcome() {
    alert("Welcome to the Library Management System");
}

// Function expression
const changeStatus = function () {
    libraryStatus = "Closed";
    document.getElementById("status").innerText = libraryStatus;
};

// Arrow function
const greetUser = (name) => {
    return "Hello " + name + ", happy reading!";
};

// Function with parameters + return
function calculateFine(daysLate) {
    return daysLate * 5;
}



const librarian = {
    name: "Anita",
    role: "Librarian",
    experience: 5,

    //METHOD
    updateExperience: function () {
        this.experience++;
        document.getElementById("experience").innerText = this.experience;
    }
};

console.log(librarian);
console.log(librarian.name);          // dot notation
console.log(librarian["role"]);       // bracket notation



function askUserName() {
    let userName = prompt("Enter your name:");
    if (userName) {
        document.getElementById("userName").innerText = userName;
        alert("Welcome " + userName);
    }
}

function confirmUpdate() {
    let choice = confirm("Do you want to update book count?");
    if (choice) {
        updateBooks();
    }
}



document.addEventListener("DOMContentLoaded", () => {

    // Click event – content change
    document.getElementById("welcomeBtn")
        .addEventListener("click", showWelcome);

    // Mouseover event – style change
    document.getElementById("home")
        .addEventListener("mouseover", function () {
            this.style.backgroundColor = "#ffff00";
        });

    // Mouseout event – reset style
    document.getElementById("home")
        .addEventListener("mouseout", function () {
            this.style.backgroundColor = "white";
        });

});
